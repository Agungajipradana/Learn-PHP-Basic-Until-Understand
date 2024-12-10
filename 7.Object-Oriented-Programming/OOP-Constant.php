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

// Interface `Status` berfungsi untuk mendeklarasikan constant yang dapat digunakan di class mana pun yang mengimplementasikan interface ini.
// Constant dalam interface secara default bersifat public dan tidak bisa diubah.
interface Status
{
    const PENDING = "pending"; // Constant untuk status "pending"
    const APPROVED = "approved"; // Constant untuk status "approved"
    const REJECTED = "rejected"; // Constant untuk status "rejected"
}

// Class `Order` mengimplementasikan interface `Status`.
// Ini berarti class ini dapat menggunakan constant yang didefinisikan dalam interface.
class Order implements Status
{
    // Metode `getOrderStatus` untuk mengembalikan pesan berdasarkan status yang diterima.
    public function getOrderStatus($status)
    {
        // Gunakan switch untuk memeriksa nilai status yang diterima.
        switch ($status) {
            case self::PENDING: // Memeriksa jika status adalah "pending".
                return "The order is pending."; // Mengembalikan pesan untuk status "pending".
            case self::APPROVED: // Memeriksa jika status adalah "approved".
                return "The order is approved."; // Mengembalikan pesan untuk status "approved".
            case self::REJECTED: // Memeriksa jika status adalah "rejected".
                return "The order is rejected."; // Mengembalikan pesan untuk status "rejected".
            default: // Jika status tidak cocok dengan nilai constant.
                return "Unknown status."; // Mengembalikan pesan untuk status yang tidak dikenal.
        }
    }
}

// Membuat objek dari class `Order`.
$order = new Order();
// Memanggil metode `getOrderStatus` dengan parameter `Status::APPROVED`.
// `Status::APPROVED` merujuk ke constant "approved" dari interface `Status`.
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

echo "-------------------- OOP Constant Menggunakan static:: untuk Late Static Binding --------------------" . "\n\n";

/*
Jika Anda ingin mengakses constant dalam konteks inheritance, gunakan static:: untuk mendukung late static binding.
*/

// Mendeklarasikan class parent (Animal) dengan constant CATEGORY
class Animal
{
    const CATEGORY = "Animal";

    // Metode statis untuk mengembalikan constant CATEGORY menggunakan static::
    public static function getCategory()
    {
        return static::CATEGORY; // Menggunakan static:: untuk mendukung late static binding
    }
}

// Mendeklarasikan class turunan (Dog) yang mewarisi class Animal
class Dog extends Animal
{
    const CATEGORY = "Dog"; // Mendeklarasikan constant CATEGORY yang akan mengoverride milik class parent
}

// Late static binding
// Memanggil metode getCategory() dari class Dog
// Karena menggunakan static::, constant CATEGORY milik class Dog akan diakses
echo Dog::getCategory(); // Output: Dog

echo "\n\n";

echo "-------------------- OOP Constant Menggunakan parent:: --------------------" . "\n\n";

// Mendefinisikan class Vehicle yang menjadi parent class.
class Vehicle
{
    // Constant TYPE didefinisikan di class Vehicle dengan nilai "General Vehicle".
    const TYPE = "General Vehicle";

    // Method showType akan mengembalikan nilai constant TYPE menggunakan self::.
    public function showType()
    {
        return self::TYPE; // Merujuk ke constant TYPE di class Vehicle.
    }
}

// Mendefinisikan class Car yang merupakan subclass dari Vehicle.
class Car extends Vehicle
{
    // Constant TYPE didefinisikan di class Car dengan nilai "Car".
    const TYPE = "Car";

    // Method showParentType akan mengembalikan nilai constant TYPE di parent class menggunakan parent::.
    public function showParentType()
    {
        return parent::TYPE; // Secara eksplisit merujuk ke constant TYPE di class Vehicle.
    }
}

// Membuat objek dari class Car.
$car = new Car();

// Memanggil method showType() dari objek $car.
// Karena showType() didefinisikan di class Vehicle dan menggunakan self::TYPE,
// maka self::TYPE merujuk ke constant TYPE yang didefinisikan di class Vehicle.
// Output: General Vehicle
echo $car->showType() . "\n";

// Memanggil method showParentType() dari objek $car.
// Method showParentType() menggunakan parent::TYPE, sehingga secara eksplisit 
// merujuk ke constant TYPE di class Vehicle (parent class).
// Output: General Vehicle
echo $car->showParentType() . "\n";

echo "\n\n";

/*
Kapan Harus Menggunakan Constant?
Gunakan constant ketika:

    1. Anda memiliki nilai tetap yang tidak berubah, seperti API key, konfigurasi, atau pengenal tertentu.
    2. Anda ingin menghindari penggunaan variabel global untuk nilai statik.
    3. Anda ingin nilai tersebut dapat diakses di seluruh class atau turunan tanpa memerlukan instance.
*/