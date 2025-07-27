<?php
// Mengecek apakah form telah disubmit dengan metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Cek apakah file telah dipilih dan tidak ada error pada proses upload
    // $_FILES['fileToUpload'] adalah array yang berisi informasi tentang file yang di-upload
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {

        // Menentukan direktori tempat file akan disimpan
        $target_dir = "uploads/"; // Folder 'uploads' di server
        // Menentukan nama file lengkap dengan path tujuan
        // basename() digunakan untuk mendapatkan nama file saja, tanpa path
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        // Memindahkan file yang di-upload dari lokasi sementara ke direktori tujuan
        // $_FILES["fileToUpload"]["tmp_name"] berisi path sementara file di server
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Jika file berhasil dipindahkan, tampilkan pesan sukses
            echo "File uploaded successfully: " . $target_file;
        } else {
            // Jika file gagal dipindahkan, tampilkan pesan kesalahan
            echo "File upload failed.";
        }
    } else {
        // Jika tidak ada file yang dipilih atau terjadi error pada upload, tampilkan pesan kesalahan
        echo "No file selected or file upload error.";
    }
}
