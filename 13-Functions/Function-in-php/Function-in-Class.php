<?php

/*
Fungsi dalam Kelas (Method)
Dalam Object-Oriented Programming (OOP), fungsi yang didefinisikan dalam kelas disebut method. Method bekerja dengan objek dan properti dalam kelas.
*/

class car {
    public $brand;

    function __construct($brand) {
        $this->brand = $brand;
    }

    function showBrand() {
        return "Car Brand: $this->brand";
    }
}

$car = new car("Toyota");
echo $car->showBrand();  // Output: Car Brand: Toyota