<?php 
include "conf.php";

// Fetch records from the database
$sql = "SELECT * FROM catstore";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo '<table border="1" cellspacing="2" cellpadding="2"> 
          <tr> 
              <td>ID</td> 
              <td>Product Name</td> 
              <td>Product Price</td> 
              <td>Product Type</td> 
              <td>Caption</td>
              <td>Rate</td>
              <td>Action</td>
          </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $pname = $row["pname"];
        $pprice = $row["pprice"];
        $ptype = $row["ptype"];
        $cap = $row["cap"];
        $rate = $row["rate"];
        
        echo '<tr> 
                <td>'.$id.'</td> 
                <td>'.$pname.'</td> 
                <td>'.$pprice.'</td> 
                <td>'.$ptype.'</td> 
                <td>'.$cap.'</td> 
                <td>'.$rate.'</td> 
                <td><a href="edit.php?id='.$id.'">Edit</a> | <a href="delete.php?id='.$id.'">Delete</a></td> 
              </tr>';
        
        
        echo '<div class="card" style="width: 28rem;">
                <img src="Screenshot 2024-06-25 031218.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">'.$pname.'</h5>
                  <p class="card-text">Product Price: '.$pprice.'<br>Product Type: '.$ptype.'<br>Caption: '.$cap.'<br>Rate: '.$rate.'</p>
                </div>
                <div class="container">
                  <a href="#" target="_blank" class="btn btn1">
                    <span class="textq">SHOP NOW <b>&nbsp;<span class="textq2">&#10230;</span></b></span>
                  </a>
                </div>
              </div>';
    }
    echo '</table>';
} else {
    echo "No records found";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="button.css" />
    <link rel="stylesheet" href="ta" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0a7eeaa06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="page01style.css" />
    <style>
        footer {
            width: 100%;
            right: 0;
            position: absolute;
            bottom: -200%;
            background: rgb(31, 31, 31);
            color: rgb(159, 159, 159);
            padding: 20px 0 25px;
            font-size: 13px;
            line-height: 20px;
        }
        body {
            background-color: #000000;
            color: #000000;
        }
        .btn {
            border: 1px solid #000000;
            background: rgb(0, 0, 0);
            border-radius: 0px;
        }
        .btn::before {
            background: #ffffff;
        }
        .btn1 {
            color: #ffffff;
        }
        .btn1:hover {
            color: #000000;
        }
        .btn1:hover.textq.textq2 {
            color: #000000;
        }
        .btn1:hover::before {
            width: 170px;
            height: 170px;
            top: 50%;
            left: 50%;
        }
        .btn:hover .textq {
            transform: translateX(10%);
        }
    </style>
</head>
<body>
    <header>
        <img href ="#h1" src="logonumb.png" class="logo" />
        <nav class="navigation">
            <a href="#h1" class="nav-link">ART</a>
            <a href="#h2" class="nav-link">ANIMATION</a>
            <a href="#h3" class="nav-link">NTF</a>
            <a href="#h4" class="nav-link">STORE</a>
        </nav>
    </header>
    <br>
    <center><img src="Comp 1_6.gif" width="100%" /></center>

    <footer>
        <div class="spons">
            <center>
                <img src="c l o t h i n g.png" class="logof-f">
                <img src="mu-logo-full-gray.png" class="logof-f">
                <img src="reasons podcast.png" class="logof-f2">
            </center>
        </div>
        <div class="row">
            <div class="col">
                <img src="cat 9 logo.png" class="logof">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto aut pariatur necessitatibus fugit fuga dolorem veniam ut ratione tempora voluptatibus.</p>
            </div>
            <div class="col">
                <h3>CONTACT</h3>
                <p>Sri Lanka | postal code - 81000</p>
                <p>contactcat9business@gmail.com</p>
                <p class="email-id">+94 765512595</p>
            </div>
            <div class="col">
                <h3>FOOTER LINK</h3>
                <a href="#h1" class="nav-link">ART</a>
                <a href="#h2" class="nav-link">ANIMATION</a>
                <a href="#h3" class="nav-link">NTF</a>
                <a href="#h4" class="nav-link">STORE</a>
            </div>
            <div class="col">
                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-square-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <center>
            <p class="copy"><u>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, perferendis atque architecto nesciunt</u></p>
        </center>
    </footer>
</body>
</html>


