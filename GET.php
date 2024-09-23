<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
   
    $email = $_GET['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format<br>";
    } else {
        echo "Valid email: $email<br>";
    }

    
    $mobile = $_GET['mobile'];
    if (preg_match("/^[0-9]{10}$/", $mobile)) {
        echo "Valid mobile number: $mobile<br>";
    } else {
        echo "Invalid mobile number<br>";
    }

    
    if (!empty($_GET['options'])) {
        echo "Selected options:<br>";
        foreach ($_GET['options'] as $option) {
            echo $option . "<br>";
        }
    } else {
        echo "No options selected<br>";
    }
}
?>