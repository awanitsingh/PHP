<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn) {
    echo"<b>Database connected</b><br>";
} else {
    echo "Database not connected";
}
?>