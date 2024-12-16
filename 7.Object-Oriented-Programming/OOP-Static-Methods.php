<?php

/*
Dalam Pemrograman Berorientasi Objek (OOP), static methods adalah metode yang dapat diakses tanpa perlu membuat objek dari class tersebut. Metode ini milik class itu sendiri, bukan milik instance tertentu dari class.

Metode statis sering digunakan untuk operasi yang tidak bergantung pada data instance, seperti fungsi utilitas atau metode global dalam konteks class.
*/

/*
Ciri-ciri Static Methods:

    1. Dideklarasikan menggunakan kata kunci static.
    2. Diakses langsung melalui nama class dengan operator resolusi :: (contoh: ClassName::methodName()).
    3. Tidak dapat menggunakan properti atau metode non-statis di dalamnya, kecuali melalui instansiasi objek.
    4. Dapat digunakan tanpa membuat instance objek dari class.
*/

echo "--------------------------------- OOP Static Methods ---------------------------------" . "\n\n";

class MathOperations
{
    // Metode statis untuk menambahkan dua angka
    public static function add($a, $b)
    {
        // Mengembalikan hasil penjumlahan dari $a dan $b
        return $a + $b;
    }

    // Metode statis untuk mengalikan dua angka
    public static function multiply($a, $b)
    {
        // Mengembalikan hasil perkalian dari $a dan $b
        return $a * $b;
    }

    // Metode non-statis untuk menampilkan pesan
    public function displayMessage()
    {
        // Menampilkan pesan statis melalui output
        echo "This is a non-static method.\n";
    }
}

// Memanggil metode statis langsung tanpa membuat objek
echo "Addition: " . MathOperations::add(5, 10) . "\n"; // Memanggil metode add() secara langsung
// Output: Addition: 15

echo "Multiplication: " . MathOperations::multiply(4, 6) . "\n"; // Memanggil metode multiply() secara langsung
// Output: Multiplication: 24

// Membuat objek untuk mengakses metode non-statis
$math = new MathOperations(); // Membuat instance dari class MathOperations

// Memanggil metode non-statis displayMessage() melalui objek
$math->displayMessage();
// Output: This is a non-static method.

echo "\n\n";

/*
Penjelasan dan Komentar

    1. Deklarasi Static Method:

        - add($a, $b) dan multiply($a, $b) adalah metode statis. Mereka hanya menggunakan parameter dan tidak bergantung pada properti atau instance dari class.

    2. Pemanggilan Static Method:

    - Metode statis dipanggil menggunakan nama class dan operator :: (contoh: MathOperations::add(5, 10)).
    - Tidak perlu membuat instance objek.

    3. Non-Static Method:

    - Metode seperti displayMessage() adalah metode biasa (non-statis). Harus dipanggil melalui instance objek ($math->displayMessage()).

    4. Kombinasi Static dan Non-Static:

    - Class dapat memiliki kombinasi metode statis dan non-statis. Gunakan metode statis untuk operasi yang tidak bergantung pada data objek.
*/

/*
Manfaat Static Methods

    1. Efisiensi:

        - Tidak perlu membuat objek jika metode tidak memerlukan properti instance.
        - Berguna untuk fungsi utilitas seperti matematika, validasi, atau manipulasi string.

    2. Organisasi:

        - Mengelompokkan metode yang relevan dalam satu class, seperti fungsi matematis di class MathOperations.

    3. Reusabilitas:

        - Static methods dapat dipanggil dari mana saja tanpa perlu membuat instance baru.
*/

echo "--------------------------------- Static Property dengan Static Methods ---------------------------------" . "\n\n";

class Counter
{
    private static $count = 0; // Static property untuk menyimpan nilai counter yang bersifat global di class ini

    // Metode statis untuk menambah nilai counter
    public static function increment()
    {
        // Mengakses static property $count menggunakan self:: dan menambah nilainya sebesar 1
        self::$count++;
    }

    // Metode statis untuk mendapatkan nilai counter
    public static function getCount()
    {
        // Mengembalikan nilai static property $count
        return self::$count;
    }
}

// Menggunakan metode statis untuk mengelola static property

// Memanggil metode increment() untuk menambah nilai counter
Counter::increment(); // Menambah counter dari 0 ke 1
Counter::increment(); // Menambah counter dari 1 ke 2

// Memanggil metode getCount() untuk mendapatkan nilai counter saat ini
echo "Current Count: " . Counter::getCount() . "\n"; 
// Output: Current Count: 2

echo "\n\n";

/*
Penjelasan Contoh Lanjutan

    1. Static Property:

        - private static $count adalah properti statis yang menyimpan nilai global di class.

    2. Self-Keyword:

        - Di dalam metode statis, properti statis diakses menggunakan kata kunci self (contoh: self::$count).

    3. Konteks Global:

        - Nilai $count disimpan pada tingkat class dan akan tetap ada selama class ada.
*/