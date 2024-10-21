<?php
$char = '*';
echo"Enter a character: " . $char ."<br>";
if(ctype_alpha($char)) {
    echo"$char is an alphabet";
}
else {
    echo"$char is not an alphabet"; 
}
?> 



