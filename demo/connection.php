<?php
$host="localhost";
$user="root";
$pass="";
$db="demo";
$con=mysqli_connect($host,$user,$pass,$db);
if($con) {
    echo"Database connected";
} else {
    echo"Failed to connect to database";
}
?>