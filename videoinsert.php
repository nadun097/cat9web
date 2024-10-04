<?php
include 'conf.php';

$videolink = $_POST['videolink'];
$backpic = $_POST['backpic'];
$title = $_POST['title'];
$caption = $_POST['caption'];
$catagory = $_POST['catagory'];

$sql = "INSERT INTO vidiogallary(videolink,backpic,title,caption,catagory)
VALUES ('$videolink','$backpic','$title','$caption','$catagory')";

if (mysqli_query($conn,$sql)){
echo "New record added";
}
else{
    echo "Error" . mysqli_error($conn);
}
mysqli_close($conn);
?>