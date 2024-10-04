<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <link rel="stylesheet" href="button.css">
     <script src="croll.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0a7eeaa06.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="page01style.css">
   

   
    <style>
        footer {
            width: 100%;
            background: rgb(31, 31, 31);
            color: rgb(159, 159, 159);
            padding: 20px 0 25px;
            font-size: 13px;
            line-height: 20px;
            bottom:auto;
        }
        body {
            background-color: white;
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
    
        .card {
            background-color: #f2f2f2;
            margin-bottom: 30px;
            border-radius: 20px;
            
            
        }
        .card-img-top {
         
            border-radius: 20px 20px 0 0; 
            cursor: pointer;
            width: 100%;
            transition: 0.3s;
        }
        .card-img-top:hover {
            transform: scale(1.05);
            border-radius: 20px 20px 20px 20px;
            
        }
        .row{
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }
        
        
        
 
        
        
        
        
       
    </style>
</head>
<body>
    <header>
        <img href="#h1" src="logonumb.png" class="logo">
        <nav class="navigation">
            <a href="#h1" class="nav-link">ART</a>
            <a href="#h2" class="nav-link">ANIMATION</a>
            <a href="#h3" class="nav-link">NTF</a>
            <a href="#h4" class="nav-link">STORE</a>
        </nav>
    </header>

    <script>
      const navLinks = document.querySelectorAll(".nav-link");

      navLinks.forEach((link) => {
        link.addEventListener("click", function () {
          navLinks.forEach((link) => link.classList.remove("active"));
          this.classList.add("active");
        });
      });
    </script>

    <center><img src="Comp 1_6.gif" width="100%"></center>
    <br> <br>
    <div class="container">
        <div class="row" id="product-container"></div>
    </div>
   

    <?php 
include "conf.php";

$sql = "SELECT * FROM catstore";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<div class="row">'; 

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $pname = $row["pname"];
        $pprice = $row["pprice"];
        $ptype = $row["type"];
        $cap = $row["cap"];
        $rate = $row["rate"];

        echo '<div class="col-md-3 mb-4">';
        echo '<div class="card" style="width: 100%;">';
        echo '<img src="' . $cap . '" class="card-img-top" alt="product image">'; 
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $pname . '</h5>';
        echo '<p class="card-text">Product Price: ' . $pprice . '<br>' . $rate . '</p>';
        echo '</div>';

        echo '<div class="container">';
        if ($ptype == 'arts') {
            echo '<a href="customized.html" target="_blank" class="btn btn1">';
            echo '<span class="textq">SHOP NOW <b>&nbsp;<span class="textq2">&#10230;</span></b></span>';
            echo '</a>';
        } 
        if ($ptype == 'customized t shirt') {
            echo '<a href="customized.html" target="_blank" class="btn btn1">';
            echo '<span class="textq">SHOP NOW <b>&nbsp;<span class="textq2">&#10230;</span></b></span>';
            echo '</a>';
        }
        if ($ptype == 'store product') {
            echo '<a href="customized.html" target="_blank" class="btn btn1">';
            echo '<span class="textq">SHOP NOW <b>&nbsp;<span class="textq2">&#10230;</span></b></span>';
            echo '</a>';
        }
        if ($ptype == 'stickers') {
            echo '<a href="https://www.youtube.com/watch?v=WYIub3bI2Mc&list=RDuU241b7PSUk&index=27" target="_blank" class="btn btn1">';
            echo '<span class="textq">SHOP NOW <b>&nbsp;<span class="textq2">&#10230;</span></b></span>';
            echo '</a>';
        }
        
     
        echo '</div>';

        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo "No records found";
}
?>
    

<footer>
        <div class="spons">
            <center>
                <img src="c l o t h i n g.png" class="logof-f">
                <img src="mu-logo-full-gray.png" class="logof-f">
                <img src="reasons  podcast.png" class="logof-f2">
            </center>
        </div>
        <div class="row">
            <div class="col">
                <img src="cat 9 logo.png" class="logof">
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iusto aut pariatur necessitatibus fugit fuga dolorem veniam ut ratione tempora voluptatibus.
                </p>
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
            <p class="copy">
                <u>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, perferendis atque architecto nesciunt</u>
            </p>
        </center>
    </footer>

</body>
</html>

