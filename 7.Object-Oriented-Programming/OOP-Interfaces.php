<?php

/*
Interface dalam OOP PHP adalah sebuah kontrak yang mendefinisikan kumpulan metode yang harus diimplementasikan oleh class yang "menggunakan" interface tersebut. Interface hanya mendeklarasikan metode tanpa menyertakan logika atau implementasi.

Interface digunakan untuk mencapai polimorfisme dan membuat kode lebih fleksibel dengan mendukung multiple inheritance, karena sebuah class dapat mengimplementasikan lebih dari satu interface.
*/

/*
Karakteristik Interface di PHP

    1. Hanya berisi deklarasi metode:
        - Metode di dalam interface tidak memiliki implementasi.

    2. Tidak bisa memiliki properti:
        - Interface hanya mendukung deklarasi metode, tidak properti.

    3. Menggunakan keyword interface:
        - Untuk mendefinisikan sebuah interface.

    4. Implementasi menggunakan keyword implements
        - Sebuah class harus menggunakan keyword implements untuk mengimplementasikan interface.

    5. Semua metode harus diimplementasikan:
        - Jika sebuah class mengimplementasikan sebuah interface, maka class tersebut harus mendefinisikan semua metode dari interface.
*/

echo "--------------------------------- 1. Tanpa Interface ---------------------------------" . "\n\n";

// Class SimpleCircle mewakili bentuk lingkaran
class SimpleCircle
{
    private $radius; // Properti untuk menyimpan radius lingkaran

    public function __construct($radius)
    {
        // Constructor untuk menginisialisasi nilai radius
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        // Metode untuk menghitung luas lingkaran menggunakan rumus πr²
        return pi() * $this->radius * $this->radius;
    }
}

// Class SimpleRectangle mewakili bentuk persegi panjang
class SimpleRectangle
{
    private $width; // Properti untuk menyimpan lebar persegi panjang
    private $height; // Properti untuk menyimpan tinggi persegi panjang

    public function __construct($width, $height)
    {
        // Constructor untuk menginisialisasi nilai lebar dan tinggi
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        // Metode untuk menghitung luas persegi panjang menggunakan rumus panjang × lebar
        return $this->width * $this->height;
    }
}

// Array shapes berisi objek dari class SimpleCircle dan SimpleRectangle
$shapes = [
    new SimpleCircle(7), // Membuat objek lingkaran dengan radius 7
    new SimpleRectangle(10, 5) // Membuat objek persegi panjang dengan lebar 10 dan tinggi 5
];

foreach ($shapes as $shape) {
    // Mengecek apakah metode calculateArea() ada pada objek
    if (method_exists($shape, 'calculateArea')) {
        // Memanggil metode calculateArea() jika ada, dan mencetak hasilnya
        echo "Area: " . $shape->calculateArea() . "\n";
    }
}

echo "\n\n";

echo "--------------------------------- 2. Menggunakan Interface---------------------------------" . "\n\n";

/*
Dengan interface, kita mendefinisikan kontrak metode calculateArea() agar semua class bentuk geometris konsisten.
*/

// Mendefinisikan interface
interface GeometricShape {
    public function calculateArea(); // Mendefinisikan kontrak untuk metode calculateArea
    public function describe(); // Mendefinisikan kontrak untuk metode describe
}

// Implementasi interface oleh class Circle
class Circle implements GeometricShape {
    private $radius; // Properti untuk menyimpan radius lingkaran

    public function __construct($radius) {
        // Constructor untuk menginisialisasi nilai radius
        $this->radius = $radius;
    }

    public function calculateArea() {
        // Implementasi metode calculateArea untuk menghitung luas lingkaran (πr²)
        return pi() * $this->radius * $this->radius;
    }

    public function describe() {
        // Implementasi metode describe untuk memberikan deskripsi lingkaran
        return "A Circle with radius {$this->radius}";
    }
}

