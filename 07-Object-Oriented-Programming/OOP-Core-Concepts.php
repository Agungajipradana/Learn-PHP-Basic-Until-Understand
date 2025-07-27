<?php

/*
Object-Oriented Programming (OOP) Core Concepts adalah fondasi dari pemrograman berorientasi objek yang membantu menciptakan kode yang modular, dapat digunakan kembali, dan mudah dikelola.
*/

echo "-------------------- Object-Oriented Programming Core Concepts --------------------" . "\n\n";

/*
1. Inheritance (Pewarisan)
    
    - Definisi: Pewarisan memungkinkan satu class untuk mewarisi properti dan metode dari class lain.
    - Tujuan: Menghindari duplikasi kode dan mempermudah perluasan fungsionalitas.
*/

echo "1. Inheritance (Pewarisan): Pewarisan memungkinkan satu class untuk mewarisi properti dan metode dari class lain." . "\n\n";

// Parent class
class Animal
{
    // Properti untuk menyimpan nama hewan
    public $name;

    // Konstruktor untuk menginisialisasi properti saat objek dibuat
    public function __construct($name)
    {
        // Mengatur properti $name dengan nilai yang diberikan saat objek dibuat
        $this->name = $name;
    }

    // Method dasar untuk menghasilkan suara hewan
    // Method ini dapat digunakan langsung oleh objek Animal atau di-override oleh Child class
    public function makeSound()
    {
        return "{$this->name} makes a sound.";
    }
}

// Child class: Dog
class Dog extends Animal
{
    // Override method makeSound untuk memberikan implementasi spesifik pada Dog
    // Method ini menggantikan implementasi default di parent class
    public function makeSound()
    {
        return "{$this->name} says Woof!";
    }
}

// Membuat objek dari kelas Dog dengan nama "Buddy"
// Konstruktor dari kelas parent (Animal) dipanggil untuk mengatur nama hewan
$dog = new Dog("Buddy");

// Memanggil method makeSound() pada objek Dog
// Karena Dog mengoverride method makeSound, hasilnya adalah versi spesifik dari Dog
echo $dog->makeSound(); // Output: Buddy says Woof!

echo "\n\n";

/*
2. Polymorphism (Polimorfisme)
    
    - Definisi: Polimorfisme memungkinkan objek dari class yang berbeda untuk diakses melalui referensi Parent class yang sama. Metode yang dipanggil bergantung pada class objek.
    - Tujuan: Memberikan fleksibilitas dalam menggunakan metode pada class yang berbeda.
*/

echo "2. Polymorphism (Polimorfisme): Polimorfisme memungkinkan objek dari class yang berbeda untuk diakses melalui referensi Parent class yang sama." . "\n\n";

// Parent class
class Vehicle
{
    // Properti untuk menyimpan nama kendaraan
    public $name;

    // Konstruktor untuk menginisialisasi properti $name
    public function __construct($name)
    {
        $this->name = $name;
    }

    // Method move untuk memberikan perilaku default (dapat di-override oleh child class)
    public function move()
    {
        return "{$this->name} moves in a generic way.";
    }
}

// Child class: Car
class Car extends Vehicle
{
    // Override method move untuk memberikan perilaku spesifik pada Car
    public function move()
    {
        return "{$this->name} drives on roads.";
    }
}

// Child class: Boat
class Boat extends Vehicle
{
    // Override method move untuk memberikan perilaku spesifik pada Boat
    public function move()
    {
        return "{$this->name} sails on water.";
    }
}

// Child class: Airplane
class Airplane extends Vehicle
{
    // Override method move untuk memberikan perilaku spesifik pada Airplane
    public function move()
    {
        return "{$this->name} flies in the sky.";
    }
}

// Membuat array kendaraan dengan berbagai tipe
$vehicles = [
    new Vehicle("Generic Vehicle"),
    new Car("Sedan"),
    new Boat("Yacht"),
    new Airplane("Jet")
];

// Demonstrasi Polimorfisme
// PHP akan memanggil method move() yang sesuai dengan tipe objek pada setiap iterasi
foreach ($vehicles as $vehicle) {
    echo $vehicle->move() . "\n";
}

/*
Output:
Generic Vehicle moves in a generic way. // Output dari parent class
Sedan drives on roads.                  // Output dari class Car
Yacht sails on water.                   // Output dari class Boat
Jet flies in the sky.                   // Output dari class Airplane
*/

echo "\n\n";

/*
3. Abstraction (Abstraksi)
    
    - Definisi: Abstraksi adalah proses mendefinisikan kerangka atau antarmuka untuk class tanpa memberikan implementasi detail.
    - Tujuan: Memaksa class turunan untuk mengimplementasikan metode tertentu.
*/

echo "3. Abstraction (Abstraksi): Abstraksi adalah proses mendefinisikan kerangka atau antarmuka untuk class tanpa memberikan implementasi detail." . "\n\n";

