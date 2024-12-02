<?php
/*
Form Handling dalam PHP adalah proses menerima, memproses, dan memvalidasi data yang dikirimkan melalui formulir HTML menggunakan metode HTTP seperti GET atau POST. PHP memungkinkan pengembang untuk menangani data yang diinputkan oleh pengguna, memprosesnya, dan mengembalikan hasil yang sesuai.

Metode Pengiriman Formulir
    1. GET: Data dikirim melalui URL dan dapat dilihat oleh pengguna.
        - Cocok untuk data yang tidak sensitif (misalnya, pencarian).

    2. POST: Data dikirim melalui body request.
        - Cocok untuk data sensitif seperti login atau formulir pendaftaran.

Langkah-Langkah Form Handling
    1. Buat formulir HTML.
    2. Kirim data melalui metode GET atau POST.
    3. Tangkap data di PHP menggunakan superglobal $_GET atau $_POST.
    4. Validasi data.
    5. Proses data (misalnya, simpan ke database, atau tampilkan di layar).
*/

// Mengecek apakah parameter 'query' ada dalam URL (menggunakan metode GET)
if (isset($_GET['query'])) {
    // Mengambil nilai dari parameter 'query' dan menghindari potensi serangan XSS (Cross-Site Scripting) dengan fungsi htmlspecialchars()
    $query = htmlspecialchars($_GET['query']);

    // Menampilkan hasil pencarian dengan menampilkan nilai query yang telah di-escape agar aman
    echo "Search Results for: $query";
}
