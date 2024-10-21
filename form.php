<?php
include 'validate.php';
?>
<form action="form.php" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="website">Website:</label><br>
    <input type="url" id="website" name="website"><br>

    <label for="comment">Comment:</label><br>
    <textarea id="comment" name="comment" rows="5" cols="50"></textarea><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label><br>

    <input type="submit" value="Submit">
</form>

<?php
// Include the success message display logic
require 'display.php';
?>