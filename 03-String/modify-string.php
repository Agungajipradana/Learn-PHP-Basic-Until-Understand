<?php

/*
Fungsi string di PHP memungkinkan kita untuk memodifikasi teks sesuai kebutuhan.
Contoh-contoh berikut disusun dari yang paling dasar hingga yang lebih kompleks dan aplikatif dalam pengembangan web.
*/

echo "--------------------------------------------------- Modify String ---------------------------------------------------" . "\n\n";

/*
1. strtoupper() – Convert to Uppercase:
    - Mengubah semua huruf dalam string menjadi huruf kapital.
    - Umum digunakan untuk menstandarisasi input (seperti kode kupon).
*/

echo "1. Convert to Uppercase\n\n";

$code = "promo2025";
echo "Original: $code\n";
echo "Uppercase: " . strtoupper($code) . "\n\n";

/*
2. strtolower() – Convert to Lowercase:
    - Mengubah semua huruf dalam string menjadi huruf kecil.
    - Umum digunakan untuk validasi email (case-insensitive).
*/

echo "2. Convert to Lowercase\n\n";

$email = "USER@EXAMPLE.COM";
echo "Original: $email\n";
echo "Lowercase: " . strtolower($email) . "\n\n";

/*
3. trim() – Remove Whitespace:
    - Menghapus spasi di awal dan akhir string.
    - Berguna saat membersihkan input dari form.
*/

echo "3. Remove Whitespace\n\n";

$username = "   johndoe   ";
echo "Original: '$username'\n";
echo "Trimmed: '" . trim($username) . "'\n\n";

/*
4. str_replace() – Replace String:
    - Mengganti bagian dari string dengan string lain.
    - Cocok untuk mengganti placeholder atau sanitasi kata.
*/

echo "4. Replace String\n\n";

$content = "Welcome NAME, enjoy your visit!";
$updatedContent = str_replace("NAME", "John Doe", $content);

echo "Before: $content\n";
echo "After: $updatedContent\n\n";

/*
5. strrev() – Reverse String:
    - Membalik urutan karakter dalam string.
    - Bisa digunakan untuk efek visual atau logika tertentu seperti membalik kode.
*/

echo "5. Reverse String\n\n";

$text = "dashboard";
echo "Original: $text\n";
echo "Reversed: " . strrev($text) . "\n\n";

/*
6. explode() – Convert String to Array:
    - Memecah string menjadi array berdasarkan pemisah tertentu.
    - Umum digunakan saat menerima data CSV, tag dari input, atau parsing URL.
*/

echo "6. Convert String to Array\n\n";

$tags = "php,html,css,javascript";
$tagArray = explode(",", $tags);

echo "Original: $tags\n";
echo "Array Result:\n";

foreach ($tagArray as $tag) {
    echo "- $tag\n";
}

echo "\n";
