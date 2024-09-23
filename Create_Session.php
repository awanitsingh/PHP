<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "johndoe@example.com";
// Access session variables
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"] . "<br>";
?>