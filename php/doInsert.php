<?php
include 'conf.php';

$pname = $_POST['pname'];
$pprice = $_POST['pprice'];
$ptype = $_POST['ptype'];
$cap = $_POST['cap'];
$rate = $_POST['rate'];

$sql = "INSERT INTO catstore (pname,pprice,type,cap,rate)
VALUES ('$pname','$pprice','$ptype','$cap','$rate')";

if (mysqli_query($conn,$sql)){
echo "New record added";
}
else{
    echo "Error" . mysqli_error($conn);
}
mysqli_close($conn);
?>