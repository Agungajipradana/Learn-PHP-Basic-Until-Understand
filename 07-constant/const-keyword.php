<?php

/*
PHP const Keyword
Keyword `const` digunakan untuk mendeklarasikan konstanta, mirip dengan define().
Biasanya digunakan dalam konteks global atau di dalam class.

Konstanta tidak bisa diubah setelah dideklarasikan.
*/

echo "------------------------------ PHP const Keyword ------------------------------\n\n";

/*
1. Konstanta global sederhana
   - Cocok untuk menyimpan nilai statis seperti versi aplikasi.
*/

const APP_VERSION = "1.2.0";
echo "1. Versi aplikasi: " . APP_VERSION . "\n"; // Output: 1. Versi aplikasi: 1.2.0
echo "\n";

/*
2. Konstanta global URL API
   - Digunakan untuk endpoint API tetap pada aplikasi front-end/backend.
*/

const API_URL = "https://api.mywebapp.com";
echo "2. API URL: " . API_URL . "\n"; // Output: 2. API URL: https://api.mywebapp.com
echo "\n";

/*
3. Konstanta array menggunakan const (PHP 5.6+)
   - Cocok untuk konfigurasi tetap, seperti bahasa atau zona waktu.
*/

const TIMEZONES = ["UTC", "Asia/Jakarta", "Europe/London"];
echo "3. Zona waktu yang tersedia:\n";
print_r(TIMEZONES); // Output: Array ( [0] => UTC [1] => Asia/Jakarta [2] => Europe/London )
echo "\n";

/*
4. Mengakses konstanta dari dalam fungsi
   - Menunjukkan bahwa `const` juga bersifat global.
*/

function showAPIInfo()
{
    echo "4. Mengakses API dari fungsi: " . API_URL . "\n"; // Output: 4. Mengakses API dari fungsi: https://api.mywebapp.com
}
showAPIInfo();
echo "\n";

/*
5. Konstanta di dalam class
   - Umum digunakan untuk menyimpan nilai tetap yang berkaitan dengan class, seperti peran user atau level akses.
*/

class UserRole
{
    const ADMIN = "Administrator";
    const EDITOR = "Editor";
    const SUBSCRIBER = "Subscriber";
}

echo "5. Role user ADMIN: " . UserRole::ADMIN . "\n"; // Output: 5. Role user ADMIN: Administrator
echo "\n";

/*
6. Mengakses konstanta class dalam metode
   - Konstanta bisa dipanggil dari method di dalam class yang sama.
*/

class Config
{
    const SITE_NAME = "TechWorld";

    public function printSiteName()
    {
        echo "6. Nama situs: " . self::SITE_NAME . "\n"; // Output: 6. Nama situs: TechWorld
    }
}

$config = new Config();
$config->printSiteName();
echo "\n";

/*
7. Menggunakan konstanta class dari luar class
   - Konstanta tetap dapat diakses tanpa membuat instance.
*/

echo "7. Nama situs (akses langsung): " . Config::SITE_NAME . "\n"; // Output: 7. Nama situs (akses langsung): TechWorld
echo "\n";
