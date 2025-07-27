<?php

/*
OOP Basics adalah dasar dari Object-Oriented Programming di PHP. Konsep ini mencakup elemen-elemen utama seperti Classes, Objects, Properties, dan Methods.
*/

echo "-------------------- Object-Oriented Programming Basic --------------------" . "\n\n";

/*
1. Class
    
Class adalah blueprint atau cetak biru untuk membuat objek. Sebuah class mendefinisikan struktur data (properties) dan fungsionalitas (methods) dari objek.
*/

echo "1. Class: mendefinisikan struktur data (properties) dan fungsionalitas (methods) dari objek." . "\n\n";

// Definisi class Car
class Car
{
    // Properti untuk menyimpan merek mobil
    public $brand;
    // Properti untuk menyimpan warna mobil
    public $color;

    // Konstruktor untuk menginisialisasi properti saat objek dibuat
    // Argumen default digunakan jika tidak ada nilai yang diberikan
    public function __construct($brand = "Unknown", $color = "Unknown")
    {
        $this->brand = $brand; // Menyimpan nilai merek ke properti $brand
        $this->color = $color; // Menyimpan nilai warna ke properti $color
    }

    // Method untuk memulai mesin
    public function startEngine()
    {
        return "Engine started!"; // Mengembalikan pesan bahwa mesin telah dinyalakan
    }
}

echo "\n\n";

/*
2. Object
    
Object adalah instansi dari sebuah class. Objek dibuat menggunakan keyword new.
*/

echo "2. Object: instansi dari sebuah class. Objek dibuat menggunakan keyword new." . "\n\n";

$car1 = new Car(); // Membuat objek dari class Car
$car1->brand = "Toyota"; // Mengatur nilai properti
$car1->color = "Red"; // Mengatur nilai properti

echo "Brand: " . $car1->brand . "\n"; // Output: Brand: Toyota
echo "Color: " . $car1->color . "\n"; // Output: Color: Red
echo $car1->startEngine(); // Output: Engine started!

echo "\n\n";

/*
3. Properties
    
Properties adalah variabel yang dideklarasikan dalam class. Properti menyimpan data/atribut dari objek.
*/

echo "3. Properties: variabel yang dideklarasikan dalam class. Properti menyimpan data/atribut dari objek." . "\n\n";

class Person
{
    public $name; // Properti
    public $age;  // Properti
}

echo "\n\n";

/*
4. Methods
    
Methods adalah fungsi yang didefinisikan dalam class untuk melakukan operasi tertentu atau berinteraksi dengan properti.
*/

echo "4. Methods: fungsi yang didefinisikan dalam class untuk melakukan operasi tertentu atau berinteraksi dengan properti." . "\n\n";

// Definisi class Calculator
class Calculator
{
    // Method untuk menambahkan dua angka
    public function add($a, $b)
    {
        return $a + $b; // Mengembalikan hasil penjumlahan $a dan $b
    }

    // Method untuk mengurangkan dua angka
    public function subtract($a, $b)
    {
        return $a - $b; // Mengembalikan hasil pengurangan $a dan $b
    }
}

// Membuat objek dari class Calculator
$calc = new Calculator();

// Memanggil method add pada objek $calc untuk menambahkan dua angka
echo "Sum: " . $calc->add(10, 5) . "\n";       // Output: Sum: 15

// Memanggil method subtract pada objek $calc untuk mengurangkan dua angka
echo "Difference: " . $calc->subtract(10, 5); // Output: Difference: 5

echo "\n\n";

echo "-------------------- Contoh Lengkap OOP Basics --------------------" . "\n\n";

class Animal
{
    // Properties
    public $name;  // Properti untuk menyimpan nama hewan
    public $sound; // Properti untuk menyimpan suara hewan

    // Constructor
    public function __construct($name, $sound)
    {
        // Menginisialisasi properti saat objek dibuat
        $this->name = $name;   // Mengatur nama hewan
        $this->sound = $sound; // Mengatur suara hewan
    }

    // Method
    public function makeSound()
    {
        // Mengembalikan string yang menggambarkan suara hewan
        return "{$this->name} says {$this->sound}";
    }
}

// Membuat objek
$dog = new Animal("Dog", "Woof"); // Membuat objek Dog dengan nama "Dog" dan suara "Woof"
$cat = new Animal("Cat", "Meow"); // Membuat objek Cat dengan nama "Cat" dan suara "Meow"

// Mengakses properti dan metode
echo $dog->makeSound(); // Output: Dog says Woof
echo "\n";
echo $cat->makeSound(); // Output: Cat says Meow

echo "\n\n";
