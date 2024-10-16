<?php include 'connection.php';?>
<!DOCTYPE html>

<body>
    <div>
        <form action="" method="POST">
            <lable for="Fname">First Name</lable>
            <input type="text" name="Fname" placeholder="First Name" required><br><br>

            <lable for="lname">Last Name</lable>
            <input type="text" name="Lname" placeholder="Last Name" required><br><br>

            <lable for="age">Age:</lable>
            <input type="number" name="age" placeholder="Age" required><br><br>

            <input type="submit" name="save_btn" value="Save">
            <button> <a href="view.php">View</a></button>
</form>
</div>

<?php

if (isset($_POST['save_btn']))
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $age = $_POST['age'];

    $query = "INSERT INTO student (Fname, Lname, age) VALUES ('$Fname', '$Lname', $age)";
    $data = mysqli_query($con, $query);
    if($data) {
        echo "Entered data is saved successfully";
    } else {
        echo "Again save data";
    }
}
?>
</body>
</html>