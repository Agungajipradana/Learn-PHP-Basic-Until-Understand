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

Validasi dan Sanitasi Data
    1. Sanitasi: Membersihkan input agar aman (misalnya, mencegah XSS).
        Contoh: htmlspecialchars, filter_var.

    2. Validasi: Memastikan data sesuai format yang diharapkan.
        Contoh: filter_var untuk email.
*/

// 1. Form Handling dengan Metode POST

// Mengecek apakah metode request yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form yang dikirimkan menggunakan metode POST

    // Mengambil input nama dari form dan melakukan sanitasi dengan fungsi htmlspecialchars()
    // Fungsi htmlspecialchars mengkonversi karakter khusus menjadi entitas HTML untuk mencegah serangan XSS
    $name = htmlspecialchars($_POST['name']);

    // Mengambil input email dari form dan melakukan sanitasi menggunakan filter FILTER_SANITIZE_EMAIL
    // Filter ini menghapus karakter-karakter yang tidak valid dalam alamat email
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Mengambil input password dari form tanpa melakukan sanitasi
    // Harus hati-hati, password sebaiknya tidak ditampilkan tanpa di-hash atau disimpan dengan aman
    $password = $_POST['password'];

    // Validasi format email menggunakan filter FILTER_VALIDATE_EMAIL
    // Jika format email tidak valid, tampilkan pesan kesalahan dan hentikan eksekusi dengan exit
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit; // Menghentikan eksekusi skrip jika email tidak valid
    }

    // Menampilkan hasil pengolahan data setelah validasi

    // Menampilkan judul pendaftaran berhasil
    echo "<h1>Registration Success</h1>";

    // Menampilkan nama yang dimasukkan oleh pengguna
    echo "Name: $name<br>";

    // Menampilkan email yang dimasukkan oleh pengguna setelah sanitasi
    echo "Email: $email<br>";

    // Menampilkan password yang dimasukkan oleh pengguna, tetapi diubah menjadi tanda bintang untuk keamanan
    // Fungsi str_repeat digunakan untuk mengganti setiap karakter password dengan tanda bintang (*)
    echo "Password: " . str_repeat("*", strlen($password)) . "<br>";
}
