<?php
/*
Access Arrays pada PHP adalah cara untuk mengambil nilai dari array.
Dalam pengembangan web, ini sering digunakan untuk menampilkan data pengguna,
daftar produk, konfigurasi sistem, dan lainnya.
*/

echo "-------------------- Access Arrays in PHP --------------------" . "\n\n";

/*
1. Double or Single Quotes
   - Mengakses elemen array menggunakan tanda petik ganda atau tunggal pada key (untuk associative array).
*/

echo "1. Double or Single Quotes" . "\n\n";

$user = [
    "name" => "Michael",
    "email" => "michael@example.com",
    "role" => "Admin"
];

echo "Name: " . $user["name"] . "\n";    // Output: Name: Michael
echo 'Email: ' . $user['email'] . "\n";  // Output: Email: michael@example.com
echo "\n\n";

/*
2. Execute a Function Item
   - Mengakses nilai array lalu langsung memprosesnya dengan fungsi.
*/

echo "2. Execute a Function Item" . "\n\n";

$products = [
    "Laptop",
    "Smartphone",
    "Tablet"
];

echo strtoupper($products[0]) . "\n"; // Output: LAPTOP
echo strtolower($products[1]) . "\n"; // Output: smartphone
echo "\n\n";

/*
3. Loop Through an Associative Array
   - Melakukan perulangan untuk membaca key dan value dari array asosiatif.
*/

echo "3. Loop Through an Associative Array" . "\n\n";

$teamRoles = [
    "John" => "Frontend Developer",
    "Emma" => "Backend Developer",
    "Robert" => "UI/UX Designer"
];

foreach ($teamRoles as $name => $role) {
    echo "Name: $name - Role: $role\n";
}
/*
Output:
Name: John - Role: Frontend Developer
Name: Emma - Role: Backend Developer
Name: Robert - Role: UI/UX Designer
*/
echo "\n\n";

/*
4. Loop Through an Indexed Array
   - Melakukan perulangan pada array dengan indeks numerik.
*/

echo "4. Loop Through an Indexed Array" . "\n\n";

$frameworks = [
    "Laravel",
    "Symfony",
    "CodeIgniter"
];

foreach ($frameworks as $index => $framework) {
    echo "Index: $index - Framework: $framework\n";
}
/*
Output:
Index: 0 - Framework: Laravel
Index: 1 - Framework: Symfony
Index: 2 - Framework: CodeIgniter
*/
echo "\n\n";
