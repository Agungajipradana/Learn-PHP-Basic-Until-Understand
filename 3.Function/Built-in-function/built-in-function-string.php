<?php
/*
Built-in Function String di PHP
Built-in function string adalah fungsi bawaan dalam PHP yang dirancang untuk memanipulasi dan memproses string. PHP menyediakan berbagai fungsi string untuk keperluan seperti menghitung panjang string, memotong string, mengubah huruf besar/kecil, mencari substring, dan banyak lagi.
*/

echo "--------------------------------------------------- Fungsi Built-in String yang Sering Digunakan ---------------------------------------------------" . "\n\n";

/*
1. strlen()
    - Mengembalikan panjang string (jumlah karakter dalam string).
*/

echo "1. strlen() : Mengembalikan panjang string (jumlah karakter dalam string)." . "\n\n";

$string = "Halo World!";
echo "Berapa jumlah karakter dalam string pada \$string: " . strlen($string) . "\n\n"; // Output: 11

/*
2. str_word_count()
    - Menghitung jumlah kata dalam string.
*/

echo "2. str_word_count() : Menghitung jumlah kata dalam string." . "\n\n";

$string = "Selamat belajar PHP";
echo "Menghitung jumlah kata dalam \$string: " . str_word_count($string) . "\n\n"; // Output: 3

/*
3. strrev()
    - Membalikkan string.
*/

echo "3. strrev() : Membalikkan string." . "\n\n";

$string = "String";
echo "Membalikkan \$string: " . strrev($string) . "\n\n"; // Output: gnirtS


/*
4. strpos()
    - Mencari posisi pertama dari sebuah substring dalam string (case-sensitive).
    - Mengembalikan posisi indeks (dimulai dari 0) atau false jika tidak ditemukan.
*/

echo "4. strpos() : Mencari posisi pertama dari sebuah substring dalam string (case-sensitive)." . "\n\n";

$string = "Halo World!";
echo "Mencari posisi pertama dari sebuah substring dalam \$string: " . strpos($string, "World") . "\n\n"; // Output: 5

/*
5. str_replace()
    - Mengganti substring dalam string.
*/

echo "5. str_replace() : Mengganti substring dalam string." . "\n\n";

$string = "Halo World!";
echo "Mengganti substring dalam \$string: " . str_replace("World", "PHP", $string) . "\n\n"; // Output: Halo PHP!

/*
6. substr()
    - Mengambil sebagian string berdasarkan indeks awal dan panjang tertentu.
*/

echo "6. substr() : Mengambil sebagian string berdasarkan indeks awal dan panjang tertentu." . "\n\n";

$string = "Halo World!";
echo "Mengambil sebagian string berdasarkan indeks awal dan panjang tertentu dalam \$string: " . substr($string, 5, 5) . "\n\n"; // Output: World

/*
7. strtolower()
    - Mengubah string menjadi huruf kecil.
*/

echo "7. strtolower() : Mengubah string menjadi huruf kecil." . "\n\n";

$string = "HALO WORLD!";
echo "Mengubah \$string menjadi huruf kecil: " . strtolower($string) . "\n\n"; // Output: halo world!

/*
8. strtoupper()
    - Mengubah string menjadi huruf besar.
*/

echo "8. strtoupper() : Mengubah string menjadi huruf besar." . "\n\n";

$string = "halo world!";
echo "Mengubah \$string menjadi huruf besar: " . strtoupper($string) . "\n\n"; // Output: HALO WORLD!

/*
9. ucfirst()
    - Mengubah huruf pertama dalam string menjadi huruf besar.
*/

echo "9. ucfirst() : Mengubah huruf pertama dalam string menjadi huruf besar." . "\n\n";

$string = "halo world!";
echo "Mengubah huruf pertama dalam \$string menjadi huruf besar: " . ucfirst($string) . "\n\n"; // Output: Halo world!

/*
10. ucwords()
    - Mengubah huruf pertama dari setiap kata menjadi huruf besar.
*/

echo "10. ucwords() : Mengubah huruf pertama dari setiap kata menjadi huruf besar." . "\n\n";

