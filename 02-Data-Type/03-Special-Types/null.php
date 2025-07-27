<?php

/*
Null adalah salah satu tipe data skalar dalam PHP yang merepresentasikan **tidak adanya nilai** atau **nilai kosong**.

Sebuah variabel bertipe null jika:
    1. Ditetapkan secara eksplisit dengan nilai `null`
    2. Belum pernah diberi nilai
    3. Sudah dihapus dengan fungsi `unset()`

Ciri-ciri Tipe Data Null:
    - Hanya memiliki satu nilai: `null`
    - Sering digunakan untuk menginisialisasi variabel kosong
    - Dapat digunakan untuk mengecek keberadaan atau ketiadaan nilai
*/

echo "------------------------------------------- Contoh Penggunaan Null --------------------------------------" . "\n\n";

/*
1. Menetapkan Nilai Null secara Eksplisit
*/

echo "1. Menetapkan Nilai Null secara Eksplisit\n\n";

$userName = null;

if (is_null($userName)) {
    echo "Variabel \$userName bernilai null\n"; // Output: Variabel $userName bernilai null
} else {
    echo "Variabel \$userName memiliki nilai\n";
}

echo "\n";

/*
2. Variabel Belum Diisi Nilai
*/

echo "2. Variabel Belum Diisi Nilai\n\n";

unset($userEmail); // menghapus variabel

if (isset($userEmail)) {
    echo "Variabel \$userEmail tersedia\n";
} else {
    echo "Variabel \$userEmail tidak tersedia atau null\n"; // Output
}

echo "\n";

/*
3. Menghapus Variabel dengan unset()
*/

echo "3. Menghapus Variabel dengan unset()\n\n";

$productName = "Laptop";
unset($productName); // menghapus variabel

if (isset($productName)) {
    echo "Variabel \$productName masih ada\n";
} else {
    echo "Variabel \$productName telah dihapus\n"; // Output
}

echo "\n";

/*
4. Null Coalescing Operator (??)
*/

echo "4. Null Coalescing Operator (??)\n\n";

$defaultUsername = null;
$finalUsername = $defaultUsername ?? "Guest";

echo "Nama pengguna akhir: $finalUsername\n"; // Output: Guest
