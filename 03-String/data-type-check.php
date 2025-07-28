<?php

/*
Pengecekan tipe data sangat penting dalam pengembangan web untuk memastikan
bahwa data yang diterima atau diproses sesuai dengan yang diharapkan.
PHP menyediakan fungsi seperti gettype() dan var_dump() untuk melihat tipe dan detail nilai.
*/

echo "--------------------------------------------------- Data Type Check ---------------------------------------------------" . "\n\n";

/*
1. gettype() – Menampilkan tipe data dasar
    - Cocok digunakan untuk validasi sederhana, seperti input dari form.
*/

echo "1. Menggunakan gettype()\n\n";

$name = "John Doe"; // string
echo "Value: $name\n";
echo "Type: " . gettype($name) . "\n\n";

/*
2. var_dump() – Menampilkan tipe dan isi secara detail
    - Cocok untuk debugging dan melihat panjang atau struktur nilai.
*/

echo "2. Menggunakan var_dump()\n\n";

$age = 30;
echo "Value: ";
var_dump($age); // int(30)
echo "\n";

/*
3. Pengecekan nilai kosong atau tidak menggunakan empty()
    - Berguna saat memproses input user seperti username, komentar, atau field lainnya.
*/

echo "3. Cek kosong dengan empty()\n\n";

$comment = "";
if (empty($comment)) {
    echo "Comment is empty\n";
} else {
    echo "Comment: $comment\n";
}
echo "\n";

/*
4. Pengecekan tipe spesifik dengan is_string(), is_int(), dll
    - Digunakan untuk validasi manual sebelum menyimpan data atau menjalankan proses.
*/

echo "4. Pengecekan Tipe Spesifik\n\n";

$price = "1000";
if (is_string($price)) {
    echo "Price is a string\n";
}

$stock = 50;
if (is_int($stock)) {
    echo "Stock is an integer\n";
}
echo "\n";

/*
5. Pengecekan tipe kompleks (array, object, null)
    - Sering digunakan saat menerima data dari API atau database.
*/

echo "5. Pengecekan Tipe Kompleks\n\n";

$user = [
    "name" => "Alice",
    "email" => "alice@example.com"
];

echo "User data (array):\n";
var_dump($user);
echo "\n";

$data = null;
echo "Null value:\n";
var_dump($data);
echo "\n";
