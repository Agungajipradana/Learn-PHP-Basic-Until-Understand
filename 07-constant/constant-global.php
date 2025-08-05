<?php

/*
Constant are Global in PHP
Konstanta yang didefinisikan menggunakan define() atau const bersifat global dan dapat diakses dari mana saja dalam script,
baik di luar fungsi maupun di dalam fungsi atau class.
*/

echo "------------------------------ PHP Constant are Global ------------------------------\n\n";

/*
1. Akses konstanta dari global scope
   - Umum digunakan untuk nilai tetap seperti nama aplikasi atau versi.
*/

define("APP_NAME", "MyWebApp");
echo "1. Nama aplikasi: " . APP_NAME . "\n\n";
// Output: 1. Nama aplikasi: MyWebApp

/*
2. Mengakses konstanta dari dalam fungsi
   - Tidak perlu menggunakan global keyword.
*/

function getAppName()
{
    echo "2. Akses konstanta dalam fungsi: " . APP_NAME . "\n\n";
    // Output: 2. Akses konstanta dalam fungsi: MyWebApp
}
getAppName();

/*
3. Mengakses konstanta dari dalam class (tanpa instansiasi)
   - Tetap bisa diakses menggunakan global define().
*/

class Info
{
    public function printAppInfo()
    {
        echo "3. Konstanta global dari class: " . APP_NAME . "\n\n";
        // Output: 3. Konstanta global dari class: MyWebApp
    }
}

$info = new Info();
$info->printAppInfo();

/*
4. Gunakan konstanta global untuk menentukan environment
   - Berguna dalam manajemen konfigurasi seperti dev, staging, atau production.
*/

define("ENVIRONMENT", "production");

function showEnvironment()
{
    echo "4. Anda sedang di environment: " . strtoupper(ENVIRONMENT) . "\n\n";
    // Output: 4. Anda sedang di environment: PRODUCTION
}
showEnvironment();

/*
5. Konstanta digunakan dalam konfigurasi database
   - Praktis untuk membuat koneksi database yang konsisten di seluruh aplikasi.
*/

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "secret");

function connectDatabase()
{
    echo "5. Menghubungkan ke database di " . DB_HOST . " dengan user " . DB_USER . "\n\n";
    // Output: 5. Menghubungkan ke database di localhost dengan user root
}
connectDatabase();

/*
6. Konstanta global digunakan dalam file terpisah
   - Umum dalam pengembangan web: file config.php disertakan dalam banyak file.
   - (Contoh ilustratif, file tidak dipisah agar tetap dalam satu script)
*/

define("BASE_URL", "https://mywebapp.com");

function printUrl()
{
    echo "6. URL dasar aplikasi: " . BASE_URL . "/dashboard\n\n";
    // Output: 6. URL dasar aplikasi: https://mywebapp.com/dashboard
}
printUrl();
