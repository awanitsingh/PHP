<?php

interface Moveable{
    public function move();
}

interface Flyable {
    public function fly();
}

interface Swimmable {
    public function swim();
}

class Bird implements Moveable, Flyable {

    public function move() {
        echo "Bird is walking.<br>";
    }

    public function fly() {
        echo "Bird is flying.<br>";
    }
}

class Fish implements Moveable, Swimmable {

    public function move() {
        echo "Fish is swimming.<br>";
    }

    public function swim() {
        echo "Fish is swimming.<br>";
    }
 }


 class Duck implements Moveable, Swimmable, Flyable {

    public function move() {
        echo "Duck is moving.<br>";
    }

    public function swim() {
        echo "Duck is swimming.<br>";
    }

    public function fly() {
        echo "Duck is flying.<br>";
    }
 }

$bird = new Bird();
$bird->move();
$bird->fly();

$fish = new Fish();
$fish->move();
$fish->swim();

$duck = new Duck();
$duck->move();
$duck->swim();
$duck->fly();

?>

