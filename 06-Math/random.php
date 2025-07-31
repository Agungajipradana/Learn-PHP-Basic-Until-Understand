<?php

/*
PHP rand() Function
Fungsi rand() digunakan untuk menghasilkan angka acak.
Fitur ini sangat berguna dalam pengembangan web, seperti untuk kode OTP, token reset password, sistem undian, dan simulasi.
*/

echo "------------------------------ PHP rand() Function ------------------------------\n\n";

/*
1. Menghasilkan angka acak tanpa batas
   - Berguna untuk tes dasar dan eksperimen.
*/

echo "1. Angka acak (tanpa batas):\n";
echo rand() . "\n\n"; // Output: misalnya 847362

/*
2. Menghasilkan angka acak dalam rentang tertentu
   - Cocok untuk memilih angka dengan batas minimal dan maksimal.
*/

echo "2. Angka acak antara 1 dan 100:\n";
echo rand(1, 100) . "\n\n"; // Output: misalnya 42

/*
3. Simulasi kode OTP 4 digit
   - Digunakan untuk login 2FA, verifikasi email, dll.
*/

$otp = rand(1000, 9999);

echo "3. OTP (4 digit):\n";
echo $otp . "\n\n"; // Output: misalnya 5274

/*
4. Membuat token reset password sederhana (angka saja)
   - Digunakan dalam fitur reset password.
*/

$resetToken = rand(100000, 999999);

echo "4. Token reset password (6 digit):\n";
echo $resetToken . "\n\n"; // Output: misalnya 874521

/*
5. Memilih pemenang undian dari array peserta
   - Digunakan dalam sistem undian atau random giveaway.
*/

$participants = ["Alice", "Bob", "Charlie", "Diana", "Ethan"];
$winnerIndex = rand(0, count($participants) - 1);
$winner = $participants[$winnerIndex];

echo "5. Pemenang undian:\n";
echo $winner . "\n\n"; // Output: misalnya Bob

/*
6. Mengacak angka untuk CAPTCHA sederhana
   - Berguna dalam sistem form atau login untuk validasi manusia.
*/

$num1 = rand(1, 9);
$num2 = rand(1, 9);

echo "6. CAPTCHA: What is $num1 + $num2?\n";
echo "Jawaban: " . ($num1 + $num2) . "\n\n"; // Output: CAPTCHA dan jawabannya

/*
7. Simulasi sistem random diskon
   - Cocok untuk aplikasi e-commerce atau game dengan elemen kejutan.
*/

$minDiscount = 5;
$maxDiscount = 30;
$randomDiscount = rand($minDiscount, $maxDiscount);

echo "7. Diskon acak untuk pengguna:\n";
echo "$randomDiscount% off!\n\n"; // Output: misalnya 17% off
