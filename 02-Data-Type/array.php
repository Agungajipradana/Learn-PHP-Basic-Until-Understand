<?php

/*
Array adalah tipe data dalam PHP yang digunakan untuk menyimpan beberapa nilai dalam satu variabel.
PHP mendukung tiga jenis array utama:

    1. Indexed Array     → Array dengan indeks numerik (angka).
    2. Associative Array → Array dengan indeks berupa string (key => value).
    3. Multidimensional Array → Array yang berisi array lain di dalamnya (array bersarang).
*/

echo "--------------------------------------------------- Tipe Data Array ---------------------------------------------------" . "\n\n";

/*
1. Indexed Array (Array Berindeks Angka):
    - Indeks dimulai dari 0.
    - Bisa dibuat menggunakan fungsi array() atau sintaks kurung siku [].
*/

echo "1. Indexed Array (Array Berindeks Angka)\n\n";

$fruits = array("Apple", "Orange", "Mango"); // array buah-buahan
$colors = ["Red", "Green", "Yellow"]; // array warna

echo "First fruit: " . $fruits[0] . "\n";  // Menampilkan buah pertama
echo "Second color: " . $colors[1] . "\n\n"; // Menampilkan warna kedua

/*
2. Associative Array (Array Asosiatif):
    - Menggunakan key berupa string untuk mengakses nilainya.
    - Cocok untuk data yang berpasangan seperti nama => nilai.
*/

echo "2. Associative Array (Array Asosiatif)\n\n";

$ages = [
    "John Doe" => 28,     // umur John Doe
    "Jane Smith" => 32,   // umur Jane Smith
    "Michael Lee" => 24   // umur Michael Lee
];

echo "Age of John Doe: " . $ages["John Doe"] . "\n";
echo "Age of Jane Smith: " . $ages["Jane Smith"] . "\n\n";

/*
3. Multidimensional Array (Array Multidimensi):
    - Array yang memiliki array sebagai elemen-elemennya.
    - Cocok untuk menyimpan data tabel atau struktur kompleks.
*/

echo "3. Multidimensional Array (Array Multidimensi)\n\n";

$students = [
    ["name" => "Alice Johnson", "age" => 21, "major" => "Computer Science"],     // mahasiswa pertama
    ["name" => "Robert Brown", "age" => 23, "major" => "Information Systems"]    // mahasiswa kedua
];

echo "First student name: " . $students[0]["name"] . "\n";      // Mengakses nama
echo "Second student major: " . $students[1]["major"] . "\n\n"; // Mengakses jurusan
