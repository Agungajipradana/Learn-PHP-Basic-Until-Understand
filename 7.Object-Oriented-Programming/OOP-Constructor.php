<?php

/*
Constructor adalah metode khusus dalam sebuah kelas yang secara otomatis dipanggil ketika sebuah objek dari kelas tersebut dibuat. Biasanya, constructor digunakan untuk menginisialisasi properti objek atau melakukan tugas tertentu saat objek dibuat.

Ciri-Ciri Constructor di PHP:

1. Nama metode constructor adalah __construct.
2. Dipanggil secara otomatis saat menggunakan keyword new untuk membuat objek.
3. Dapat menerima parameter untuk mengatur nilai awal properti.
4. Setiap kelas hanya memiliki satu constructor.

Kegunaan Constructor

    - Menginisialisasi properti objek dengan nilai awal.
    - Mengurangi kebutuhan untuk memanggil metode lain setelah objek dibuat.
    - Meningkatkan efisiensi dan fleksibilitas pembuatan objek.
*/

echo "-------------------- Object-Oriented Programming Constructor --------------------" . "\n\n";

echo "-------------------- Constructor dengan Parameter --------------------" . "\n\n";

class Person
{
    public $name;
    public $age;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // Method untuk menampilkan informasi tentang objek
    public function introduce()
    {
        return "Hi, my name is {$this->name} and I am {$this->age} years old.";
    }
}

// Membuat objek dari kelas Person dengan parameter untuk constructor
$person1 = new Person("Alice", 25);
$person2 = new Person("Bob", 30);

// Memanggil method introduce untuk setiap objek
echo $person1->introduce(); // Output: Hi, my name is Alice and I am 25 years old.
echo "\n";
echo $person2->introduce(); // Output: Hi, my name is Bob and I am 30 years old.

echo "\n\n";

/*
Penjelasan Contoh
    1. Constructor dengan Parameter:

        -  Constructor __construct($name, $age) menerima dua parameter ($name dan $age) yang digunakan untuk menginisialisasi properti $name dan $age milik kelas Person.

    2. Otomatis Dipanggil:

        - Ketika new Person("Alice", 25) dipanggil, constructor secara otomatis menyalin nilai "Alice" ke $name dan 25 ke $age.

    3. Metode Tambahan:

        - Metode introduce() digunakan untuk mengakses properti objek dan menghasilkan output yang rapi.
*/

echo "-------------------- Constructor Default Tanpa Parameter --------------------" . "\n\n";

/*
Jika tidak ada parameter, constructor tetap dapat digunakan untuk mengatur nilai default.
*/

class Car
{
    public $brand;
    public $color;

    public function __construct()
    {
        $this->brand = "Unknown Brand";
        $this->color = "White";
    }
}

$car = new Car();
echo "Brand: " . $car->brand . "\n"; // Output: Brand: Unknown Brand
echo "Color: " . $car->color;       // Output: Color: White

echo "\n\n";

echo "-------------------- Constructor dengan Nilai Default pada Parameter --------------------" . "\n\n";

class Laptop
{
    public $brand;
    public $ram;

    public function __construct($brand = "Unknown", $ram = 4)
    {
        $this->brand = $brand;
        $this->ram = $ram;
    }

    public function getSpecs()
    {
        return "Brand: {$this->brand}, RAM: {$this->ram}GB";
    }
}

$laptop1 = new Laptop("Dell", 16);
$laptop2 = new Laptop(); // Menggunakan nilai default

echo $laptop1->getSpecs(); // Output: Brand: Dell, RAM: 16GB
echo "\n";
echo $laptop2->getSpecs(); // Output: Brand: Unknown, RAM: 4GB

echo "\n\n";

echo "-------------------- Constructor di Kelas Turunan --------------------" . "\n\n";

/*
Constructor pada kelas induk dapat dipanggil menggunakan parent::__construct.
*/

class Animals
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Dogs extends Animals
{
    public $breed;

    public function __construct($name, $breed)
    {
        parent::__construct($name); // Memanggil constructor kelas induk
        $this->breed = $breed;
    }

    public function getInfo()
    {
        return "{$this->name} is a {$this->breed}.";
    }
}

$dog = new Dogs("Buddy", "Golden Retriever");
echo $dog->getInfo(); // Output: Buddy is a Golden Retriever.

echo "\n\n";

