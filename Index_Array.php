<?php
$courses = array("PHP","Laravel","Node.js");
$courses_length = count($courses);

for ($x=0;$x<$courses_length;$x++) {
    echo $courses[$x];
    echo"<br>";
}
?>