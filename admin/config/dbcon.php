<?php   

$servername = "localhost";
$username = "root";
$password ="";
$database = "catstore";

$conn = mysqli_connect($servername, $username, $password,$database);
 if(!$conn){
 die("connection fild". mysqli_connect_error());}



?> 


