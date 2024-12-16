<?php

/*
Traits adalah mekanisme dalam PHP untuk mendukung code reuse di berbagai Class. Traits diperkenalkan pada PHP 5.4 untuk mengatasi keterbatasan pewarisan tunggal (single inheritance). Dengan traits, Anda dapat mendefinisikan metode yang dapat digunakan di banyak Class tanpa perlu membuat hierarki pewarisan yang kompleks.
*/

/*
Fitur Utama Traits

    1. Memungkinkan Class berbagi metode tanpa memerlukan pewarisan.
    2. Digunakan sebagai building block untuk membuat kode yang modular dan dapat digunakan kembali.
    3. Sebuah Class dapat menggunakan lebih dari satu trait.
    4. Jika dua traits memiliki metode dengan nama yang sama, konflik dapat diatasi dengan resolusi konflik menggunakan insteadof atau alias.
*/

echo "--------------------------------- OOP Traits ---------------------------------" . "\n\n";

// Definisi trait untuk logging
trait Logger
{
    // Metode untuk mencetak pesan log
    public function log($message)
    {
        echo "[LOG]: " . $message . "\n";
    }
}

// Definisi trait untuk validasi
trait Validator
{
    // Metode untuk memvalidasi apakah string adalah email yang valid
    public function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

// Class User menggunakan kedua trait
class User
{
    use Logger, Validator; // Menggunakan trait Logger dan Validator

    private $name; // Properti untuk menyimpan nama pengguna
    private $email; // Properti untuk menyimpan email pengguna

    // Konstruktor untuk menginisialisasi properti $name dan $email
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Metode untuk mengubah email pengguna dengan validasi
    public function setEmail($email)
    {
        // Memeriksa apakah email valid
        if ($this->validateEmail($email)) {
            $this->email = $email; // Mengubah email jika valid
            $this->log("Email updated to $email"); // Log pesan sukses
        } else {
            $this->log("Invalid email: $email"); // Log pesan error
        }
    }

    // Metode untuk mendapatkan informasi pengguna
    public function getInfo()
    {
        return "Name: {$this->name}, Email: {$this->email}";
    }
}

// Contoh penggunaan Class User
$user = new User("John Doe", "john@example.com"); // Membuat objek User dengan nama dan email
echo $user->getInfo() . "\n"; // Output: Name: John Doe, Email: john@example.com

// Mencoba mengubah email ke email yang valid
$user->setEmail("new.email@example.com"); // Output: [LOG]: Email updated to new.email@example.com
echo $user->getInfo() . "\n"; // Output: Name: John Doe, Email: new.email@example.com

// Mencoba mengubah email ke email yang tidak valid
$user->setEmail("invalid-email"); // Output: [LOG]: Invalid email: invalid-email

echo "\n\n";

/*
Penjelasan Contoh

1. Trait Logger:

    - Menyediakan metode log() yang dapat digunakan untuk mencetak pesan log ke konsol atau file.
    - Metode ini dapat digunakan kembali di berbagai Class tanpa harus menulis ulang kode.

2. Trait Validator:

    - Menyediakan metode validateEmail() yang digunakan untuk memvalidasi format email.
    - Fungsi ini memastikan bahwa email yang diberikan sesuai dengan format email yang valid.

3. Class User:

    - Menggunakan use Logger, Validator untuk menggunakan kedua trait dalam Class.
    - Metode dari trait dapat langsung dipanggil oleh Class, misalnya log() dan validateEmail().

4. Penggunaan Objek:

    - Ketika mencoba mengatur email baru, Class User memanfaatkan metode validateEmail() dari Validator untuk memeriksa validitas email.
    - Jika valid, metode log() dari Logger digunakan untuk mencetak pesan keberhasilan.
    - Jika tidak valid, pesan kesalahan dicetak menggunakan metode log().
*/

echo "--------------------------------- Resolusi Konflik dengan insteadof ---------------------------------" . "\n\n";

/*
Jika dua traits memiliki metode dengan nama yang sama, Anda dapat menyelesaikan konflik menggunakan kata kunci insteadof.
*/

trait A
{
    // Metode test() yang didefinisikan dalam Trait A
    public function test()
    {
        echo "Trait A\n";
    }
}

trait B
{
    // Metode test() yang didefinisikan dalam Trait B
    public function test()
    {
        echo "Trait B\n";
    }
}

class Example
{
    use A, B {
        A::test insteadof B; // Memilih metode test() dari Trait A untuk digunakan secara default
        B::test as testB;    // Memberikan alias testB untuk metode test() dari Trait B
    }
}

// Membuat objek dari kelas Example
$example = new Example();

// Memanggil metode test() dari Trait A (karena A dipilih melalui 'insteadof')
$example->test();   // Output: Trait A

// Memanggil metode test() dari Trait B menggunakan alias testB
$example->testB();  // Output: Trait B

echo "\n\n";

/*
Kelebihan Traits

    - Memungkinkan kode yang modular dan dapat digunakan kembali.
    - Menghindari pengulangan kode (code duplication).
    - Membantu mengatasi keterbatasan pewarisan tunggal.

Kekurangan Traits
    - Dapat menyebabkan kebingungan jika terlalu banyak traits digunakan dalam satu Class.
    - Tidak memungkinkan pewarisan properti, hanya metode yang dapat digunakan.
*/