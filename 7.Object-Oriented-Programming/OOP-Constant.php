<?php

/*
Constant dalam OOP PHP adalah variabel tetap yang nilainya tidak dapat diubah setelah didefinisikan. Constant sering digunakan untuk menyimpan nilai-nilai yang tidak berubah selama eksekusi program, seperti konfigurasi, tipe data tetap, atau informasi lainnya.
*/

/*
Ciri-Ciri Constant di OOP PHP

    1. Dideklarasikan menggunakan kata kunci const.
    2. Nilainya bersifat tetap dan tidak dapat diubah setelah ditentukan.
    3. Tidak menggunakan $ di depan nama constant.
    4. Memiliki aksesibilitas seperti properti, menggunakan keyword public, protected, atau private (sejak PHP 7.1).
    5. Dapat diakses langsung menggunakan nama class dengan operator (::).
*/

echo "--------------------------------- OOP Constant Basic ---------------------------------" . "\n\n";

class MathOperations
{
    // Mendeklarasikan constant
    const PI = 3.14159;

    // Metode untuk menghitung keliling lingkaran
    public static function calculateCircumference($radius)
    {
        return 2 * self::PI * $radius; // Mengakses constant dengan self::
    }
}

// Mengakses constant secara langsung
echo "Nilai PI: " . MathOperations::PI . "\n"; // Output: Nilai PI: 3.14159

// Menggunakan metode untuk perhitungan
echo "Keliling Lingkaran: " . MathOperations::calculateCircumference(7) . "\n";
// Output: Keliling Lingkaran: 43.98226

echo "\n\n";

echo "-------------------- OOP Constant With Access Modifiers --------------------" . "\n\n";

class Config
{
    public const API_URL = "https://api.example.com";
    protected const API_KEY = "123456abcdef";
    private const SECRET_KEY = "secretKeyValue";

    // Method untuk mengakses constant protected
    protected function getApiKey()
    {
        return self::API_KEY; // Mengakses protected constant
    }

    // Method untuk mengakses constant private
    private function getSecretKey()
    {
        return self::SECRET_KEY; // Mengakses private constant
    }

    public function showKeys()
    {
        return "API Key: " . $this->getApiKey() . ", Secret Key: " . $this->getSecretKey();
    }
}

class ExtendedConfig extends Config
{
    public function displayApiKey()
    {
        // Mengakses protected constant dari parent class
        return "Extended API Key: " . self::API_KEY;
    }
}

// Mengakses constant public
echo "API URL: " . Config::API_URL . "\n"; // Output: API URL: https://api.example.com

// Mengakses constant protected melalui method subclass
$extended = new ExtendedConfig();
echo $extended->displayApiKey() . "\n"; // Output: Extended API Key: 123456abcdef

// Mengakses semua kunci melalui method public
$config = new Config();
echo $config->showKeys() . "\n"; // Output: API Key: 123456abcdef, Secret Key: secretKeyValue

echo "\n\n";

echo "-------------------- OOP Constant In Interface --------------------" . "\n\n";

// Constant dalam interface bersifat public secara default.

interface Status
{
    const PENDING = "pending";
    const APPROVED = "approved";
    const REJECTED = "rejected";
}

class Order implements Status
{
    public function getOrderStatus($status)
    {
        switch ($status) {
            case self::PENDING:
                return "The order is pending.";
            case self::APPROVED:
                return "The order is approved.";
            case self::REJECTED:
                return "The order is rejected.";
            default:
                return "Unknown status.";
        }
    }
}

$order = new Order();
echo $order->getOrderStatus(Status::APPROVED); // Output: The order is approved.

echo "\n\n";

/*
Penjelasan
Akses Constant dengan (::) :

Constant diakses menggunakan nama class atau self:: untuk referensi dalam class yang sama.
Akses Modifier:

public: Constant dapat diakses dari mana saja.
protected: Hanya dapat diakses dari dalam class atau subclass.
private: Hanya dapat diakses dari dalam class itu sendiri.
Interface Constant:

Bersifat public secara default.
Berguna untuk mendefinisikan nilai tetap yang akan digunakan oleh class-class yang mengimplementasi interface.
*/

/*
Keuntungan Menggunakan Constant

    - Immutable: Tidak bisa diubah, sehingga mengurangi kesalahan.
    - Konsistensi: Menyediakan nilai tetap yang bisa digunakan di banyak tempat.
    - Readable: Membuat kode lebih mudah dibaca dengan memberikan nama deskriptif.
*/

/*
Kesimpulan
Constant dalam OOP PHP digunakan untuk mendefinisikan nilai tetap yang sering digunakan secara konsisten dalam aplikasi. Constant dapat memiliki berbagai tingkat aksesibilitas (public, protected, private) dan digunakan baik dalam class, subclass, maupun interface untuk meningkatkan fleksibilitas dan keamanan kode.
*/