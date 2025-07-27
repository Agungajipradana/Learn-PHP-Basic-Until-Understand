<?php

/*
Iterables adalah tipe data di PHP yang mencakup semua jenis data yang bisa diiterasi (loop), seperti array dan objek yang mengimplementasikan interface Traversable. Dalam konteks OOP, iterables memungkinkan sebuah class atau fungsi untuk mengembalikan data yang dapat dilalui menggunakan struktur kontrol seperti foreach.

PHP mendukung iterables secara bawaan sejak versi 7.1. Tipe iterable sering digunakan untuk membuat fungsi yang fleksibel dan dapat bekerja dengan berbagai tipe data yang dapat diiterasi.
*/

/*
Ciri-Ciri Iterables

    1. Mencakup Array dan Traversable Objects:

        - Array biasa.
        - Objek yang mengimplementasikan interface Traversable, seperti Iterator atau IteratorAggregate.

    2. Dapat Diakses dengan Loop foreach:

        - Semua iterables dapat digunakan dalam loop.

    3. Tipe Iterable:

        - iterable adalah pseudo-tipe di PHP yang mendukung array dan objek traversable.
*/

echo "--------------------------------- 1. Iterables dengan Array dan Traversable Objects ---------------------------------" . "\n\n";

// Fungsi yang menerima iterable
function printIterable(iterable $items) 
{
    // Melakukan iterasi pada parameter $items, yang bisa berupa array atau objek iterator
    foreach ($items as $item) {
        echo $item . "\n"; // Menampilkan setiap item pada $items
    }
}

// Array sebagai iterable
$array = [10, 20, 30, 40]; // Array adalah iterable bawaan di PHP
echo "Array:\n";
printIterable($array); // Memanggil fungsi printIterable dengan array sebagai argumen
/*
Output: 

10
20
30
40
*/

echo "\n\n";

// Membuat class yang implementasikan Iterator
class CustomIterator implements Iterator 
{
    private $data; // Properti untuk menyimpan data yang akan diiterasi
    private $position = 0; // Properti untuk menyimpan posisi iterasi saat ini

    public function __construct(array $data) 
    {
        $this->data = $data; // Inisialisasi data dari parameter konstruktor
        $this->position = 0; // Inisialisasi posisi iterasi ke 0
    }

    // Mengembalikan elemen saat ini
    public function current(): mixed 
    {
        return $this->data[$this->position]; // Mengembalikan elemen berdasarkan posisi saat ini
    }

    // Mengembalikan kunci elemen saat ini
    public function key(): int 
    {
        return $this->position; // Mengembalikan posisi saat ini sebagai kunci
    }

    // Menggeser ke elemen berikutnya
    public function next(): void 
    {
        $this->position++; // Meningkatkan posisi iterasi
    }

    // Mengecek apakah posisi saat ini valid
    public function valid(): bool 
    {
        return isset($this->data[$this->position]); // Mengecek apakah elemen pada posisi saat ini valid
    }

    // Mengatur ulang iterator ke posisi awal
    public function rewind(): void 
    {
        $this->position = 0; // Mengatur ulang posisi iterasi ke awal
    }
}

// Membuat instance dari CustomIterator
$iterator = new CustomIterator(["Apple", "Banana", "Cherry"]); 
// Membuat objek iterator dengan data berupa array

echo "Custom Iterator:\n";
printIterable($iterator); // Memanggil fungsi printIterable dengan objek iterator sebagai argumen
/*
Output: 

Apple
Banana
Cherry
*/

echo "\n\n";

echo "--------------------------------- 2. Menggunakan Iterable sebagai Return Type ---------------------------------" . "\n\n";

// Fungsi yang mengembalikan iterable
function getIterable(): iterable {
    // Mengembalikan sebuah array sebagai iterable
    return [10, 20, 30]; 
}

// Memanggil fungsi getIterable dan menyimpan hasilnya ke dalam $items
$items = getIterable(); 

// Melakukan iterasi pada $items menggunakan perulangan foreach
foreach ($items as $item) {
    echo $item . "\n"; // Menampilkan setiap elemen dari iterable
}

/*
Output:

10
20
30
*/

echo "\n\n";

/*
Keuntungan Iterables dalam OOP

    1. Fleksibilitas:

        - Fungsi atau class dapat menangani berbagai tipe data yang bisa diiterasi.

    2. Struktur Modular:

        - Mempermudah pemisahan logika iterasi ke dalam class atau fungsi tersendiri.

    3. Efisiensi:

        - Memungkinkan pengolahan data secara satu per satu tanpa memuat semua data ke memori.
*/

/*
Kesimpulan

    - Iterables adalah tipe data yang mendukung iterasi seperti array dan objek yang mengimplementasikan interface Traversable.
    - Digunakan untuk membuat fungsi atau class yang dapat menangani data yang bersifat iterable.
    - Iterables meningkatkan fleksibilitas dan struktur kode dalam OOP PHP, terutama untuk proyek besar.
*/