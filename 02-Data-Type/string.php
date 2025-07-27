<?php

/*
String adalah tipe data dalam PHP yang digunakan untuk menyimpan teks, yaitu kumpulan karakter. String bisa berupa teks sederhana, angka, simbol, atau kombinasi dari semuanya. Dalam PHP, string dapat dideklarasikan menggunakan tanda kutip tunggal (') atau tanda kutip ganda (").

*/

echo "--------------------------------------------------- Membuat String  ---------------------------------------------------" . "\n\n";

/*
1. Menggunakan Tanda Kutip Tunggal ('):
    - String ditulis di antara tanda kutip tunggal.
    - Tanda kutip tunggal tidak memproses escape sequences (seperti \n) kecuali \' (untuk tanda kutip tunggal) dan \\ (untuk backslash).
*/

echo "1. Menggunakan Tanda Kutip Tunggal (')" . "\n\n";

$string1 = 'Ini adalah string dengan tanda kutip tunggal' . "\n\n";
echo ($string1);
echo "\n";


/*
2. Menggunakan Tanda Kutip Ganda ("):
    - String ditulis di antara tanda kutip ganda.
    - Mendukung escape sequences seperti \n (baris baru), \t (tab), dan memungkinkan interpolasi variabel.
*/

echo "2. Menggunakan Tanda Kutip Ganda" . "\n\n";

$name = "John";
$string2 = "Halo, $name! Selamat datang.";
echo ($string2) . "\n\n";

/*
3. Menggunakan Heredoc (<<<):
    - Digunakan untuk membuat string multi-baris dengan format yang lebih mudah dibaca.
    - Mendukung interpolasi variabel.
*/

echo "3. Menggunakan Heredoc (<<<)" . "\n\n";

$name = "John";
$string3 = <<<TEXT
Halo, $name!
Ini adalah contoh string multi-baris
menggunakan sintaks Heredoc.
TEXT;
echo ($string3) . "\n\n";

/*
4. Menggunakan Nowdoc (<<<'):
    - Mirip dengan Heredoc, tetapi tidak memproses variabel atau escape sequences.
    - Digunakan untuk string literal yang tidak berubah.
*/

echo "4. Menggunakan Nowdoc (<<<')" . "\n\n";

$string4 = <<<'TEXT'
Ini adalah contoh string multi-baris
menggunakan sintaks Nowdoc.
Tidak ada interpolasi variabel.
TEXT;
echo ($string4) . "\n\n";
