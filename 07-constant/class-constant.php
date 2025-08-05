<?php

/*
Konstanta di Dalam Class (Class Constant)
Konstanta dalam class didefinisikan menggunakan keyword `const`.
Bersifat statis dan dapat diakses tanpa membuat instance dari class.
Cocok untuk menyimpan nilai tetap seperti nama tabel, status, atau konfigurasi umum.
*/

echo "------------------------------ PHP Class Constant ------------------------------\n\n";

/*
1. Konstanta sederhana dalam class
   - Digunakan untuk menyimpan nilai tetap.
*/

class App
{
    const NAME = "MyWebApp";
}

echo "1. Nama aplikasi: " . App::NAME . "\n\n";
// Output: 1. Nama aplikasi: MyWebApp

/*
2. Akses konstanta dalam method static
   - Cocok untuk fungsi utilitas tanpa perlu instansiasi.
*/

class Version
{
    const APP_VERSION = "1.0.5";

    public static function getVersion()
    {
        return self::APP_VERSION;
    }
}

echo "2. Versi aplikasi: " . Version::getVersion() . "\n\n";
// Output: 2. Versi aplikasi: 1.0.5

/*
3. Akses konstanta dalam method non-static
   - Gunakan self:: untuk merujuk ke konstanta class.
*/

class Author
{
    const NAME = "Jane Doe";

    public function getAuthor()
    {
        return self::NAME;
    }
}

$author = new Author();
echo "3. Nama penulis: " . $author->getAuthor() . "\n\n";
// Output: 3. Nama penulis: Jane Doe

/*
4. Menggunakan konstanta dalam inheritance (pewarisan)
   - Subclass dapat mewarisi konstanta dari superclass.
*/

class BaseController
{
    const TABLE = "users";
}

class UserController extends BaseController
{
    public function getTableName()
    {
        return self::TABLE;
    }
}

$userController = new UserController();
echo "4. Nama tabel default: " . $userController->getTableName() . "\n\n";
// Output: 4. Nama tabel default: users

/*
5. Override konstanta dengan class yang berbeda (tidak override langsung)
   - Dapat mendefinisikan konstanta baru pada subclass.
*/

class AdminController extends BaseController
{
    const TABLE = "admins";

    public function getTableName()
    {
        return self::TABLE;
    }
}

$adminController = new AdminController();
echo "5. Nama tabel admin: " . $adminController->getTableName() . "\n\n";
// Output: 5. Nama tabel admin: admins

/*
6. Gunakan class constant untuk status / enum-like behavior
   - Berguna untuk membuat daftar status tetap seperti user role atau post status.
*/

class Status
{
    const ACTIVE = "active";
    const INACTIVE = "inactive";
    const PENDING = "pending";
}

function checkStatus($status)
{
    if ($status === Status::ACTIVE) {
        return "User is active.";
    } elseif ($status === Status::INACTIVE) {
        return "User is inactive.";
    } else {
        return "Status is pending.";
    }
}

echo "6. Status pengguna: " . checkStatus(Status::ACTIVE) . "\n\n";
// Output: 6. Status pengguna: User is active.

/*
7. Menggunakan constant dalam context database atau konfigurasi besar
   - Digunakan untuk membangun koneksi atau resource penting.
*/

class Config
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "password";
}

function connectDB()
{
    echo "7. Connecting to DB at " . Config::DB_HOST . " with user " . Config::DB_USER . "\n\n";
    // Output: 7. Connecting to DB at localhost with user root
}

connectDB();
