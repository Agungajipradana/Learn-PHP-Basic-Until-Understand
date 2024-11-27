<?php

/*
Boolean adalah salah satu tipe data primitif dalam PHP yang hanya memiliki dua nilai, yaitu:

    - true (benar)
    - false (salah)

Tipe data ini sering digunakan untuk menentukan logika dan kondisi dalam program, seperti dalam pernyataan if, loop, atau ekspresi logika. Nilai boolean dapat dihasilkan dari operasi perbandingan, logika, atau langsung ditentukan secara eksplisit.

Ciri-ciri Tipe Data Boolean
    1. Nilai Sederhana: Hanya memiliki dua kemungkinan nilai (true atau false).
    2. Tidak Case-sensitive: PHP mengenali true dan false tanpa memedulikan huruf besar/kecil (misalnya, True atau FALSE tetap valid, tetapi tidak direkomendasikan).
    3. Digunakan pada Logika Program: Boolean sering digunakan untuk mengontrol alur program berdasarkan logika tertentu.
*/

echo "------------------------------------------- Contoh Penggunaan Boolean --------------------------------------" . "\n\n";

/*
1. Mendefinisikan Boolean secara Eksplisit
*/

echo  "1. Mendefinisikan Boolean secara Eksplisit" . "\n\n";

$isTrue = true; // Mendefinisikan boolean dengan nilai true
$isFalse = false; // Mendefinisikan boolean dengan nilai false

echo "Nilai \$isTrue: " . ($isTrue ? "true" : "false") . "\n\n"; // Output: true

echo "Nilai \$isFalse: " . ($isFalse ? "true" : "false") . "\n\n"; // Output: false


/*
2. Boolean dari Operasi Perbandingan
*/

echo  "2. Boolean dari Operasi Perbandingan" . "\n\n";

$a = 10;
$b = 20;

$isGreater = $a > $b; // false, karena 10 tidak lebih besar dari 20
$isEqual = $a == $b;  // false, karena 10 tidak sama dengan 20

echo "Apakah \$a lebih besar dari \$b? : " . ($isGreater ? "true" : "false") . "\n\n"; // Output: false

echo "Apakah \$a sama dengan \$b? : " . ($isEqual ? "true" : "false") . "\n\n";// Output: false

/*
3. Boolean dalam Struktur Kendali
*/

echo  "3. Boolean dalam Struktur Kendali" . "\n\n";

$isLoggedIn = true;

if ($isLoggedIn) {
    echo "Selamat datang, Anda telah login!\n"; // Output: Selamat datang, Anda telah login!
} else {
    echo "Silakan login terlebih dahulu.\n";
}
echo  "\n";

/*
4. Konversi Tipe Data ke Boolean PHP secara otomatis mengonversi tipe data tertentu ke boolean dalam kondisi berikut:

    - Nilai yang dievaluasi sebagai false:
        - 0 (integer 0)
        - 0.0 (floating-point 0)
        - "" (string kosong)
        - "0" (string "0")
        - null (nilai null)
        - Array kosong []
        - Objek tanpa properti

    - Selain itu dievaluasi sebagai true 
*/
echo  "4. Konversi Tipe Data ke Boolean PHP secara otomatis" . "\n\n";

$var1 = 0;
$var2 = "Hello";
$var3 = "";

echo "Apakah \$var1 true? " . ($var1 ? "true" : "false") . "\n\n"; // Output: false

echo "Apakah \$var2 true? " . ($var2 ? "true" : "false") . "\n\n"; // Output: true

echo "Apakah \$var3 true? " . ($var3 ? "true" : "false") . "\n\n";// Output: false
