<?php
/*
Create Arrays pada PHP adalah cara untuk membuat array, yaitu struktur data yang dapat menyimpan banyak nilai dalam satu variabel.
Dalam pengembangan web, array sering digunakan untuk menyimpan data seperti daftar user, konfigurasi, daftar produk, dan lainnya.
*/

echo "-------------------- Create Arrays in PHP --------------------" . "\n\n";

/*
1. Multiple Lines
   - Membuat array dengan menuliskan elemen pada banyak baris agar mudah dibaca.
*/

echo "1. Multiple Lines" . "\n\n";

$teamMembers = [
    "Alice",
    "Bob",
    "Charlie"
];

print_r($teamMembers);
/*
Output:
Array
(
    [0] => Alice
    [1] => Bob
    [2] => Charlie
)
*/
echo "\n\n";

/*
2. Trailing Comma
   - Menambahkan koma di akhir elemen terakhir array.
     Ini sah di PHP dan memudahkan saat menambahkan elemen baru.
*/

echo "2. Trailing Comma" . "\n\n";

$frontendTools = [
    "HTML",
    "CSS",
    "JavaScript",
];

print_r($frontendTools);
/*
Output:
Array
(
    [0] => HTML
    [1] => CSS
    [2] => JavaScript
)
*/
echo "\n\n";

/*
3. Array Keys
   - Menentukan key (indeks) secara manual untuk setiap elemen array.
     Sangat berguna jika ingin data memiliki identitas unik.
*/

echo "3. Array Keys" . "\n\n";

$userRoles = [
    "admin" => "John",
    "editor" => "Emma",
    "subscriber" => "Robert"
];

print_r($userRoles);
/*
Output:
Array
(
    [admin] => John
    [editor] => Emma
    [subscriber] => Robert
)
*/
echo "\n\n";

/*
4. Declare Empty Array
   - Membuat array kosong untuk diisi nanti.
     Contoh: keranjang belanja pada aplikasi e-commerce.
*/

echo "4. Declare Empty Array" . "\n\n";

$cartItems = []; // Array kosong
$cartItems[] = "Laptop";
$cartItems[] = "Wireless Mouse";
$cartItems[] = "Keyboard";

print_r($cartItems);
/*
Output:
Array
(
    [0] => Laptop
    [1] => Wireless Mouse
    [2] => Keyboard
)
*/
echo "\n\n";

/*
5. Mixing Array Keys
   - Menggabungkan key numerik dan string dalam satu array.
     Bisa dilakukan di PHP, tetapi harus hati-hati agar tidak membingungkan.
*/

echo "5. Mixing Array Keys" . "\n\n";

$projectInfo = [
    "projectName" => "Website Redesign",
    "deadline" => "2025-09-30",
    0 => "Alice", // Lead Designer
    1 => "David", // Backend Developer
    "manager" => "Michael"
];

print_r($projectInfo);
/*
Output:
Array
(
    [projectName] => Website Redesign
    [deadline] => 2025-09-30
    [0] => Alice
    [1] => David
    [manager] => Michael
)
*/
echo "\n\n";
