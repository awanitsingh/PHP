<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $departure = $_POST['departure'];
    $destination = $_POST['destination'];
    $date = $_POST['date'];
    $class = $_POST['class'];
    $passengers = $_POST['passengers'];
    $payment = $_POST['payment'];

    // Validate contact number (10 digits)
    if (!preg_match('/^\d{10}$/', $contact)) {
        echo "Invalid contact number. It must be exactly 10 digits.";
        exit;
    }

    // Display the reservation details
    echo "<h2>Reservation Details</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Contact Number: " . htmlspecialchars($contact) . "<br>";
    echo "Departure Station: " . htmlspecialchars($departure) . "<br>";
    echo "Destination Station: " . htmlspecialchars($destination) . "<br>";
    echo "Date of Journey: " . htmlspecialchars($date) . "<br>";
    echo "Class: " . htmlspecialchars($class) . "<br>";
    echo "Number of Passengers: " . htmlspecialchars($passengers) . "<br>";
    echo "Payment Method: " . htmlspecialchars($payment) . "<br>";
}
?>