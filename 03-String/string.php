<?php

/*
String adalah tipe data dasar dalam PHP yang digunakan untuk menyimpan teks.
PHP menyediakan berbagai fungsi untuk bekerja dengan string seperti menghitung panjang,
menggabungkan, mencari, dan memodifikasi teks.
*/

echo "--------------------------------------------------- String Data Type ---------------------------------------------------" . "\n\n";

/*
1. Double or Single Quotes:
    - String dapat ditulis menggunakan tanda kutip tunggal (' ') atau ganda (" ").
    - Tanda kutip ganda mendukung interpolasi variabel, sedangkan kutip tunggal tidak.
*/

echo "1. Double or Single Quotes\n\n";

$name = "John Doe";

echo "Using double quotes: Hello, $name\n";     // Variabel akan ditampilkan nilainya
echo 'Using single quotes: Hello, $name' . "\n\n"; // Variabel tidak akan ditampilkan nilainya

/*
2. String Length:
    - Fungsi strlen() digunakan untuk menghitung jumlah karakter dalam string.
    - Sering digunakan dalam validasi input seperti password atau username.
*/

echo "2. String Length\n\n";

$password = "secret123";

echo "Password: $password\n";
echo "Length: " . strlen($password) . "\n\n";

/*
3. Word Count:
    - Fungsi str_word_count() digunakan untuk menghitung jumlah kata dalam string.
    - Cocok digunakan untuk membatasi input seperti komentar atau deskripsi.
*/

echo "3. Word Count\n\n";

$comment = "This is a great blog post!";
$wordCount = str_word_count($comment);

echo "Comment: $comment\n";
echo "Word count: $wordCount\n\n";

/*
4. Search for Text:
    - Fungsi strpos() digunakan untuk mencari posisi dari substring dalam string.
    - Jika teks ditemukan, fungsi akan mengembalikan posisi (indeks) karakter pertama.
    - Jika tidak ditemukan, fungsi mengembalikan false.
*/

echo "4. Search for Text\n\n";

$article = "Learn PHP for web development";
$keyword = "PHP";

echo "Article: $article\n";
echo "Searching for keyword: $keyword\n";

$position = strpos($article, $keyword);

if ($position !== false) {
    echo "Keyword found at position: $position\n\n";
} else {
    echo "Keyword not found\n\n";
}
