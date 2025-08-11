<?php

/*
PHP If Operators
Digunakan untuk:
- Membandingkan nilai (Comparison Operators)
- Menggabungkan kondisi (Logical Operators)
- Mengontrol alur program berdasarkan logika tertentu
*/

echo "-------------------- PHP If Operators --------------------\n\n";

/* =======================================================
   1. Comparison Operators (Operator Perbandingan)
   ======================================================= */

/*
1. Mengecek apakah username cocok
   - Relevan untuk proses login sederhana.
*/
$username = "JohnDoe"; // Username dari form login
if ($username == "JohnDoe") { // Sama dengan
    echo "1. Hello, JohnDoe!\n"; // Output: Hello, JohnDoe!
}

echo "\n";

/*
2. Mengecek tipe data dan nilai
   - Digunakan untuk validasi ketat (misalnya saat membandingkan ID).
*/
$userID = 100; // ID user
if ($userID === 100) { // Identik (nilai dan tipe sama)
    echo "2. User ID is exactly 100.\n"; // Output: User ID is exactly 100.
}

echo "\n";

/*
3. Mengecek umur minimum untuk mendaftar
   - Cocok untuk syarat registrasi akun.
*/
$age = 17;
if ($age >= 18) { // Lebih besar atau sama dengan
    echo "3. You can register an account.\n";
} else {
    echo "3. You must be at least 18 years old.\n"; // Output: You must be at least 18 years old.
}

echo "\n";

/*
4. Mengecek harga produk lebih murah dari harga maksimum
   - Relevan untuk fitur filter harga di e-commerce.
*/
$productPrice = 45; // Harga produk
$maxPrice = 50; // Harga maksimum
if ($productPrice < $maxPrice) { // Lebih kecil
    echo "4. Product is within your budget.\n"; // Output: Product is within your budget.
}

echo "\n";

/*
5. Mengecek apakah dua email tidak sama
   - Digunakan untuk validasi konfirmasi email di form.
*/
$email = "emma.smith@example.com";
$confirmEmail = "emma.smith@exmaple.com"; // Salah ketik
if ($email != $confirmEmail) { // Tidak sama
    echo "5. Emails do not match.\n"; // Output: Emails do not match.
}

echo "\n";

/* =======================================================
   2. Logical Operators (Operator Logika)
   ======================================================= */

/*
6. Mengecek apakah user login DAN memiliki akses admin
   - Cocok untuk dashboard admin.
*/
$isLoggedIn = true;
$isAdmin = true;
if ($isLoggedIn && $isAdmin) { // DAN
    echo "6. Welcome to the admin dashboard.\n"; // Output: Welcome to the admin dashboard.
}

echo "\n";

/*
7. Mengecek apakah user login ATAU memiliki akses tamu
   - Berguna untuk mengizinkan akses terbatas.
*/
$isGuestAccess = true;
if ($isLoggedIn || $isGuestAccess) { // ATAU
    echo "7. You can view this page.\n"; // Output: You can view this page.
}

echo "\n";

/*
8. Mengecek keanggotaan premium eksklusif (XOR)
   - Hanya satu status yang boleh aktif, bukan keduanya.
*/
$hasPremium = true;
$hasTrial = false;
if ($hasPremium xor $hasTrial) { // XOR
    echo "8. Access granted to exclusive content.\n"; // Output: Access granted to exclusive content.
}

echo "\n";

/*
9. Mengecek jika email TIDAK kosong dan valid
   - Digunakan dalam form registrasi.
*/
$userEmail = "david.jones@example.com";
if (!empty($userEmail) && strpos($userEmail, "@") !== false) { // NOT + DAN
    echo "9. Email is valid: $userEmail\n"; // Output: Email is valid: david.jones@example.com
}

echo "\n";

/*
10. Validasi kompleks: User login DAN (admin ATAU editor)
    - Relevan untuk kontrol akses multi-level.
*/
$isEditor = false;
if ($isLoggedIn && ($isAdmin || $isEditor)) {
    echo "10. You have access to manage content.\n"; // Output: You have access to manage content.
}
