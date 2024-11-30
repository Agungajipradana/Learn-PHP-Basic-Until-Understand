<?php

/*
Control structures pada PHP adalah blok kode yang digunakan untuk mengontrol alur eksekusi program berdasarkan kondisi tertentu atau pola perulangan. Dengan control structures, kita dapat menentukan apakah suatu bagian kode harus dijalankan atau dilewati.

Control structures pada PHP terdiri dari:

    1. Conditional Statements: Untuk pengambilan keputusan berdasarkan kondisi tertentu.
    2. Looping Structures: Untuk menjalankan blok kode secara berulang hingga kondisi tertentu terpenuhi.
*/

echo "-------------------- Jenis Control Structures (2. Looping Structures) --------------------" . "\n\n";

/*
a. For Loop

    - Digunakan untuk perulangan dengan jumlah iterasi yang pasti.
*/

echo "a. For Loop: Digunakan untuk perulangan dengan jumlah iterasi yang pasti." . "\n\n";

for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i\n";
}

echo "\n\n";

/*
b. While Loop

    - Digunakan untuk perulangan berdasarkan kondisi.
*/

echo "b. While Loop: Digunakan untuk perulangan berdasarkan kondisi." . "\n\n";

$i = 1;
while ($i <= 5) {
    echo "Iteration: $i\n";
    $i++;
}

echo "\n\n";

/*
c. Do-While Loop

    - Mirip dengan while, tetapi kode dijalankan setidaknya satu kali meskipun kondisinya salah.
*/

echo "c. Do-While Loop: Mirip dengan while, tetapi kode dijalankan setidaknya satu kali meskipun kondisinya salah." . "\n\n";

$i = 1;
do {
    echo "Iteration: $i\n";
    $i++;
} while ($i <= 5);

echo "\n\n";

/*
d. Foreach Loop

    - Digunakan untuk iterasi elemen dalam array.
*/

echo "d. Foreach Loop: Digunakan untuk iterasi elemen dalam array." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit\n";
}

echo "\n\n";

echo "----------------------- Penggunaan Kombinasi Control Structures -----------------------" . "\n\n";

echo "------------------ Contoh: Menampilkan Bilangan Genap dalam Array ----------------" . "\n\n";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    if ($number % 2 === 0) {
        echo "$number is even.\n";
    }
}

echo "\n\n";

echo "--------------- Contoh: Membuat Tabel Perkalian dengan Nested Loops -------------" . "\n\n";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        printf("%4d", $i * $j); // Format dengan lebar 4 untuk perataan
    }
    echo PHP_EOL; // Baris baru
}