// Abstract class: Shape
// Kelas abstrak yang mendefinisikan struktur dasar untuk bentuk geometris.
// Abstract method `calculateArea()` harus diimplementasikan oleh semua subclass.
abstract class Shape
{
    abstract public function calculateArea();
}

// Subclass: Rectangle (Persegi Panjang)
// Mengimplementasikan kelas abstrak Shape.
class Rectangle extends Shape
{
    // Properti untuk menyimpan lebar dan tinggi persegi panjang.
    private $width;
    private $height;

    // Konstruktor untuk menginisialisasi lebar dan tinggi persegi panjang.
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi method `calculateArea` untuk menghitung luas persegi panjang.
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Subclass: Circle (Lingkaran)
// Mengimplementasikan kelas abstrak Shape.
class Circle extends Shape
{
    // Properti untuk menyimpan jari-jari lingkaran.
    private $radius;

    // Konstruktor untuk menginisialisasi jari-jari lingkaran.
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementasi method `calculateArea` untuk menghitung luas lingkaran.
    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

// Membuat array bentuk geometris (shapes) yang berisi objek dari Rectangle dan Circle.
$shapes = [new Rectangle(10, 5), new Circle(7)];

// Iterasi melalui array shapes untuk menghitung dan menampilkan luas dari setiap objek.
foreach ($shapes as $shape) {
    // PHP memanggil method `calculateArea` yang sesuai dengan kelas objek saat ini.
    echo "Area: " . $shape->calculateArea() . "\n";
}

/*
Output:
Area: 50                     // Luas persegi panjang (10 * 5)
Area: 153.9380400259         // Luas lingkaran (π * r² dengan r = 7)
*/

echo "\n\n";

/*
4. Encapsulation (Enkapsulasi)
    
    - Definisi: Enkapsulasi adalah konsep menyembunyikan detail implementasi dari sebuah class dan hanya memberikan akses melalui metode khusus (getter dan setter).
    - Tujuan: Melindungi data dan memastikan hanya akses yang diizinkan.
*/

echo "4. Encapsulation (Enkapsulasi): Polimorfisme memungkinkan objek dari class yang berbeda untuk diakses melalui referensi class induk yang sama." . "\n\n";

// Class: BankAccount
// Kelas ini merepresentasikan akun bank dengan fitur dasar seperti deposit, withdraw, dan melihat saldo.
class BankAccount
{
     // Properti private untuk menyimpan saldo akun.
    private $balance;

    // Konstruktor untuk menginisialisasi saldo awal saat objek dibuat.
    public function __construct($balance)
    {
        $this->balance = $balance;
    }

     // Method untuk menambah saldo ke akun (deposit).
    public function deposit($amount)
    {
        // Mengecek apakah jumlah yang akan dideposit valid (lebih dari 0).
        if ($amount > 0) {
            // Tambahkan jumlah deposit ke saldo saat ini.
            $this->balance += $amount;
            return "Deposited: $amount";
        }
        // Jika jumlah deposit tidak valid, kembalikan pesan kesalahan.
        return "Invalid deposit amount.";
    }

     // Method untuk menarik uang dari akun (withdraw).
    public function withdraw($amount)
    {
         // Mengecek apakah jumlah yang akan ditarik valid (lebih dari 0 dan tidak melebihi saldo).
        if ($amount > 0 && $amount <= $this->balance) {
            // Kurangi jumlah penarikan dari saldo saat ini.
            $this->balance -= $amount;
            return "Withdrawn: $amount";
        }
        // Jika jumlah penarikan tidak valid, kembalikan pesan kesalahan.
        return "Invalid withdrawal amount.";
    }

    // Method untuk mendapatkan saldo saat ini.
    public function getBalance()
    {
        return $this->balance;
    }
}

// Membuat objek akun bank dengan saldo awal 1000.
$account = new BankAccount(1000);

// Melakukan deposit sebesar 500 ke akun.
echo $account->deposit(500) . "\n";  // Output: Deposited: 500

// Melakukan penarikan sebesar 200 dari akun.
echo $account->withdraw(200) . "\n"; // Output: Withdrawn: 200

// Mendapatkan dan menampilkan saldo saat ini.
echo "Balance: " . $account->getBalance(); // Output: Balance: 1300

echo "\n\n";

/*
Kesimpulan:

    1. Inheritance memungkinkan class untuk berbagi properti dan metode.
    2. Polymorphism memberikan fleksibilitas pada class turunan untuk memiliki implementasi metode yang berbeda.
    3. Abstraction memberikan kerangka kerja untuk class tanpa memberikan detail implementasi.
    4. Encapsulation melindungi data dengan membatasi akses langsung ke properti.

Konsep-konsep ini membantu membuat aplikasi lebih modular, terstruktur, dan mudah dipelihara dalam pemrograman PHP.
*/