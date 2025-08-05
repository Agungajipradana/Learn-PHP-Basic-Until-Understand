<?php

/*
Perbedaan define() vs const di PHP
- Keduanya digunakan untuk mendefinisikan nilai tetap (konstanta).
- Cocok digunakan untuk pengaturan konfigurasi atau nilai tetap dalam aplikasi.
*/

echo "------------------------------ define() vs const ------------------------------\n\n";

/*
1. Membuat konstanta global menggunakan define()
   - Berlaku secara global, bisa diakses dari mana saja.
*/

define("APP_NAME", "MyWebApp");

echo "1. Nama Aplikasi: " . APP_NAME . "\n\n";
// Output: 1. Nama Aplikasi: MyWebApp

/*
2. Membuat konstanta dalam class menggunakan const
   - Berlaku hanya di dalam class dan bisa diakses dengan ClassName::CONSTANT.
*/

class Application
{
    const VERSION = "2.1.0";
}

echo "2. Versi Aplikasi: " . Application::VERSION . "\n\n";
// Output: 2. Versi Aplikasi: 2.1.0

/*
3. define() tidak dapat digunakan di dalam class, hanya const yang bisa.
*/

class Settings
{
    const SITE_URL = "https://example.com";
}

echo "3. Alamat Website: " . Settings::SITE_URL . "\n\n";
// Output: 3. Alamat Website: https://example.com

/*
4. const bisa digunakan dengan visibility (sejak PHP 7.1)
   - Dapat public, protected, atau private.
*/

class Database
{
    public const HOST = "localhost";
    protected const USER = "root";
    private const PASSWORD = "secret";

    public static function getHost()
    {
        return self::HOST;
    }
}

echo "4. Database Host: " . Database::getHost() . "\n\n";
// Output: 4. Database Host: localhost

/*
5. define() bisa digunakan untuk array (sejak PHP 7)
   - Berguna untuk pengaturan seperti konfigurasi fitur.
*/

define("CONFIG", [
    "debug" => true,
    "cache" => false
]);

echo "5. Apakah debug aktif? " . (CONFIG["debug"] ? "Yes" : "No") . "\n\n";
// Output: 5. Apakah debug aktif? Yes

/*
6. const tidak bisa digunakan di luar class, interface, atau trait.
   - Berikut contoh penggunaan const di dalam interface.
*/

interface HttpStatus
{
    const OK = 200;
    const NOT_FOUND = 404;
}

class ApiResponse implements HttpStatus
{
    public function getMessage($code)
    {
        return $code === self::OK ? "Success" : "Not Found";
    }
}

$response = new ApiResponse();
echo "6. HTTP Response Message: " . $response->getMessage(HttpStatus::OK) . "\n\n";
// Output: 6. HTTP Response Message: Success
