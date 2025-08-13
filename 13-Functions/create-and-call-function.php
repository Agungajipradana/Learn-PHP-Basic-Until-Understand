<?php

/*
Create and Call Function dalam PHP digunakan untuk membuat fungsi yang dapat dipanggil berulang kali.
Fungsi membantu membuat kode lebih terstruktur, efisien, dan mudah dipelihara.
Contoh-contoh berikut disusun dari yang paling dasar hingga yang lebih kompleks dalam pengembangan web.
*/

echo "--------------------------------------------------- Create and Call Function ---------------------------------------------------" . "\n\n";

/*
1. Fungsi Sederhana Menampilkan Pesan Statis
    - Kasus paling dasar untuk menampilkan teks sederhana.
*/

echo "1. Simple Function\n\n";

function welcomeMessage()
{
    echo "Welcome to My Website!";
}

// Memanggil fungsi
welcomeMessage(); // Output: Welcome to My Website!

echo "\n\n";

/*
2. Fungsi dengan Satu Parameter
    - Berguna untuk menyapa user berdasarkan nama.
*/

echo "2. Function with One Parameter\n\n";

function greetUser($name)
{
    echo "Hello, $name! Welcome to our platform.";
}

// Memanggil fungsi
greetUser("Michael"); // Output: Hello, Michael! Welcome to our platform.

echo "\n\n";

/*
3. Fungsi dengan Beberapa Parameter
    - Berguna untuk menampilkan informasi lebih lengkap, seperti role pengguna.
*/

echo "3. Function with Multiple Parameters\n\n";

function showUserRole($name, $role)
{
    echo "$name, your role is: $role.";
}

// Memanggil fungsi
showUserRole("Emily", "Administrator"); // Output: Emily, your role is: Administrator.

echo "\n\n";

/*
4. Fungsi Mengembalikan HTML Sederhana
    - Contoh umum untuk menampilkan komponen web seperti kartu profil.
*/

echo "4. Function Returning HTML\n\n";

function createUserCard($name, $email)
{
    return "
        <div style='border:1px solid #ccc; padding:10px; width:250px;'>
            <h3>$name</h3>
            <p>Email: $email</p>
        </div>
    ";
}

// Memanggil fungsi
echo createUserCard("David Johnson", "david@example.com"); // Output: HTML card profile user

echo "\n\n";

/*
5. Fungsi untuk Membuat Menu Navigasi
    - Berguna dalam membuat menu dinamis pada website.
*/

echo "5. Function Creating Navigation Menu\n\n";

function createNavMenu($menuItems)
{
    $html = "<ul style='list-style:none; display:flex; gap:10px;'>";
    foreach ($menuItems as $item) {
        $html .= "<li><a href='{$item['url']}'>{$item['label']}</a></li>";
    }
    $html .= "</ul>";
    return $html;
}

$menu = [
    ["label" => "Home", "url" => "/"],
    ["label" => "About", "url" => "/about"],
    ["label" => "Contact", "url" => "/contact"]
];

echo createNavMenu($menu); // Output: HTML menu navigasi

echo "\n\n";

/*
6. Fungsi dengan Logika Kondisional
    - Berguna untuk mengecek status login pengguna.
*/

echo "6. Function with Conditional Logic\n\n";

function checkLoginStatus($isLoggedIn, $name = null)
{
    if ($isLoggedIn) {
        echo "Welcome back, $name!";
    } else {
        echo "Please log in to access this page.";
    }
}

checkLoginStatus(true, "Robert"); // Output: Welcome back, Robert!
echo "\n";
checkLoginStatus(false); // Output: Please log in to access this page.

echo "\n\n";

/*
7. Fungsi untuk Menghitung Total Harga Belanja
    - Berguna dalam sistem e-commerce untuk menghitung total keranjang belanja.
*/

echo "7. Function for Data Processing\n\n";

function calculateTotalPrice($items)
{
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}

$cart = [
    ["price" => 10, "quantity" => 2],
    ["price" => 15, "quantity" => 1],
    ["price" => 5, "quantity" => 3]
];

echo "Total Price: $" . calculateTotalPrice($cart); // Output: Total Price: $50

echo "\n";
