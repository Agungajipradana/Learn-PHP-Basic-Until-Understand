<?php

/*
Common Code Blocks (Blok Kode Umum) di PHP
------------------------------------------
Blok kode umum adalah kumpulan pernyataan yang dikelompokkan 
dalam tanda kurung kurawal {} untuk dijalankan bersama.

Biasanya digunakan di:
- if statement
- switch statement
- loop (for, while, foreach)
- function
*/

echo "-------------------- PHP Common Code Blocks --------------------\n\n";

/*
1. Common code block di if statement sederhana
   - Menjalankan beberapa perintah saat kondisi terpenuhi.
*/
$name = "John";
if ($name === "John") {
    echo "1. Hello, John!\n";
    echo "1. Welcome to our website.\n"; // Output: Hello, John! Welcome to our website.
}

echo "\n";

/*
2. Common code block di if-else
   - Menentukan greeting berdasarkan nama.
*/
$name = "Alice";
if ($name === "John") {
    echo "2. Hello, John!\n";
} else {
    echo "2. Hello, $name!\n";
    echo "2. Nice to meet you.\n"; // Output: Hello, Alice! Nice to meet you.
}

echo "\n";

/*
3. Common code block di switch
   - Menentukan role pada website.
*/
$role = "customer";
switch ($role) {
    case "admin":
        echo "3. Admin Dashboard loaded.\n";
        echo "3. You can manage all settings.\n";
        break;
    case "customer":
        echo "3. Customer Dashboard loaded.\n";
        echo "3. You can view and buy products.\n";
        // Output: Customer Dashboard loaded. You can view and buy products.
        break;
    default:
        echo "3. Unknown role.\n";
}

echo "\n";

/*
4. Common code block di loop (foreach)
   - Menampilkan daftar produk.
*/
$products = ["Laptop", "Smartphone", "Headphones"];
foreach ($products as $product) {
    echo "4. Product: $product\n";
    echo "4. Click to view details.\n";
    // Output: Menampilkan semua produk.
}

echo "\n";

/*
5. Common code block di function
   - Fungsi untuk menampilkan profil user.
*/
function showUserProfile($name, $role)
{
    echo "5. Name: $name\n";
    echo "5. Role: $role\n";
    echo "5. Welcome to your dashboard!\n";
}
showUserProfile("Michael", "Admin");
// Output: Name: Michael, Role: Admin, Welcome to your dashboard!

echo "\n";

/*
6. Common code block gabungan (if + loop + function)
   - Contoh lebih kompleks untuk pengembangan web.
*/
function showMenu($role)
{
    if ($role === "admin") {
        $menus = ["Dashboard", "Manage Users", "Settings"];
    } elseif ($role === "customer") {
        $menus = ["Home", "Shop", "Orders"];
    } else {
        $menus = ["Home", "Contact Us"];
    }

    foreach ($menus as $menu) {
        echo "6. Menu: $menu\n";
    }
}
$userRole = "admin";
showMenu($userRole);
// Output: Menampilkan menu sesuai role user.
