<?php
require_once "Dog.php";  // Memuat file Dog.php yang mendefinisikan namespace Animals\Mammals\Dog
require_once "Parrot.php"; // Memuat file Parrot.php yang mendefinisikan namespace Animals\Birds\Parrot

/*
Namespaces adalah fitur di PHP yang digunakan untuk mengorganisasi dan mengelola kode dalam sebuah ruang lingkup tertentu. Namespace membantu menghindari konflik nama class, fungsi, atau konstanta dalam proyek besar yang memiliki banyak file dan library.
*/

/*
Manfaat Namespace

    1. Menghindari Konflik Nama: Jika dua library memiliki class atau fungsi dengan nama yang sama, namespace mencegah benturan tersebut.
    2. Kode yang Lebih Terorganisir: Namespace memungkinkan pengelompokan logis untuk class, fungsi, dan konstanta.
    3. Kemudahan dalam Penggunaan Library Pihak Ketiga: Namespace membantu mengintegrasikan library pihak ketiga tanpa khawatir tentang nama class yang sama.
*/

/*
Cara Mendefinisikan Namespace
Namespace didefinisikan dengan kata kunci namespace, diikuti oleh nama namespace.
Namespace harus dideklarasikan di baris pertama file PHP.
*/

use Animals\Mammals\Dog;  // Menggunakan namespace Animals\Mammals untuk Dog
use Animals\Birds\Parrot; // Menggunakan namespace Animals\Birds untuk Parrot

// Membuat objek dari class Dog
$dog = new Dog(); // Mengakses class Dog dari namespace Animals\Mammals
echo "Dog says: " . $dog->sound() . "\n";
// Output: Dog says: Woof! Woof!

// Membuat objek dari class Parrot
$parrot = new Parrot(); // Mengakses class Parrot dari namespace Animals\Birds
echo "Parrot says: " . $parrot->sound() . "\n";
// Output: Parrot says: Squawk!

/*
Penjelasan Program:

1. require_once:

    - Memuat file Dog.php dan Parrot.php, yang masing-masing mendefinisikan class dengan namespace berbeda (Animals\Mammals dan Animals\Birds).

2. Namespace use Statements:

    - use Animals\Mammals\Dog: Menunjukkan bahwa class Dog berada dalam namespace Animals\Mammals.
    - use Animals\Birds\Parrot: Menunjukkan bahwa class Parrot berada dalam namespace Animals\Birds.

3. Membuat Objek:

    - Objek Dog dan Parrot dibuat menggunakan namespace mereka masing-masing.
    - Metode sound() dipanggil untuk menghasilkan suara hewan.

4. Keuntungan Namespace:

    - Menghindari konflik nama class, terutama jika ada dua class dengan nama yang sama di library berbeda.
    - Membantu pengelompokan dan struktur kode, sehingga lebih mudah dikelola dalam proyek besar.
    - Pemecahan Modul: Namespace memungkinkan pembagian kode ke dalam modul terpisah berdasarkan fitur atau jenis data.
    - Mendukung OOP Skala Besar: Namespace sangat bermanfaat dalam proyek besar yang melibatkan banyak developer atau library.
    - Kompatibilitas dengan PSR-4: Namespace digunakan dalam autoloading standar seperti PSR-4, yang mempermudah pengelolaan dependensi.

5. Output:

    - Dog says: Woof! Woof! berasal dari method sound() di class Dog.
    - Parrot says: Squawk! berasal dari method sound() di class Parrot.
*/



