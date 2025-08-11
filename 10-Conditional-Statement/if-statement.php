<?php

/*
PHP If Statement
Digunakan untuk:
- Mengecek kondisi tertentu sebelum menjalankan kode
- Validasi data pada form
- Mengatur alur program sesuai status user
- Membatasi akses halaman
*/

echo "-------------------- PHP If Statement --------------------\n\n";

/*
1. Mengecek role user
   - Relevan untuk sistem hak akses di website.
*/

$userRole = "admin"; // Role user milik Sarah
if ($userRole == "admin") {
    echo "1. Welcome, Admin Sarah!\n"; // Output: Welcome, Admin Sarah!
}

echo "\n";

/*
2. Mengecek username yang login
   - Cocok untuk menampilkan sapaan personal.
*/

$username = "JohnDoe"; // Username dari user yang login
if ($username == "JohnDoe") {
    echo "2. Hello, JohnDoe!\n"; // Output: Hello, JohnDoe!
}

echo "\n";

/*
3. Mengecek umur untuk batasan konten
   - Digunakan untuk memastikan hanya user dewasa yang mengakses.
*/

$age = 20; // Usia milik Michael
if ($age >= 18) {
    echo "3. Access granted for Michael.\n"; // Output: Access granted for Michael.
}

echo "\n";

/*
4. Mengecek status login dan keanggotaan premium
   - Relevan untuk membuka akses ke fitur eksklusif.
*/

$isLoggedIn = true; // Status login Emma
$hasPremiumAccess = true; // Status keanggotaan premium Emma

if ($isLoggedIn && $hasPremiumAccess) {
    echo "4. Welcome to the premium dashboard, Emma.\n"; // Output: Welcome to the premium dashboard, Emma.
}

echo "\n";

/*
5. Mengecek input form sederhana
   - Digunakan untuk memastikan form terisi sebelum diproses.
*/

$formName = "Michael"; // Input form dari user
if (!empty($formName)) {
    echo "5. Form submitted by: $formName\n"; // Output: Form submitted by: Michael
}

echo "\n";

/*
6. Mengecek email valid (sederhana)
   - Digunakan dalam registrasi atau login.
*/

$email = "emma.smith@example.com"; // Email milik Emma Smith
if (strpos($email, "@") !== false) {
    echo "6. Valid email: $email\n"; // Output: Valid email: emma.smith@example.com
}

echo "\n";

/*
7. Mengecek parameter URL
   - Relevan untuk sistem navigasi berbasis URL.
*/

$page = $_GET['page'] ?? null; // Ambil parameter 'page' dari URL
if ($page == "home") {
    echo "7. You are on the Home Page.\n";
    // Output jika URL: if-statement.php?page=home → You are on the Home Page.
}

echo "\n";

/*
8. Login multi-kriteria
   - Simulasi validasi login sederhana.
*/

$inputUsername = "David";
$inputPassword = "12345";

$correctUsername = "David";
$correctPassword = "12345";

if ($inputUsername == $correctUsername && $inputPassword == $correctPassword) {
    echo "8. Login successful. Welcome, $inputUsername!\n"; // Output: Login successful. Welcome, David!
}

echo "\n";

/*
9. Pembatasan akses berdasarkan jam kerja
   - Digunakan untuk fitur yang hanya aktif di jam tertentu.
*/

$currentHour = date("H"); // Ambil jam saat ini
if ($currentHour >= 9 && $currentHour <= 17) {
    echo "9. Support is available now.\n";
    // Output jika waktu 09:00-17:00: Support is available now.
}

echo "\n";

/*
10. Pengecekan stok produk
    - Relevan untuk menampilkan status ketersediaan produk di e-commerce.
*/

$productStock = 5; // Jumlah stok produk milik Daniel
if ($productStock > 0) {
    echo "10. Product is available for purchase.\n"; // Output: Product is available for purchase.
}
