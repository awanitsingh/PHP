<?php
function myTest() {
    static $x = 1;
    echo $x;
    $x++;
}
myTest();
echo"<br>";
myTest();
echo"<br>";
?>