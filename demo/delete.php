<?php include 'connection.php';
$id =$_GET['id'];
$query = "DELETE FROM student WHERE id='9' ";
$data=mysqli_query($con,$query);
if($data) {
    echo "Data deleted successfully";
} else {
    echo "Failed to delete data";
}
?>