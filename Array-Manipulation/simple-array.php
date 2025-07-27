<?php

/*
Array Manipulation (Simple Arrays) dalam PHP adalah operasi dasar yang dilakukan pada array satu dimensi. Array sederhana (simple arrays) memiliki elemen yang berupa nilai tunggal (tidak bersarang). Manipulasi array mencakup menambah, menghapus, mengubah, mengurutkan, atau mengambil elemen dari array.
*/

echo "-------------------- Dasar Array Sederhana di PHP --------------------" . "\n\n";

/*
1. Definisi Array Sederhana

    - Array sederhana hanya berisi daftar elemen tanpa struktur bersarang. Elemen-elemen ini memiliki indeks numerik secara default.
*/

echo "1. Definisi Array Sederhana: Array sederhana hanya berisi daftar elemen tanpa struktur bersarang." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry )

echo "\n\n";

echo "-------------------- Manipulasi Array Sederhana --------------------" . "\n\n";

/*
1. Menambahkan Elemen

    - Elemen baru bisa ditambahkan dengan operator [] atau fungsi array_push().
*/

echo "1. Menambahkan Elemen: Elemen baru bisa ditambahkan dengan operator [] atau fungsi array_push()." . "\n\n";

$fruits = ["Apple", "Banana"];
$fruits[] = "Cherry"; // Tambah elemen langsung
array_push($fruits, "Date", "Elderberry"); // Tambah elemen menggunakan array_push
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Date [4] => Elderberry )

echo "\n\n";

/*
2. Menghapus Elemen

    - Elemen bisa dihapus dengan unset(), array_pop(), atau array_shift().
*/

echo "2. Menghapus Elemen: Elemen bisa dihapus dengan unset(), array_pop(), atau array_shift()." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
unset($fruits[1]); // Menghapus elemen dengan indeks tertentu
array_pop($fruits); // Menghapus elemen terakhir
array_shift($fruits); // Menghapus elemen pertama
print_r($fruits); // Output: Array ()

echo "\n\n";

/*
3. Mengakses Elemen

    - Elemen array dapat diakses melalui indeks.
*/

echo "3. Mengakses Elemen: Elemen array dapat diakses melalui indeks." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
echo "Mengkases elemen pertama dari \$fruits: " .  $fruits[0] . "\n\n"; // Output: Apple 

/*
4. Mengubah Elemen

    - Elemen array dapat diubah langsung dengan memberikan nilai baru ke indeks tertentu.
*/

echo "4. Mengubah Elemen: Elemen array dapat diubah langsung dengan memberikan nilai baru ke indeks tertentu." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
$fruits[1] = "Blueberry"; // Mengubah elemen dengan indeks 1
print_r($fruits); // Output: Array ( [0] => Apple [1] => Blueberry [2] => Cherry )

echo "\n\n";

/*
5. Mengurutkan Elemen

    - Gunakan sort() untuk ascending atau rsort() untuk descending.
*/

echo "5. Mengurutkan Elemen: Gunakan sort() untuk ascending atau rsort() untuk descending." . "\n\n";

$numbers = [3, 1, 4, 2];
sort($numbers); // Mengurutkan secara ascending
print_r($numbers); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
echo "\n\n";

rsort($numbers); // Mengurutkan secara descending
print_r($numbers); // Output: Array ( [0] => 4 [1] => 3 [2] => 2 [3] => 1 )

echo "\n\n";

/*
6. Menggabungkan Dua Array

    - Gunakan array_merge() untuk menggabungkan array.
*/

echo "6. Menggabungkan Dua Array: Gunakan array_merge() untuk menggabungkan array." . "\n\n";

$array1 = ["Apple", "Banana"];
$array2 = ["Cherry", "Date"];
$result = array_merge($array1, $array2);
print_r($result); // Output: Array ( [0] => Apple [1] => Banana [2] => Cherry [3] => Date )

echo "\n\n";

/*
7. Mencari Elemen

    - Gunakan in_array() untuk memeriksa apakah elemen ada dalam array.
*/

echo "7. Mencari Elemen: Gunakan in_array() untuk memeriksa apakah elemen ada dalam array." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
if (in_array("Banana", $fruits)) {
    echo "Banana ditemukan!"; // Output: Banana ditemukan!
}

echo "\n\n";

/*
8. Mengambil Elemen Unik

    - Gunakan array_unique() untuk mengambil elemen unik dari array.
*/

echo "8. Mengambil Elemen Unik: Gunakan array_unique() untuk mengambil elemen unik dari array." . "\n\n";

$fruits = ["Apple", "Banana", "Apple", "Cherry"];
$uniqueFruits = array_unique($fruits);
print_r($uniqueFruits); // Output: Array ( [0] => Apple [1] => Banana [3] => Cherry )

echo "\n\n";

/*
9. Menghitung Elemen

    - Gunakan count() untuk menghitung jumlah elemen.
*/

echo "9. Menghitung Elemen: Gunakan count() untuk menghitung jumlah elemen." . "\n\n";

$fruits = ["Apple", "Banana", "Cherry"];
echo "Jumlah elemen: " . count($fruits); // Output: Jumlah elemen: 3

echo "\n\n";