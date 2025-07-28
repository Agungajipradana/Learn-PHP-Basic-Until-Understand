<?php

/*
String slicing (pemotongan string) di PHP dilakukan dengan fungsi substr().
Fungsi ini sangat berguna dalam pengembangan web, seperti memotong teks, mengambil bagian dari slug URL,
atau menampilkan potongan konten.
*/

echo "--------------------------------------------------- String Slicing (substr) ---------------------------------------------------" . "\n\n";

/*
1. Slice to the End:
    - Mengambil substring dari indeks tertentu hingga akhir string.
    - Contoh: mengekstrak username dari email.
*/

echo "1. Slice to the End\n\n";

$email = "john.doe@example.com";
$username = substr($email, 0, strpos($email, "@"));

echo "Email: $email\n";
echo "Username extracted: $username\n\n";

/*
2. Slice From the End:
    - Mengambil beberapa karakter terakhir dari string.
    - Cocok untuk mengambil extension file, kode promo, atau tahun di akhir teks.
*/

echo "2. Slice From the End\n\n";

$filename = "document_2025.pdf";
$extension = substr($filename, -3);

echo "Filename: $filename\n";
echo "File extension: $extension\n\n";

/*
3. Negative Length:
    - Mengambil sebagian string dari awal, lalu memotong beberapa karakter terakhir.
    - Berguna jika ingin menghapus suffix/prefix tanpa fungsi replace.
*/

echo "3. Negative Length\n\n";

$title = "Dashboard - Admin Panel";
$cleanTitle = substr($title, 0, -13); // Menghapus " - Admin Panel"

echo "Original Title: $title\n";
echo "Cleaned Title: $cleanTitle\n\n";