/*
Kesimpulan

    - Constructor digunakan untuk menginisialisasi nilai properti atau melakukan setup awal.
    - Sangat berguna untuk memastikan objek selalu memiliki nilai awal yang valid.
    - Mendukung parameter dengan nilai default, sehingga memberikan fleksibilitas saat membuat objek.
*/

echo "-------------------- Apa yang Terjadi Jika Tidak Menggunakan Constructor? --------------------" . "\n\n";

/*
Tanpa constructor, kita harus secara manual mengatur nilai properti setelah objek dibuat. Hal ini dapat membuat kode menjadi lebih panjang, kurang efisien, dan rawan kesalahan jika pengaturan nilai properti terlupakan.
*/

echo "-------------------- Contoh Tanpa Constructor --------------------" . "\n\n";

class Book
{
    public $title;
    public $author;
}

$book1 = new Book();
$book1->title = "1984";         // Properti diatur secara manual
$book1->author = "George Orwell"; // Properti diatur secara manual

$book2 = new Book();
$book2->title = "To Kill a Mockingbird";     // Properti diatur secara manual
$book2->author = "Harper Lee";               // Properti diatur secara manual

echo "Book 1: {$book1->title} by {$book1->author}\n"; // Output: Book 1: 1984 by George Orwell
echo "Book 2: {$book2->title} by {$book2->author}\n"; // Output: Book 2: To Kill a Mockingbird by Harper Lee

echo "\n\n";

/*
Masalah Tanpa Constructor

    1. Pengaturan Manual:

        - Setiap properti harus diatur secara manual untuk setiap objek.

    2. Kode Berulang:

        - Ada pengulangan kode untuk menetapkan nilai setiap properti.

    3. Rentan Kesalahan:

        - Jika lupa mengatur nilai properti, objek akan memiliki properti yang tidak lengkap (null).
*/

echo "-------------------- Menggunakan Constructor untuk Mengatasi Masalah --------------------" . "\n\n";

/*
Dengan constructor, pengaturan properti dapat dilakukan secara otomatis saat objek dibuat. Berikut adalah versi yang lebih baik dari contoh sebelumnya:
*/

class Books
{
    public $title;
    public $author;

    // Constructor untuk mengatur nilai properti secara otomatis
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }
}

$book1 = new Books("1984", "George Orwell");         // Properti langsung diatur
$book2 = new Books("To Kill a Mockingbird", "Harper Lee"); // Properti langsung diatur

echo "Book 1: {$book1->title} by {$book1->author}\n"; // Output: Book 1: 1984 by George Orwell
echo "Book 2: {$book2->title} by {$book2->author}\n"; // Output: Book 2: To Kill a Mockingbird by Harper Lee

echo "\n\n";

echo "-------------------- Perbedaan Tanpa dan Dengan Constructor --------------------" . "\n\n";

// Fungsi untuk mencetak garis horizontal
function printLine($lengths)
{
    foreach ($lengths as $length) {
        echo "+" . str_repeat("-", $length);
    }
    echo "+\n";
}

// Fungsi untuk mencetak baris data
function printRow($data, $lengths)
{
    foreach ($data as $index => $cell) {
        echo "|" . str_pad($cell, $lengths[$index]);
    }
    echo "|\n";
}

// Data untuk tabel
$headers = ["Tanpa Constructor", "Dengan Constructor"];
$rows = [
    ["Properti diatur secara manual setelah objek dibuat.", "Properti diatur otomatis saat objek dibuat."],
    ["Rawan lupa mengatur nilai properti.", "Properti selalu memiliki nilai awal."],
    ["Kode lebih panjang dan repetitif.", "Kode lebih efisien dan ringkas."],
];

// Menghitung panjang maksimum untuk setiap kolom
$columnLengths = [];
foreach ($headers as $index => $header) {
    $maxLength = strlen($header);
    foreach ($rows as $row) {
        $maxLength = max($maxLength, strlen((string)$row[$index]));
    }
    $columnLengths[$index] = $maxLength + 2; // Menambahkan padding
}

// Cetak tabel
printLine($columnLengths);
printRow($headers, $columnLengths);
printLine($columnLengths);
foreach ($rows as $row) {
    printRow($row, $columnLengths);
}
printLine($columnLengths);

echo "\n\n";

/*
Kesimpulan
Jika tidak menggunakan constructor:

Anda perlu mengatur properti secara manual, yang bisa memakan waktu dan rentan terhadap kesalahan.
Constructor memastikan bahwa setiap objek memiliki properti yang telah diatur sejak awal, membuat kode lebih rapi dan efisien.
*/