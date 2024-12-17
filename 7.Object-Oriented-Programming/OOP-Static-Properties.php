<?php

/*
Dalam Object-Oriented Programming (OOP) di PHP, Static Properties adalah properti yang dimiliki oleh class (class) itu sendiri, bukan oleh instance (objek) dari class tersebut.

    - Properti statis dideklarasikan menggunakan kata kunci static.
    - Properti statis berbagi nilai yang sama di antara semua objek dari class tersebut.
    - Anda tidak perlu membuat instance dari class untuk mengakses static property. Static property bisa langsung diakses melalui nama class menggunakan NamaClass::$namaProperti.

Kelebihan Static Properties
    - Digunakan ketika nilai suatu properti ingin dibagi bersama oleh semua objek dari class.
    - Berguna untuk menghitung instance, menyimpan konfigurasi global, atau logika lainnya yang bersifat umum.
*/

echo "--------------------------------------- OOP Static Properties ---------------------------------------" . "\n\n";

class Counter
{
    // Static property untuk menyimpan nilai counter
    private static $count = 0; 
    // Properti statis $count dideklarasikan dengan nilai awal 0.
    // Properti ini hanya dapat diakses melalui class dan bukan melalui instance.

    // Static method untuk menambah nilai counter
    public static function increment()
    {
        self::$count++; 
        // Static property $count diakses menggunakan self::$count.
        // Nilainya akan ditambahkan 1 setiap kali metode ini dipanggil.
    }

    // Static method untuk mengambil nilai counter
    public static function getCount()
    {
        return self::$count; 
        // Static method ini mengembalikan nilai dari static property $count.
    }
}

// Mengakses static property dan method tanpa membuat objek dari class

// Memanggil static method increment untuk menambah nilai counter
Counter::increment(); // Counter = 1
// Static method increment() dipanggil untuk menambah nilai counter sebesar 1.

Counter::increment(); // Counter = 2
// Nilai counter bertambah menjadi 2 setelah dipanggil lagi.

Counter::increment(); // Counter = 3
// Nilai counter bertambah menjadi 3 setelah dipanggil lagi.

// Mengambil nilai counter saat ini
echo "Current Count: " . Counter::getCount() . "\n"; 
// Output: Current Count: 3
// Static method getCount() dipanggil untuk m

echo "\n\n";

/*
Catatan Tambahan

    - Static properties tidak dapat diakses melalui instance dari objek (misalnya $obj->property), kecuali properti tersebut bersifat public dan diakses melalui self atau static.
    - Static properties cocok digunakan untuk menyimpan data global, seperti konfigurasi, logika counter, atau caching.
*/

echo "------------------------- OOP Static Properties Menghitung Jumlah Objek yang Dibuat -------------------------" . "\n\n";

class InstanceCounter
{
    private static $instanceCount = 0; 
    // Static property untuk menyimpan jumlah instance yang dibuat.
    // Nilai awalnya diatur ke 0.

    public function __construct()
    {
        self::$instanceCount++; 
        // Setiap kali objek baru dibuat (constructor dipanggil),
        // nilai static property $instanceCount ditambahkan 1.
    }

    public static function getInstanceCount()
    {
        return self::$instanceCount; 
        // Static method ini mengembalikan nilai static property $instanceCount.
    }
}

// Membuat beberapa objek dari class InstanceCounter
$obj1 = new InstanceCounter(); 
// Objek pertama dibuat, $instanceCount bertambah menjadi 1.

$obj2 = new InstanceCounter(); 
// Objek kedua dibuat, $instanceCount bertambah menjadi 2.

$obj3 = new InstanceCounter(); 
// Objek ketiga dibuat, $instanceCount bertambah menjadi 3.

// Mengakses nilai static property melalui static method
echo "Total Instances: " . InstanceCounter::getInstanceCount() . "\n"; 
// Output: Total Instances: 3
// Static method getInstanceCount() dipanggil untuk mendapatkan nilai $instanceCount,
// dan hasilnya ditampilkan ke layar.

echo "\n\n";

/*
Penjelasan Tambahan

    - Static property $instanceCount digunakan untuk menghitung jumlah instance dari class InstanceCounter.
    - Properti statis akan di-increment setiap kali objek baru dibuat dalam __construct().
    - Metode statis getInstanceCount() digunakan untuk mengembalikan nilai dari $instanceCount.
*/