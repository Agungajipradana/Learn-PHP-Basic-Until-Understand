<?php

/*
Inheritance (Pewarisan) adalah salah satu pilar utama dalam Object-Oriented Programming (OOP). Dalam PHP, inheritance memungkinkan sebuah class (class) untuk mewarisi properti dan metode dari class lain. Class yang mewarisi disebut child class (class anak), sementara class yang diwarisi disebut parent class (class induk).

Inheritance memungkinkan penggunaan kembali kode, meningkatkan efisiensi, dan mempermudah pengelolaan struktur program.
*/

/* 
Konsep Dasar Inheritance

    1. Parent Class (Class Induk): Class yang properti dan metodenya diwarisi oleh class lain.
    2. Child Class (Class Anak): Class yang mewarisi properti dan metode dari class parent, serta dapat menambahkan atau mengganti properti/metode tersebut.
    3. Keyword extends digunakan untuk mendeklarasikan bahwa sebuah class adalah turunan dari class lain.
    4. Child Class dapat:

        - Menggunakan properti dan metode dari class parent.
        - Mengoverride metode dari class parent untuk memberikan implementasi baru.
*/

echo "--------------------------------- OOP Inheritance ---------------------------------" . "\n\n";

/*
Keuntungan Inheritance

    1. Kode Reusable: Tidak perlu menduplikasi kode yang sama di beberapa class.
    2. Struktur Hierarkis: Membuat hubungan antar class lebih logis.
    3. Fleksibilitas: Child class dapat menambahkan fungsionalitas tambahan atau mengubah fungsionalitas yang diwarisi.
*/

echo "--------------------------------- Contoh Dasar Inheritance ---------------------------------" . "\n\n";

// Parent class
class Vehicle
{
    // Properti untuk menyimpan merek kendaraan
    public $brand;

     // Constructor untuk menginisialisasi properti brand
    public function __construct($brand)
    {
        $this->brand = $brand;
    }

    // Method untuk menampilkan aksi umum kendaraan
    public function move()
    {
        return "{$this->brand} is moving.";
    }
}

// Child class
class Car extends Vehicle
{
    // Properti untuk menyimpan jenis bahan bakar
    public $fuelType;

     // Constructor untuk menginisialisasi properti brand dan fuelType
    public function __construct($brand, $fuelType)
    {
        parent::__construct($brand); // Memanggil constructor parent class
        $this->fuelType = $fuelType;
    }

    // Override method move untuk memberikan implementasi spesifik pada mobil
    public function move()
    {
        return "{$this->brand} is driving on the road.";
    }

    // Method khusus untuk menampilkan aksi pengisian bahan bakar
    public function refuel()
    {
        return "{$this->brand} is refueling with {$this->fuelType}.";
    }
}

// Instansiasi objek Vehicle dengan merek "Generic Vehicle"
$vehicle = new Vehicle("Generic Vehicle");

// Memanggil method move() pada objek Vehicle
// Output: Generic Vehicle is moving.
echo $vehicle->move() . "\n"; 

// Instansiasi objek Car dengan merek "Toyota" dan bahan bakar "Gasoline"
$car = new Car("Toyota", "Gasoline");

// Memanggil method move() pada objek Car
// Karena Car mengoverride method move(), hasilnya implementasi spesifik dari Car
// Output: Toyota is driving on the road.
echo $car->move() . "\n";     

// Memanggil method refuel() pada objek Car
// Output: Toyota is refueling with Gasoline.
echo $car->refuel() . "\n";   

echo "\n\n";

/*
Penjelasan Contoh

    1. Class Parent (Vehicle):

        - Mewakili kendaraan umum.
        - Memiliki properti $brand dan metode move.

    2. Class Child (Car):

        - Mewarisi properti $brand dan metode move dari Vehicle.
        - Menambahkan properti baru $fuelType.
        - Mengoverride metode move untuk memberikan implementasi khusus untuk mobil.
        - Menambahkan metode baru refuel.

    3. Keyword parent::__construct():

        - Memanggil konstruktor class parent agar properti yang diwarisi dapat diinisialisasi.
*/


echo "--------------------------------- Inheritance dengan Properti dan Metode Tambahan ---------------------------------" . "\n\n";

// Parent class
class Employees
{
     // Properti untuk menyimpan nama dan gaji karyawan
    protected $name;
    protected $salary;

    // Constructor untuk menginisialisasi nama dan gaji
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Method untuk mendapatkan detail karyawan (nama dan gaji)
    public function getDetails()
    {
        return "Employee: {$this->name}, Salary: {$this->salary}";
    }
}

// Child class: Manager
class Manager extends Employees
{
    // Properti untuk menyimpan bonus
    private $bonus;

    // Constructor untuk menginisialisasi nama, gaji, dan bonus
    public function __construct($name, $salary, $bonus)
    {
        // Memanggil constructor parent class untuk menginisialisasi nama dan gaji
        parent::__construct($name, $salary); // Memanggil constructor parent class
        $this->bonus = $bonus;
    }

    // Override method getDetails untuk menambahkan informasi bonus
    public function getDetails()
    {
        return parent::getDetails() . ", Bonus: {$this->bonus}";
    }
}

// Child class: Intern
class Intern extends Employees
{
     // Properti untuk menyimpan durasi magang (dalam bulan)
    private $duration;

    // Constructor untuk menginisialisasi nama, gaji, dan durasi magang
    public function __construct($name, $salary, $duration)
    {
        // Memanggil constructor parent class untuk menginisialisasi nama dan gaji
        parent::__construct($name, $salary);
        $this->duration = $duration;
    }

     // Override method getDetails untuk menambahkan informasi durasi magang
    public function getDetails()
    {
        return parent::getDetails() . ", Internship Duration: {$this->duration} months";
    }
}

// Membuat objek Manager dengan nama "Alice", gaji 10000, dan bonus 2000
$manager = new Manager("Alice", 10000, 2000);

// Membuat objek Intern dengan nama "Bob", gaji 3000, dan durasi magang 6 bulan
$intern = new Intern("Bob", 3000, 6);

// Menampilkan detail Manager
// Output: Employee: Alice, Salary: 10000, Bonus: 2000
echo $manager->getDetails() . "\n"; 

// Menampilkan detail Intern
// Output: Employee: Bob, Salary: 3000, Internship Duration: 6 months
echo $intern->getDetails() . "\n";   

echo "\n\n";

/*
Overriding dalam Inheritance
Child Class dapat mengubah metode dari class parent dengan memberikan implementasi baru. Gunakan parent:: jika ingin tetap menggunakan bagian dari metode parent.
*/

/*
Kapan Menggunakan Inheritance?

    1. Ketika ada hubungan "is-a" antara class, misalnya:
        - Car is-a Vehicle.
        - Manager is-a Employee.

    2. Ketika ingin menggunakan kembali kode yang ada dan membuatnya lebih modular.
*/

/*
Kesimpulan
Inheritance pada PHP adalah fitur yang memungkinkan hubungan hierarkis antara class, sehingga kode lebih mudah dikelola, lebih modular, dan dapat digunakan kembali. Dengan inheritance, Anda dapat menciptakan struktur class yang lebih fleksibel dan mendukung pengembangan aplikasi secara lebih efisien.
*/