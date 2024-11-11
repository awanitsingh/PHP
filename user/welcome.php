<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If the session is not set, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        /* Basic reset and font styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .welcome-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            font-size: 2.5em;
            color: #333;
        }

        p {
            color: #555;
            margin: 20px 0;
        }

        .welcome-container a {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            background-color: #007BFF;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 10px 5px;
            transition: background-color 0.3s ease;
        }

        .welcome-container a:hover {
            background-color: #0056b3;
        }

        .user-greeting {
            font-weight: bold;
            color: #007BFF;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1>Welcome, <span class="user-greeting"><?php echo htmlspecialchars($_SESSION['user']); ?></span>!</h1>
        <p>You have successfully logged in to our system.</p>
        <p>Feel free to explore the secure areas of the site.</p>
        
        <!-- Navigation Buttons -->
        <a href="secure_page.php">Go to Secure Page</a>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>