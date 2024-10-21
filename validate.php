<?php
$name = $email = $website = $comment = "";
$nameErr = $emailErr = $websiteErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // Validate website
    if (empty($_POST["website"])) {
        $websiteErr = "Website is required";
    } else {
        $website = test_input($_POST["website"]);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $websiteErr = "Invalid URL format";
        }
    }

    // Process comment if provided
    if (!empty($_POST["comment"])) {
        $comment = test_input($_POST["comment"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Display errors if any
if (!empty($nameErr)) echo $nameErr . "<br>";
if (!empty($emailErr)) echo $emailErr . "<br>";
if (!empty($websiteErr)) echo $websiteErr . "<br>";
?>