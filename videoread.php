<?php 
include "conf.php";


$sql = "SELECT * FROM vidiogallary";
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
        $videolink = $row["videolink"];
        $backpic = $row["backpic"];
        $title = $row["title"];
        $caption = $row["caption"];
        $catagory = $row["catagory"];
        
        echo '<tr> 
                <td>'.$id.'</td> 
                <td>'.$videolink.'</td> 
                <td>'.$backpic.'</td> 
                <td>'.$title.'</td> 
                <td>'.$caption.'</td> 
                <td>'.$catagory.'</td> 
                <td><a href="edit.php?id='.$id.'">Edit</a> | <a href="delete.php?id='.$id.'">Delete</a></td> 
              </tr>';
        
       
    }
    echo '</table>';
} else {
    echo "No records found";
}