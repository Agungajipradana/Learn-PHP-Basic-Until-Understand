<?php

/*
Resource adalah tipe data khusus dalam PHP yang merepresentasikan referensi ke sumber daya eksternal.

Contoh sumber daya eksternal:
    - Koneksi database
    - File yang dibuka
    - Koneksi cURL
    - Stream

Tipe data resource **tidak bisa dibaca langsung isinya**, karena hanya menyimpan identitas atau pointer ke sumber daya eksternal. Resource biasanya digunakan bersama fungsi PHP bawaan (seperti fopen, curl_init, dsb).

Ciri-ciri Tipe Data Resource:
    1. Tidak berisi data langsung, melainkan referensi ke sumber daya.
    2. Harus ditangani dengan benar (misalnya ditutup dengan fclose atau curl_close).
    3. Diperlukan untuk interaksi dengan sistem atau layanan luar.
*/

echo "------------------------------------------- Contoh Penggunaan Resource --------------------------------------" . "\n\n";

/*
1. Resource dari File (fopen)
*/

echo "1. Resource dari File (fopen)\n\n";

$filePath = "example.txt";

// Membuat file dummy jika belum ada
if (!file_exists($filePath)) {
    file_put_contents($filePath, "This is a sample text.\n");
}

$fileHandle = fopen($filePath, "r");

if (is_resource($fileHandle)) {
    echo "Berhasil membuka file: $filePath\n";
    $content = fread($fileHandle, filesize($filePath));
    echo "Isi file:\n$content\n";
    fclose($fileHandle); // Wajib ditutup
} else {
    echo "Gagal membuka file.\n";
}

echo "\n";

/*
2. Resource dari cURL
*/

echo "2. Resource dari cURL\n\n";

$curlHandle = curl_init("https://example.com");

if (is_resource($curlHandle)) {
    echo "Resource cURL berhasil dibuat.\n";
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curlHandle);
    echo "Respons curl (potongan):\n" . substr($response, 0, 100) . "...\n";
    curl_close($curlHandle); // Tutup resource
} else {
    echo "Gagal membuat resource cURL.\n";
}

echo "\n";

/*
3. Mengecek Tipe Data Resource
*/

echo "3. Mengecek Tipe Resource\n\n";

$fileHandleCheck = fopen($filePath, "r");
echo "Tipe resource: " . get_resource_type($fileHandleCheck) . "\n"; // Output: stream
fclose($fileHandleCheck);