$string = "halo world php!";
echo "Mengubah huruf pertama dalam \$string dari setiap kata menjadi huruf besar: " . ucwords($string) . "\n\n"; // Output: Halo World Php!

/*
11. trim()
    - Menghapus spasi atau karakter tertentu dari awal dan akhir string.
*/

echo "11. trim() : Menghapus spasi atau karakter tertentu dari awal dan akhir string." . "\n\n";

$string = "  Halo World!  ";
echo "Menghapus spasi atau karakter tertentu dari awal dan akhir \$string: " . trim($string) . "\n\n"; // Output: Halo World!

/*
12. explode()
    - Memecah string menjadi array berdasarkan delimiter.
*/

echo "12. explode() : Memecah string menjadi array berdasarkan delimiter." . "\n\n";

$string = "Halo,World,PHP";
$array = explode(",", $string);
print_r($array); // Output: Array ( [0] => Halo [1] => World [2] => PHP )
echo "\n\n";

/*
13. implode()
    - Menggabungkan elemen array menjadi string dengan delimiter.
*/

echo "13. implode() : Menggabungkan elemen array menjadi string dengan delimiter." . "\n\n";

$array = ["Halo", "World", "PHP"];
echo "Menggabungkan elemen array menjadi \$string dengan delimiter: " . implode(" ", $array) . "\n\n"; // Output: Halo World PHP

/*
14. str_repeat()
    - Mengulang string sebanyak jumlah yang diinginkan.
*/

echo "14. str_repeat() : Mengulang string sebanyak jumlah yang diinginkan." . "\n\n";

$string = "PHP ";
echo "Mengulang \$string sebanyak jumlah yang diinginkan: " . str_repeat($string, 3) . "\n\n"; // Output: PHP PHP PHP

/*
15. htmlspecialchars()
    - Mengonversi karakter spesial dalam HTML menjadi entitas HTML untuk mencegah XSS.
*/

echo "15. htmlspecialchars() : Mengonversi karakter spesial dalam HTML menjadi entitas HTML untuk mencegah XSS." . "\n\n";

$string = "<h1>Halo World</h1>";
echo"Mengonversi karakter spesial dalam HTML menjadi entitas HTML untuk mencegah XSS." . htmlspecialchars($string) . "\n\n"; // Output: &lt;h1&gt;Halo World&lt;/h1&gt;

/* Contoh Program Lengkap */
echo "--------------------------------------------------- Contoh Program Lengkap ---------------------------------------------------" . "\n\n";

$string = "Halo, World PHP!"; // String asli

// Menghitung panjang string
echo "Panjang String: " . strlen($string) . "\n\n";

// Menghitung jumlah kata
echo "Jumlah Kata: " . str_word_count($string) . "\n\n";

// Membalikkan string
echo "String Dibalik: " . strrev($string) . "\n\n";

// Mencari substring
echo "Posisi 'World': " . strpos($string, "World") . "\n\n";

// Mengganti substring
echo "Ganti 'PHP' dengan 'Program': " . str_replace("PHP", "Program", $string) . "\n\n";

// Mengambil sebagian string
echo "Substring (5-10): " . substr($string, 5, 5) . "\n\n";

// Mengubah huruf kecil
echo "Huruf Kecil: " . strtolower($string) . "\n\n";

// Mengubah huruf besar
echo "Huruf Besar: " . strtoupper($string) . "\n\n";

// Huruf pertama menjadi besar
echo "Huruf Pertama Besar: " . ucfirst(strtolower($string)) . "\n\n";

// Huruf pertama setiap kata menjadi besar
echo "Huruf Pertama Setiap Kata Besar: " . ucwords(strtolower($string)) . "\n\n";

// Menghapus spasi
echo "Tanpa Spasi: " . trim("   $string   ") . "\n\n";

// Memecah string menjadi array
$array = explode(" ", $string);
echo "Array dari String: ";
print_r($array);
echo "\n";

// Menggabungkan array menjadi string
echo "String dari Array: " . implode(" | ", $array) . "\n\n";

// Mengulang string
echo "Ulang String 3x: " . str_repeat($string, 3) . "\n\n";

// Mengonversi karakter spesial
echo "Karakter HTML: " . htmlspecialchars("<h1>$string</h1>") . "\n\n";
