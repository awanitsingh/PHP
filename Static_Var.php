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


<?php
function start($string) {
    if($string<45) 
    return 20;
else 
return 40;
}

$t = start(90);
if($t<20) {
    echo"Have a good morning";
}
else {
    echo"Have a good night";
}
?>




<?php
function TV($string) {
    echo "my fav TV show is ".$string;
    function b() {
        echo "I am here to spoil this code";
    }
}
function b() {
    echo"I am here to spoil this code";
}
b();
TV("Sherlock");
?>



<?php
function CallAll($x,$y) {
    echo($x+$y);
    echo"<br>";
    echo($x-$y);
    echo"<br>";
    echo($x*$y);
    echo"<br>";
    echo($x/$y);
    echo"<br>";
    echo($x%$y);
    echo"<br>";
    
}

$x = 10;
$y = 6;
CallAll();
?>


