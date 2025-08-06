<?php

/*
PHP Logical Operators
Digunakan untuk menggabungkan dua atau lebih ekspresi kondisi boolean.
Digunakan untuk:
- Validasi form
- Kontrol login
- Otorisasi akses user
- Sistem pencarian dan filter

Operator:
- and / &&
- or / ||
- xor
- !
*/

echo "-------------------- PHP Logical Operators --------------------\n\n";

/*
1. Operator AND (&&)
   - Kedua kondisi harus true.
   - Cocok untuk validasi login user (email dan password harus cocok).
*/

$emailValid = true;   // Email yang dimasukkan valid
$passwordCorrect = true; // Password cocok
$canLogin = $emailValid && $passwordCorrect;
var_dump($canLogin); // Output: true

echo "\n";

/*
2. Operator OR (||)
   - Salah satu kondisi harus true.
   - Digunakan untuk akses fitur tertentu: login via email ATAU username.
*/

$loginWithEmail = false;
$loginWithUsername = true;
$accessGranted = $loginWithEmail || $loginWithUsername;
var_dump($accessGranted); // Output: true

echo "\n";

/*
3. Operator NOT (!)
   - Membalik nilai boolean.
   - Digunakan untuk menolak user yang belum verifikasi email.
*/

$isVerified = false; // Belum verifikasi
var_dump(!$isVerified); // Output: true (berarti belum bisa lanjut)

echo "\n";

/*
4. Operator XOR
   - True jika hanya salah satu true (tidak keduanya).
   - Cocok untuk pilihan tunggal: hanya boleh pilih salah satu opsi promo.
*/

$promoA = true;
$promoB = false;
var_dump($promoA xor $promoB); // Output: true

$promoA = true;
$promoB = true;
var_dump($promoA xor $promoB); // Output: false

echo "\n";

/*
5. Operator AND versi kata (and)
   - Sama seperti && tetapi dengan prioritas yang lebih rendah.
   - Digunakan saat ingin kombinasi logika dan penugasan.
*/

$isAdmin = true;
$isLoggedIn = true;
$allowAccess = false;

$allowAccess = $isAdmin and $isLoggedIn; // Salah! Prioritas menyebabkan error logika
var_dump($allowAccess); // Output: true (tapi ini karena ($allowAccess = $isAdmin) duluan)

$allowAccess = ($isAdmin and $isLoggedIn); // Perbaikan dengan kurung
var_dump($allowAccess); // Output: true

echo "\n";

/*
6. Operator OR versi kata (or)
   - Sama seperti || tapi dengan prioritas lebih rendah.
   - Bisa berbahaya jika digunakan tanpa tanda kurung pada penugasan.
*/

$isMember = false;
$hasCoupon = true;
$discountGranted = false;

$discountGranted = $isMember or $hasCoupon; // Salah! $discountGranted hanya dapat $isMember
var_dump($discountGranted); // Output: false

$discountGranted = ($isMember or $hasCoupon); // Perbaiki dengan kurung
var_dump($discountGranted); // Output: true
