<?php
echo "<h2>Create Cookie in PHP</h2>";
$cookie_name="user";
$cookie_value="Alex Porter";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");  //86400sec = 1 day
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie named ".$cookie_name." is not Modify!";
}
else{
    echo "Cookie named ".$cookie_name." is Modify!<br>";
    echo "Value is ".$_COOKIE[$cookie_name];
}
?>
</body>
</html>