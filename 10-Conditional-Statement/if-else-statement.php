<?php

/*
PHP if...else Statement
Digunakan untuk:
- Mengeksekusi satu blok kode jika kondisi terpenuhi, dan blok lain jika tidak
- Validasi form input
- Membatasi atau memberikan akses fitur
*/

echo "-------------------- PHP if...else Statement --------------------\n\n";

/*
1. Mengecek role user
   - Relevan untuk menentukan halaman awal user.
*/
$userRole = "admin"; // Role milik Sarah
if ($userRole == "admin") {
    echo "1. Welcome to the admin dashboard, Sarah.\n"; // Output: Welcome to the admin dashboard, Sarah.
} else {
    echo "1. Welcome to the user homepage.\n";
}

echo "\n";

/*
2. Mengecek umur untuk batasan konten
   - Digunakan untuk memastikan konten hanya untuk 18+.
*/
$age = 16; // Usia milik Michael
if ($age >= 18) {
    echo "2. You can access this content.\n";
} else {
    echo "2. Access denied. You must be at least 18 years old.\n"; // Output: Access denied. You must be at least 18 years old.
}

echo "\n";

/*
3. Mengecek status login
   - Menampilkan dashboard jika login, atau form login jika belum.
*/
$isLoggedIn = false; // Status login John
if ($isLoggedIn) {
    echo "3. Welcome back, John!\n";
} else {
    echo "3. Please log in to continue.\n"; // Output: Please log in to continue.
}

echo "\n";

/*
4. Mengecek stok produk
   - Menampilkan status produk di halaman e-commerce.
*/
$productStock = 0; // Stok produk milik Emma
if ($productStock > 0) {
    echo "4. Product is available for purchase.\n";
} else {
    echo "4. Out of stock.\n"; // Output: Out of stock.
}

echo "\n";

/*
5. Mengecek email valid atau tidak
   - Digunakan saat registrasi.
*/
$email = "david.jones@example.com";
if (strpos($email, "@") !== false) {
    echo "5. Valid email: $email\n"; // Output: Valid email: david.jones@example.com
} else {
    echo "5. Invalid email format.\n";
}

echo "\n";

/*
6. Login sederhana berdasarkan username dan password
   - Simulasi autentikasi.
*/
$inputUsername = "JohnDoe";
$inputPassword = "12345";
$correctUsername = "JohnDoe";
$correctPassword = "12345";

if ($inputUsername == $correctUsername && $inputPassword == $correctPassword) {
    echo "6. Login successful. Welcome, $inputUsername!\n"; // Output: Login successful. Welcome, JohnDoe!
} else {
    echo "6. Login failed. Please check your credentials.\n";
}

echo "\n";

/*
7. Membatasi akses berdasarkan jam kerja
   - Fitur hanya aktif antara jam 09:00 - 17:00.
*/
$currentHour = date("H"); // Ambil jam sekarang
if ($currentHour >= 9 && $currentHour <= 17) {
    echo "7. Support is available now.\n";
} else {
    echo "7. Support is closed. Please come back during working hours.\n";
    // Output tergantung jam eksekusi
}

echo "\n";

/*
8. Mengecek apakah parameter URL tersedia
   - Digunakan untuk navigasi berbasis query string.
*/
$page = $_GET['page'] ?? null;
if ($page == "home") {
    echo "8. You are on the Home Page.\n";
} else {
    echo "8. Redirecting to the homepage...\n";
}

echo "\n";

/*
9. Validasi form nama lengkap
   - Menampilkan pesan error jika kosong.
*/
$formName = ""; // Input dari form
if (!empty($formName)) {
    echo "9. Form submitted by: $formName\n";
} else {
    echo "9. Please enter your name.\n"; // Output: Please enter your name.
}

echo "\n";

/*
10. Memeriksa apakah user memiliki saldo cukup untuk checkout
    - Relevan untuk proses pembayaran.
*/
$accountBalance = 80; // Saldo milik Daniel
$totalPurchase = 100; // Total belanja

if ($accountBalance >= $totalPurchase) {
    echo "10. Payment successful.\n";
} else {
    echo "10. Insufficient balance. Please top up your account.\n";
    // Output: Insufficient balance. Please top up your account.
}
