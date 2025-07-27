<?php

/*
Abstract Classes adalah class dalam OOP PHP yang tidak dapat diinstansiasi secara langsung, tetapi berfungsi sebagai blueprint atau kerangka dasar untuk class-class turunan. Class abstrak dapat memiliki properti dan metode konkret (dengan implementasi) serta metode abstrak (tanpa implementasi).

Metode abstrak harus diimplementasikan dalam semua class turunan. Class abstrak biasanya digunakan ketika Anda ingin memastikan bahwa setiap class turunan memiliki struktur atau perilaku tertentu.
*/

/*
Ciri-Ciri Abstract Classes

    1. Tidak dapat diinstansiasi secara langsung.
    Anda harus membuat class turunan untuk menggunakan fitur class abstrak.

    2. Mengandung metode abstrak atau konkret.

        - Metode abstrak dideklarasikan tanpa implementasi (hanya nama metode dan tanda kurung).
        - Metode konkret memiliki implementasi di dalam class abstrak.

    3. Keyword abstract digunakan untuk mendeklarasikan class dan metode abstrak.
    4. Dapat memiliki properti, konstruktor, dan constant.
    5. Class turunan wajib mengimplementasikan semua metode abstrak dari class abstrak.
*/

echo "--------------------------------- OOP Abstract Classes ---------------------------------" . "\n\n";

echo "--------------------------------- 1. Contoh Dasar Abstract Class ---------------------------------" . "\n\n";

/*
1. Contoh Dasar Abstract Class
*/

// Abstract class
abstract class Shape
{
    // Abstract method (tanpa implementasi)
    abstract public function calculateArea();

    // Concrete method (dengan implementasi)
    public function describe()
    {
        return "This is a shape.";
    }
}

// Class turunan: Rectangle
class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementasi metode abstrak
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Class turunan: Circle
class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    // Implementasi metode abstrak
    public function calculateArea()
    {
        return pi() * $this->radius * $this->radius;
    }
}

// Membuat objek dari class turunan
$shapes = [
    new Rectangle(10, 5),
    new Circle(7)
];

// Menggunakan metode dari class abstrak dan turunan
foreach ($shapes as $shape) {
    echo $shape->describe() . "\n"; // Output: This is a shape.
    echo "Area: " . $shape->calculateArea() . "\n";
}

/*
Output:
This is a shape.
Area: 50
This is a shape.
Area: 153.9380400259
*/

echo "\n\n";

echo "--------------------------------- 2. Abstract Class dengan Properti dan Konstruktor ---------------------------------" . "\n\n";

/*
2. Abstract Class dengan Properti dan Konstruktor
*/

// Abstract class
abstract class Employee
{
    protected $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Abstract method
    abstract public function calculateBonus();

    // Concrete method
    public function getDetails()
    {
        return "Employee: {$this->name}, Salary: {$this->salary}";
    }
}

// Full-time employee class
class FullTimeEmployee extends Employee
{
    public function calculateBonus()
    {
        return $this->salary * 0.1; // Bonus 10%
    }
}

// Part-time employee class
class PartTimeEmployee extends Employee
{
    public function calculateBonus()
    {
        return $this->salary * 0.05; // Bonus 5%
    }
}

// Membuat objek dari class turunan
$fullTime = new FullTimeEmployee("Alice", 5000);
$partTime = new PartTimeEmployee("Bob", 2000);

echo $fullTime->getDetails() . ", Bonus: " . $fullTime->calculateBonus() . "\n";
// Output: Employee: Alice, Salary: 5000, Bonus: 500

echo $partTime->getDetails() . ", Bonus: " . $partTime->calculateBonus() . "\n";
// Output: Employee: Bob, Salary: 2000, Bonus: 100

echo "\n\n";

/*
Penjelasan

    1. Abstract Class sebagai Blueprint:

        - Shape adalah blueprint untuk semua bentuk geometri.
        - Metode calculateArea wajib diimplementasikan dalam class turunan seperti Rectangle dan Circle.

    2. Concrete Methods dalam Abstract Class:

        - Metode seperti describe dalam Shape memberikan implementasi yang dapat digunakan oleh semua class turunan.

    3. Keuntungan Konstruktor dalam Abstract Class:
    Konstruktor dalam class abstrak memungkinkan inisialisasi properti yang dibagikan ke semua class turunan.

    4. Penggunaan Abstract Method:

        - Metode abstrak memastikan setiap class turunan memiliki implementasi spesifik, seperti calculateArea dalam Rectangle dan Circle.
*/

/*
Kapan Menggunakan Abstract Classes?

    1. Ketika Anda ingin membuat kerangka dasar dengan metode wajib untuk diimplementasikan oleh semua subclass.
    2. Ketika Anda ingin memaksa class turunan untuk mengikuti kontrak tertentu (struktur yang sama).
    3. Ketika Anda ingin mendefinisikan metode umum sekaligus memberikan fleksibilitas untuk implementasi spesifik pada subclass.
*/

/*
Kesimpulan

Abstract Classes memberikan kerangka kerja untuk class turunan dengan memungkinkan kombinasi metode abstrak dan konkret. Ini memberikan struktur yang konsisten dan fleksibilitas dalam pengembangan aplikasi. Konsep ini sangat membantu dalam hierarki class yang kompleks di mana beberapa metode harus diimplementasikan secara konsisten di semua class turunan.
*/