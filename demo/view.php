<?php include 'connection.php';?>

<table border="1px" cellpadding="10px" cellspacing="0">
    <tr>

        <th>First Name</th>
        <th>Last Name</th>
        <th>Age</th>

    </tr>

<?php

$query = "SELECT * FROM student";
$data = mysqli_query($con, $query);
$result = mysqli_num_rows($data);

if($result > 0) {
    while($row = mysqli_fetch_array($data)) {
        echo "<tr>";
           echo  "<td>".htmlspecialchars($row['Fname'])."</td>";
            echo "<td>".htmlspecialchars($row['Lname'])."</td>";
            echo "<td>".htmlspecialchars($row['age'])."</td>";
       echo "</tr>";
    }

    } else {
        echo "<tr><td colapan='5'> No records found.</td></tr>";
    }
    ?>
</table>