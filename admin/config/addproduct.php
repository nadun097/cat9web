<?php

include 'config.php';

$fname = $_POST['f1'];
$lname = $_POST['f2'];
$mobile = $_POST['f3'];
$dob = $_POST['dob'];


$sql = "INSERT INTO userdetails(firstname, lastName, contactNO,DOB)
VALUES ( '$fname','$lname','$mobile','$dob')";

if(mysqli_query($conn, $sql)) {
  echo "New record added";
}

else {
  echo "error". ;
}
mysqli_close($conn);
?>
 