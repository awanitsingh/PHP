<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Railway Reservation Form</title>
</head>
<body>
    <h2>Railway Reservation Form</h2>
    <form action="process_reservation.php" method="POST">
        <label for="name">Passenger Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="contact">Contact Number (10 digits):</label>
        <input type="text" id="contact" name="contact" pattern="\d{10}" required><br><br>

        <label for="departure">Departure Station:</label>
        <input type="text" id="departure" name="departure" required><br><br>

        <label for="destination">Destination Station:</label>
        <input type="text" id="destination" name="destination" required><br><br>

        <label for="date">Date of Journey:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="class">Class:</label>
        <select id="class" name="class" required>
            <option value="">Select Class</option>
            <option value="Sleeper">Sleeper</option>
            <option value="AC 3 Tier">AC 3 Tier</option>
            <option value="AC 2 Tier">AC 2 Tier</option>
            <option value="AC 1 Tier">AC 1 Tier</option>
        </select><br><br>

        <label for="passengers">Number of Passengers:</label>
        <input type="number" id="passengers" name="passengers" min="1" max="6" required><br><br>

        <label>Payment Method:</label><br>
        <input type="radio" id="credit" name="payment" value="Credit Card" required>
        <label for="credit">Credit Card</label><br>

        <input type="radio" id="debit" name="payment" value="Debit Card" required>
        <label for="debit">Debit Card</label><br>

        <input type="radio" id="netbanking" name="payment" value="Net Banking" required>
        <label for="netbanking">Net Banking</label><br>

        <input type="radio" id="upi" name="payment" value="UPI" required>
        <label for="upi">UPI</label><br><br>

        <button type="submit">Book Ticket</button>
    </form>
</body>
</html>