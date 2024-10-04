<?php 
include "conf.php"; 
    $user_id = $_GET['id'];

    $sql = "DELETE FROM userdetails WHERE id='$user_id'";
     $result = mysqli_query($conn, $sql);
	 
     if ($result == TRUE) {
        echo "Record deleted successfully.";
    }else{
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
?>