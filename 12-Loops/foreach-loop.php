<?php

/*
PHP foreach Loop
Digunakan untuk iterasi pada array atau objek.
*/

echo "-------------------- PHP foreach Loop --------------------\n\n";

/*
1. foreach loop sederhana pada array
   - Menampilkan nama user.
*/
$users = ["Michael", "Sarah", "David", "Emma"];
foreach ($users as $user) {
    echo "1. User: $user\n"; // Output: User: Michael ... Emma
}

echo "\n";

/*
2. foreach loop dengan key dan value pada associative array
   - Menampilkan nama user dan peran mereka.
*/
$userRoles = [
    "Michael" => "Admin",
    "Sarah" => "Editor",
    "David" => "Customer",
    "Emma" => "Subscriber"
];
foreach ($userRoles as $name => $role) {
    echo "2. $name has role: $role\n";
    // Output: Michael has role: Admin ... Emma has role: Subscriber
}

echo "\n";

/*
3. foreach loop pada objek
   - Menampilkan properti objek user.
*/
class User
{
    public $name;
    public $email;
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}

$userObj = new User("Alice", "alice@example.com");

foreach ($userObj as $property => $value) {
    echo "3. $property : $value\n";
    // Output: name : Alice, email : alice@example.com
}

echo "\n";

/*
4. foreach dengan break
   - Mencari user tertentu dan menghentikan loop setelah ditemukan.
*/
$users = ["Michael", "Sarah", "David", "Emma"];
foreach ($users as $user) {
    if ($user === "David") {
        echo "4. User found: $user\n"; // Output: User found: David
        break;
    }
    echo "4. Checking user: $user\n";
}

echo "\n";

/*
5. foreach dengan continue
   - Melewati user yang tidak aktif saat iterasi.
*/
$userStatus = [
    "Michael" => true,
    "Sarah" => false,
    "David" => true,
    "Emma" => false
];
foreach ($userStatus as $name => $active) {
    if (!$active) {
        continue; // Lewati user yang tidak aktif
    }
    echo "5. Active user: $name\n";
    // Output: Active user: Michael, Active user: David
}

echo "\n";

/*
6. foreach by reference
   - Memodifikasi isi array langsung pada loop.
*/
$prices = [100, 200, 300];
foreach ($prices as &$price) {
    $price += 50; // Tambah 50 pada setiap harga
}
unset($price); // Hapus referensi terakhir agar aman

foreach ($prices as $index => $price) {
    echo "6. Price at index $index: $price\n";
    // Output: Price at index 0: 150, index 1: 250, index 2: 350
}

echo "\n";

/*
7. Alternative syntax foreach loop
   - Menggunakan tanda titik dua dan endforeach.
*/
$pages = ["Home", "About", "Services", "Contact"];
foreach ($pages as $page):
    echo "7. Page: $page\n";
// Output: Page: Home ... Contact
endforeach;