// Implementasi interface oleh class Rectangle
class Rectangle implements GeometricShape {
    private $width; // Properti untuk menyimpan lebar persegi panjang
    private $height; // Properti untuk menyimpan tinggi persegi panjang

    public function __construct($width, $height) {
        // Constructor untuk menginisialisasi nilai lebar dan tinggi
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        // Implementasi metode calculateArea untuk menghitung luas persegi panjang (lebar × tinggi)
        return $this->width * $this->height;
    }

    public function describe() {
        // Implementasi metode describe untuk memberikan deskripsi persegi panjang
        return "A Rectangle with width {$this->width} and height {$this->height}";
    }
}

// Polimorfisme dengan Interface
$shapes = [
    new Circle(7), // Membuat objek Circle dengan radius 7
    new Rectangle(10, 5) // Membuat objek Rectangle dengan lebar 10 dan tinggi 5
];

foreach ($shapes as $shape) {
    echo $shape->describe() . "\n"; // Memanggil metode describe untuk setiap objek
    echo "Area: " . $shape->calculateArea() . "\n"; // Memanggil metode calculateArea untuk setiap objek
}

echo "\n\n";

/*
Keuntungan Menggunakan Interface

    1. Polimorfisme:
        - Memungkinkan penggunaan satu tipe untuk berbagai class yang berbeda.

    2. Konsistensi:
        - Semua class yang mengimplementasikan interface akan memiliki metode yang sama.

    3. Fleksibilitas:
        - Sebuah class dapat mengimplementasikan lebih dari satu interface.
*/

echo "--------------------------------- Contoh dengan Multiple Interfaces---------------------------------" . "\n\n";

// Interface pertama
interface Flyable {
    public function fly(); // Mendefinisikan kontrak metode fly untuk objek yang bisa terbang
}

// Interface kedua
interface Driveable {
    public function drive(); // Mendefinisikan kontrak metode drive untuk objek yang bisa dikendarai
}

// Class implementasi yang menggunakan kedua interface
class FlyingCar implements Flyable, Driveable {
    public function fly() {
        // Implementasi metode fly untuk membuat mobil bisa terbang
        return "The car is flying.";
    }

    public function drive() {
        // Implementasi metode drive untuk membuat mobil bisa dikendarai
        return "The car is driving.";
    }
}

$flyingCar = new FlyingCar(); // Membuat instance dari class FlyingCar
echo $flyingCar->fly() . "\n"; // Memanggil metode fly, output: The car is flying.
echo $flyingCar->drive() . "\n"; // Memanggil metode drive, output: The car is driving.

echo "\n\n";

/*
Dalam PHP, baik interface maupun abstract class digunakan untuk mendefinisikan kerangka kerja atau kontrak bagi class turunan. Meskipun serupa, ada perbedaan penting antara keduanya. Berikut penjelasan dan contoh lengkap:
*/

/*
Perbedaan Utama

    1. Interface:

        - Hanya dapat mendeklarasikan metode tanpa implementasi.
        - Tidak bisa memiliki properti (mulai PHP 8, properti diizinkan di traits, tetapi tidak di interface).
        - Class yang mengimplementasikan interface harus mengimplementasikan semua metode yang ada di dalamnya.
        - Mendukung pewarisan berganda (multiple inheritance), artinya sebuah class dapat mengimplementasikan lebih dari satu interface.
        - Digunakan ketika ingin mendefinisikan kontrak atau perilaku yang harus diikuti oleh class.

    2. Abstract Class:

        - Dapat memiliki metode dengan atau tanpa implementasi.
        - Dapat memiliki properti dengan nilai awal.
        - Class turunan dapat memilih untuk mengimplementasikan metode abstrak, sementara metode konkret dapat langsung digunakan.
        - Mendukung pewarisan tunggal (single inheritance), artinya sebuah class hanya dapat mewarisi satu abstract class.
        - Digunakan ketika ingin membuat kerangka kerja dasar dengan beberapa logika bawaan.
*/

