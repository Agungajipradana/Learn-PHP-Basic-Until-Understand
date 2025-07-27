<?php

/*
Object adalah salah satu tipe data kompleks dalam PHP yang digunakan untuk merepresentasikan entitas dengan properti (data) dan metode (fungsi) yang terkait.

Object dibuat dari class. Class adalah cetak biru (blueprint) untuk membuat object.

Object sangat berguna dalam pemrograman berorientasi objek (OOP), memungkinkan kita membungkus data dan perilaku dalam satu struktur.

Ciri-ciri Tipe Data Object:
    1. Dibuat dari class.
    2. Memiliki properti (variabel di dalam class).
    3. Memiliki metode (fungsi di dalam class).
    4. Dapat digunakan kembali dan diwariskan (inheritance).
*/

echo "------------------------------------------- Contoh Penggunaan Object --------------------------------------" . "\n\n";

/*
1. Membuat Class dan Object
*/

echo "1. Membuat Class dan Object" . "\n\n";

class Car
{
    public $brand;
    public $color;

    public function startEngine()
    {
        return "Mesin dinyalakan.";
    }

    public function getInfo()
    {
        return "Mobil merek $this->brand dengan warna $this->color.";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota";
$myCar->color = "Black";

echo $myCar->startEngine() . "\n"; // Output: Mesin dinyalakan.
echo $myCar->getInfo() . "\n\n";   // Output: Mobil merek Toyota dengan warna Black.

/*
2. Class dengan Constructor
*/

echo "2. Class dengan Constructor\n\n";

class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet()
    {
        return "Halo, nama saya $this->name dan saya berusia $this->age tahun.";
    }
}

$personOne = new Person("John", 25);
echo $personOne->greet() . "\n"; // Output: Halo, nama saya John dan saya berusia 25 tahun.

$personTwo = new Person("Michael", 30);
echo $personTwo->greet() . "\n\n"; // Output: Halo, nama saya Michael dan saya berusia 30 tahun.

/*
3. Class dengan Properti Produk
*/

echo "3. Class dengan Properti Produk\n\n";

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getLabel()
    {
        return "$this->name seharga Rp $this->price";
    }
}

$product = new Product("Laptop", 15000000);
echo $product->getLabel() . "\n"; // Output: Laptop seharga Rp 15000000
