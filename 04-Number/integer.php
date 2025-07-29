<?php

/*
Tipe data integer digunakan untuk menyimpan bilangan bulat, baik positif maupun negatif, tanpa angka desimal.
Integer sering digunakan dalam pengembangan web untuk menghitung jumlah, ID, tahun, dan pagination.
*/

echo "--------------------------------------------------- Integer in PHP ---------------------------------------------------\n\n";

/*
1. Menyimpan angka sederhana dalam variabel
   - Digunakan untuk menyimpan data seperti umur atau jumlah item.
*/

echo "1. Basic Integer Variable\n\n";

$age = 25;
echo "Age: $age\n\n";

/*
2. Penjumlahan integer
   - Sering digunakan untuk perhitungan jumlah total, kuantitas, dll.
*/

echo "2. Integer Addition\n\n";

$quantity = 3;
$pricePerItem = 20000;
$totalPrice = $quantity * $pricePerItem;

echo "Total Price: Rp$totalPrice\n\n";

/*
3. Operasi aritmatika integer
   - Penjumlahan, pengurangan, perkalian, pembagian, dan modulus.
*/

echo "3. Integer Arithmetic\n\n";

$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "\n";
echo "Subtraction: " . ($a - $b) . "\n";
echo "Multiplication: " . ($a * $b) . "\n";
echo "Division: " . intdiv($a, $b) . "\n"; // Pembagian bilangan bulat
echo "Modulus: " . ($a % $b) . "\n\n";

/*
4. Mengecek apakah nilai adalah integer
   - Validasi input dari user atau API.
*/

echo "4. Integer Type Check\n\n";

$input = 100;
if (is_int($input)) {
    echo "The input is an integer.\n";
} else {
    echo "The input is NOT an integer.\n";
}
echo "\n";

/*
5. Menggunakan integer dalam logika kondisi
   - Sering digunakan untuk menentukan status, level akses, atau batas.
*/

echo "5. Integer in Conditional Logic\n\n";

$userRole = 1; // 1 = admin, 2 = editor, 3 = guest

if ($userRole === 1) {
    echo "Access granted: Admin Panel\n";
} elseif ($userRole === 2) {
    echo "Access granted: Editor Dashboard\n";
} else {
    echo "Access limited: Guest View\n";
}
echo "\n";

/*
6. Integer overflow (jika terlalu besar melebihi kapasitas)
   - PHP akan mengubahnya menjadi float secara otomatis.
*/

echo "6. Integer Overflow\n\n";

$bigNumber = 9223372036854775807; // batas maksimum pada sistem 64-bit
$overflow = $bigNumber + 1;

echo "Original: $bigNumber\n";
echo "After Overflow: $overflow\n";
echo "Type: " . gettype($overflow) . "\n\n";

/*
7. Contoh penggunaan integer pada pagination (fitur umum dalam web)
   - Digunakan untuk menentukan halaman aktif dan offset database.
*/

echo "7. Integer for Pagination\n\n";

$currentPage = 3;
$itemsPerPage = 10;
$offset = ($currentPage - 1) * $itemsPerPage;

echo "Current Page: $currentPage\n";
echo "Offset for SQL Query: $offset\n\n";
