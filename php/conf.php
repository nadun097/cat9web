<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "catstore";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

    die("Connection failed" . mysqli_connect_error());
}
echo "Successfully connected";

?>