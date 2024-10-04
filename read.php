<?php 
include "conf.php";


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
        $ptype = $row["type"];
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
        
       
    }
    echo '</table>';
} else {
    echo "No records found";
}
