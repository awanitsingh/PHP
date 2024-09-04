<!-- <?php
// function myTest() {
//     static $x = 1;
//     echo $x;
//     $x++;
// }
// myTest();
// echo"<br>";
// myTest();
// echo"<br>";
?> -->



<?php
function Static_var()
{
    static $num1=2;
    $num2=5;
    $num1++;
    $num2++;

    echo "Static: ".$num1."<br>";
    echo "NonStatic: ".$num2."<br>";
}
Static_var();
Static_var();
Static_var();
Static_var();
Static_var();
Static_var();

?>