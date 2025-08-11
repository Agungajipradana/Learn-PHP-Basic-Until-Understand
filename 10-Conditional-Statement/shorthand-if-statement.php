<?php

/*
PHP Shorthand If Statement
Digunakan untuk:
- Memperpendek penulisan if...else
- Cocok untuk kondisi sederhana dalam satu baris
- Banyak digunakan di template engine & quick checks
*/

echo "-------------------- PHP Short Hand If (Ternary) --------------------\n\n";

/*
1. Mengecek apakah user login
   - Relate ke halaman dashboard.
*/
$userName = "Michael";
echo $userName ? "1. Welcome, $userName\n" : "1. Please log in\n";
// Output: Welcome, Michael

echo "\n";

/*
2. Menentukan status stok produk
   - Digunakan di halaman detail produk.
*/
$productStock = 0;
echo $productStock > 0 ? "2. Product available\n" : "2. Out of stock\n";
// Output: Out of stock

echo "\n";

/*
3. Menentukan role user
   - Untuk mengatur akses halaman admin.
*/
$userRole = "editor";
echo $userRole === "admin" ? "3. Access granted\n" : "3. Access denied\n";
// Output: Access denied

echo "\n";

/*
4. Menentukan status koneksi
   - Untuk indikator status di aplikasi real-time.
*/
$ping = 150;
echo $ping < 100 ? "4. Connection Excellent\n" : "4. Connection Needs Improvement\n";
// Output: Connection Needs Improvement

echo "\n";

/*
5. Menentukan kategori umur
   - Untuk pembatasan konten.
*/
$age = 20;
echo $age >= 18 ? "5. Adult content allowed\n" : "5. Restricted content\n";
// Output: Adult content allowed


echo "\n\n";
echo "-------------------- PHP Short Hand If...Else (Null Coalescing) --------------------\n\n";

/*
6. Menampilkan username atau default 'Guest'
   - Cocok untuk menampilkan nama di navbar.
*/
$inputName = null;
echo "6. Hello, " . ($inputName ?? "Guest") . "\n";
// Output: Hello, Guest

echo "\n";

/*
7. Mengambil parameter halaman dari URL
   - Digunakan untuk routing sederhana.
*/
$page = $_GET['page'] ?? 'home';
echo "7. Current page: $page\n";
// Output (jika URL tanpa ?page=): Current page: home

echo "\n";

/*
8. Mengatur default theme
   - Untuk personalisasi tampilan user.
*/
$userTheme = null;
$theme = $userTheme ?? 'light';
echo "8. Theme set to: $theme\n";
// Output: Theme set to: light

echo "\n";

/*
9. Mengambil data email dari form
   - Digunakan di proses registrasi.
*/
$email = $_POST['email'] ?? null;
echo $email ? "9. Email saved: $email\n" : "9. Email is required\n";
// Output (jika $_POST['email'] kosong): Email is required

echo "\n";

/*
10. Kombinasi Null Coalescing + Ternary
    - Mengecek login dan arahkan halaman.
*/
$currentUser = $_GET['user'] ?? null;
echo $currentUser ? "10. Loading dashboard for $currentUser\n" : "10. Redirecting to login page\n";
// Output (jika tanpa ?user=): Redirecting to login page
