<?php
class Classroom{
    public $Student;
    public $laptop;

function set_Student($Student){
    $this->Student=$Student;
}
function get_Student(){
    return $this->Student;
}
function set_laptop($laptop){
    $this->laptop=$laptop;
}
function get_laptop(){
    return $this->laptop;
}
}

$K22QY=new Classroom();
$K22QY->set_Student('K22QY');
$K22QY->set_laptop('Mac');
echo "Student:  ".$K22QY->get_Student();
echo "<br>";
echo "laptop: ".$K22QY->get_laptop();
?>

