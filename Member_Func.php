<?php

class Car {
    public $make;
    public $model;
    public $year;

    // Corrected the constructor method name with a space between "function" and "__construct"
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayCarInfo() {
        echo "Make: $this->make\n";
        echo "Model: $this->model\n";
        echo "Year: $this->year\n";
    }
}

// Creating car objects
$myCar1 = new Car("Toyota", "Camry", 2022);
$myCar2 = new Car("Honda", "Civic", 2021);

// Displaying car information
$myCar1->displayCarInfo();
echo "\n";
$myCar2->displayCarInfo();

?>