/*
Kapan Menggunakan Interface vs Abstract Class

    - Gunakan Interface: Jika Anda hanya perlu mendefinisikan kontrak atau aturan yang harus diikuti oleh class tanpa memerlukan implementasi bawaan.

    - Gunakan Abstract Class: Jika Anda ingin menyediakan sebagian implementasi bawaan, atau ada logika dasar yang dapat diwarisi oleh class turunan.
*/

echo "--------------------------------- Berikut adalah contoh penerapan interface dan abstract class:---------------------------------" . "\n\n";

echo "--------------------------------- Interface ---------------------------------" . "\n\n";

// Mendefinisikan Interface untuk menyimpan data
interface Storage {
    // Mendeklarasikan metode 'save' yang harus diimplementasikan oleh setiap class yang mengimplementasikan interface ini
    public function save($data);
}

// Class Database yang mengimplementasikan interface Storage
class DatabaseStorage implements Storage {
    // Implementasi metode 'save' untuk menyimpan data ke database
    public function save($data) {
        // Simulasi menyimpan data ke database
        echo "Data saved to database: " . $data . "\n";
    }
}

// Class File yang mengimplementasikan interface Storage
class FileStorage implements Storage {
    // Implementasi metode 'save' untuk menyimpan data ke file
    public function save($data) {
        // Simulasi menyimpan data ke file
        echo "Data saved to file: " . $data . "\n";
    }
}

// Class Cloud yang mengimplementasikan interface Storage
class CloudStorage implements Storage {
    // Implementasi metode 'save' untuk menyimpan data ke cloud
    public function save($data) {
        // Simulasi menyimpan data ke cloud
        echo "Data saved to cloud: " . $data . "\n";
    }
}

// Penggunaan
$database = new DatabaseStorage(); // Membuat objek untuk penyimpanan data ke database
$file = new FileStorage();         // Membuat objek untuk penyimpanan data ke file
$cloud = new CloudStorage();       // Membuat objek untuk penyimpanan data ke cloud

// Menyimpan data dengan menggunakan masing-masing objek
$database->save("User Data 1");  // Menyimpan data ke database
$file->save("User Data 2");      // Menyimpan data ke file
$cloud->save("User Data 3");     // Menyimpan data ke cloud

echo "\n\n";

echo "--------------------------------- Abstract Class ---------------------------------" . "\n\n";

// Mendefinisikan Abstract Class
abstract class Vehicle {
    protected $brand;

    // Konstruktor untuk menginisialisasi properti brand
    public function __construct($brand) {
        $this->brand = $brand;
    }

    // Metode abstrak: harus diimplementasikan di class turunan
    abstract public function move();

    // Metode konkret: dapat langsung digunakan oleh class turunan
    public function getBrand() {
        return $this->brand;  // Mengembalikan nilai brand kendaraan
    }
}

// Class turunan yang mewarisi Vehicle
class Car extends Vehicle {
    // Implementasi metode move() untuk mobil
    public function move() {
        return "{$this->brand} is driving on the road.";  // Mengembalikan pesan pergerakan mobil
    }
}

class Airplane extends Vehicle {
    // Implementasi metode move() untuk pesawat
    public function move() {
        return "{$this->brand} is flying in the sky.";  // Mengembalikan pesan pergerakan pesawat
    }
}

// Penggunaan
$car = new Car("Toyota");  // Membuat objek mobil dengan merek Toyota
echo $car->move() . "\n";   // Output: Toyota is driving on the road.
echo $car->getBrand() . "\n"; // Output: Toyota

$airplane = new Airplane("Boeing");  // Membuat objek pesawat dengan merek Boeing
echo $airplane->move() . "\n";  // Output: Boeing is flying in the sky.
echo $airplane->getBrand() . "\n"; // Output: Boeing

/*
Kesimpulan

    - Interface adalah alat untuk mendefinisikan kontrak yang harus diikuti oleh class tanpa menyediakan logika bawaan.
    - Abstract Class memungkinkan Anda menyediakan logika bawaan bersama dengan kontrak yang harus diikuti oleh class turunan.
*/