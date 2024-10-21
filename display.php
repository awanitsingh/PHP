<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($name) && !empty($email) && !empty($website)) {
    echo "<h3>Form submitted successfully!</h3>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Website: " . htmlspecialchars($website) . "</p>";
    echo "<p>Comment: " . htmlspecialchars($comment) . "</p>";
    
    // Check if gender is set before using it
    if (!empty($_POST["gender"])) {
        $gender = test_input($_POST["gender"]);
        echo "<p>Gender: " . htmlspecialchars($gender) . "</p>";
    } else {
        echo "<p>Gender: Not specified</p>";
    }
}
?>