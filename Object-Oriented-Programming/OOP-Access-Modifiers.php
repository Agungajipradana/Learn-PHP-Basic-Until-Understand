<?php

/*
Access Modifiers dalam OOP adalah kata kunci yang digunakan untuk mengatur tingkat aksesibilitas properti (variabel) dan metode (fungsi) dalam sebuah kelas. Modifier ini menentukan siapa yang dapat mengakses properti atau metode tertentu: dari dalam kelas itu sendiri, kelas turunan, atau dari luar kelas.
*/

/*
Tiga Jenis Access Modifiers di PHP
1. public:

    - Properti atau metode dapat diakses dari mana saja.
    - Tidak ada batasan, baik dari dalam kelas, kelas turunan, atau luar kelas.

2. protected:

    - Properti atau metode hanya dapat diakses dari dalam kelas itu sendiri dan kelas turunan (subclass).
    - Tidak dapat diakses dari luar kelas.

3. private:

    - Properti atau metode hanya dapat diakses dari dalam kelas itu sendiri.
    - Tidak dapat diakses oleh kelas turunan maupun dari luar kelas.
*/

echo "-------------------- Contoh Penggunaan Access Modifiers --------------------" . "\n\n";

class User
{
    // Public property: Dapat diakses dari mana saja
    public $username;

    // Protected property: Hanya dapat diakses dari dalam kelas atau subclass
    protected $email;

    // Private property: Hanya dapat diakses dari dalam kelas
    private $password;

    // Constructor untuk menginisialisasi properti
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Public method: Dapat diakses dari mana saja
    public function getUserInfo()
    {
        return "Username: {$this->username}, Email: {$this->email}";
    }

    // Private method: Hanya dapat diakses dari dalam kelas
    private function getPassword()
    {
        return $this->password;
    }

    // Protected method: Dapat digunakan oleh subclass
    protected function getEmail()
    {
        return $this->email;
    }
}

class Admin extends User
{
    // Method untuk mendapatkan email admin (akses ke protected property)
    public function getAdminEmail()
    {
        return $this->getEmail(); // Memanggil protected method dari parent class
    }
}

// Membuat objek dari kelas User
$user = new User("JohnDoe", "john@example.com", "secure123");

// Mengakses properti public
echo $user->username . "\n"; // Output: JohnDoe

// Mengakses public method
echo $user->getUserInfo() . "\n"; // Output: Username: JohnDoe, Email: john@example.com

// Tidak dapat mengakses properti atau method protected
// echo $user->email; // Error
// echo $user->getEmail(); // Error

// Tidak dapat mengakses properti atau method private
// echo $user->password; // Error
// echo $user->getPassword(); // Error

// Membuat objek dari kelas Admin
$admin = new Admin("AdminUser", "admin@example.com", "admin123");

// Mengakses protected method melalui subclass
echo $admin->getAdminEmail() . "\n"; // Output: admin@example.com

/*
Output:

JohnDoe
Username: JohnDoe, Email: john@example.com
admin@example.com
*/

/*
Penjelasan

1. Public (public):

    - Properti $username dan metode getUserInfo dapat diakses dari mana saja (kelas, luar kelas, subclass).

2. Protected (protected):

    - Properti $email dan metode getEmail hanya dapat diakses dari dalam kelas User atau subclass Admin.
    - Tidak dapat diakses langsung dari luar kelas.

3. Private (private):

    - Properti $password dan metode getPassword hanya dapat diakses dari dalam kelas User.
    - Tidak dapat diakses oleh subclass atau dari luar kelas.
*/

/*
Kesimpulan

    - Access Modifiers membantu mengontrol aksesibilitas properti dan metode, sehingga mendukung prinsip Encapsulation.
    - Gunakan public untuk properti atau metode yang perlu diakses secara luas, protected untuk yang hanya relevan di kelas atau subclass, dan private untuk detail yang benar-benar hanya untuk internal kelas.
*/