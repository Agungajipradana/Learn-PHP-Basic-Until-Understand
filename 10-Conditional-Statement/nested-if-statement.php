<?php

/*
PHP Nested If Statement
Digunakan untuk:
- Mengecek beberapa kondisi secara berurutan
- Memungkinkan pengambilan keputusan lebih detail
- Sering digunakan untuk validasi data & logika kompleks
*/

echo "-------------------- PHP Nested If Statement --------------------\n\n";

/*
1. Mengecek status login sederhana
   - Relate ke halaman dashboard user
*/
$userLoggedIn = true;
$userName = "John";

if ($userLoggedIn) {
    if ($userName === "John") {
        echo "1. Welcome back, John!\n";
        // Output: Welcome back, John!
    }
}

echo "\n";

/*
2. Mengecek role user dalam sistem
   - Untuk membedakan akses admin dan user biasa
*/
$userRole = "admin";
$userActive = true;

if ($userActive) {
    if ($userRole === "admin") {
        echo "2. Admin access granted.\n";
        // Output: Admin access granted.
    }
}

echo "\n";

/*
3. Validasi input form pendaftaran
   - Mengecek apakah nama dan email terisi
*/
$formName = "Michael";
$formEmail = "michael@example.com";

if (!empty($formName)) {
    if (!empty($formEmail)) {
        echo "3. Registration successful for $formName.\n";
        // Output: Registration successful for Michael.
    }
}

echo "\n";

/*
4. Validasi stok produk dan kategori
   - Digunakan di halaman e-commerce
*/
$productStock = 5;
$productCategory = "Electronics";

if ($productStock > 0) {
    if ($productCategory === "Electronics") {
        echo "4. Electronics product available in stock.\n";
        // Output: Electronics product available in stock.
    }
}

echo "\n";

/*
5. Mengecek login + role + status aktif
   - Untuk keamanan halaman admin
*/
$isLoggedIn = true;
$userRole = "editor";
$isActive = true;

if ($isLoggedIn) {
    if ($isActive) {
        if ($userRole === "admin") {
            echo "5. Admin dashboard loaded.\n";
            // Output (saat role bukan admin): (tidak ada output)
        } else {
            echo "5. You are logged in but not an admin.\n";
            // Output: You are logged in but not an admin.
        }
    }
}

echo "\n";

/*
6. Cek login, role, dan hak akses menu
   - Studi kasus: multi-level menu di aplikasi
*/
$isLoggedIn = true;
$userRole = "admin";
$canAccessReports = true;

if ($isLoggedIn) {
    if ($userRole === "admin") {
        if ($canAccessReports) {
            echo "6. Admin reports loaded.\n";
            // Output: Admin reports loaded.
        } else {
            echo "6. Admin logged in but cannot access reports.\n";
        }
    } else {
        echo "6. Access denied for non-admin user.\n";
    }
}

echo "\n";

/*
7. Cek login, role, status aktif, dan lokasi user
   - Digunakan untuk membatasi akses berdasarkan negara
*/
$isLoggedIn = true;
$userRole = "admin";
$isActive = true;
$userCountry = "United States";

if ($isLoggedIn) {
    if ($isActive) {
        if ($userRole === "admin") {
            if ($userCountry === "United States") {
                echo "7. Access granted for US admin.\n";
                // Output: Access granted for US admin.
            } else {
                echo "7. Admin role detected but access denied outside US.\n";
            }
        }
    }
}
