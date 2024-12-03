<?php

/*
Array Manipulation (Array Functions) dalam PHP adalah penggunaan fungsi bawaan (built-in functions) untuk memanipulasi dan mengelola array dengan cara yang efisien. PHP menyediakan banyak fungsi array untuk berbagai keperluan, seperti menambahkan, menghapus, memfilter, mengurutkan, mencari, dan menggabungkan elemen array.

Fungsi-fungsi ini mempermudah pengelolaan data dalam bentuk array, terutama ketika data yang dikelola berukuran besar atau kompleks.
*/

echo "-------------------- Daftar Fungsi Array yang Sering Digunakan --------------------" . "\n\n";

/*
1. Menambah dan Menghapus Elemen Array
    
    - array_push(): Menambahkan satu atau lebih elemen ke akhir array.
    - array_pop(): Menghapus elemen terakhir dari array.
    - array_shift(): Menghapus elemen pertama dari array.
    - array_unshift(): Menambahkan satu atau lebih elemen di awal array.
*/

echo "1. Menambah dan Menghapus Elemen Array" . "\n\n";

$fruits = ["apple", "banana"];
array_push($fruits, "cherry", "date"); // Tambahkan di akhir
print_r($fruits);

/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
    [3] => date
)
*/

echo "\n\n";

array_pop($fruits); // Hapus elemen terakhir
print_r($fruits);

/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
)
*/

echo "\n\n";

array_unshift($fruits, "avocado"); // Tambahkan di awal
print_r($fruits);

/*
Output:

Array
(
    [0] => avocado
    [1] => apple
    [2] => banana
    [3] => cherry
)
*/

echo "\n\n";

array_shift($fruits); // Hapus elemen pertama
print_r($fruits);

/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
)
*/

echo "\n\n";

/*
2. Mencari Elemen dalam Array
    
    - in_array(): Memeriksa apakah nilai tertentu ada dalam array.
    - array_search(): Mencari kunci dari elemen berdasarkan nilainya.
*/

echo "2. Mencari Elemen dalam Array" . "\n\n";

$numbers = [1, 2, 3, 4, 5];
if (in_array(3, $numbers)) {
    echo "Angka 3 ditemukan." . "\n\n"; // Angka 3 ditemukan.
}

$key = array_search(4, $numbers);
echo "Kunci untuk angka 4 adalah: $key" . "\n\n"; // Kunci untuk angka 4 adalah: 3

/*
3. Mengurutkan Array
    
    - sort(): Mengurutkan array dalam urutan menaik.
    - rsort(): Mengurutkan array dalam urutan menurun.
    - asort(): Mengurutkan array asosiatif berdasarkan nilai, mempertahankan kunci.
    - ksort(): Mengurutkan array asosiatif berdasarkan kunci.
*/

echo "3. Mengurutkan Array" . "\n\n";

$fruits = ["banana", "apple", "cherry"];
sort($fruits); // Urutkan
print_r($fruits);

/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
)
*/

echo "\n\n";

$prices = ["banana" => 1, "apple" => 2, "cherry" => 3];
ksort($prices); // Urutkan berdasarkan kunci
print_r($prices);

/*
Output:

Array
(
    [apple] => 2
    [banana] => 1
    [cherry] => 3
)
*/

echo "\n\n";

/*
4. Menggabungkan atau Memisahkan Array
    
    - array_merge(): Menggabungkan dua atau lebih array.
    - implode(): Menggabungkan elemen array menjadi string.
    - explode(): Memecah string menjadi array.
*/

echo "4. Menggabungkan atau Memisahkan Array" . "\n\n";

$array1 = ["apple", "banana"];
$array2 = ["cherry", "date"];
$merged = array_merge($array1, $array2); // Gabungkan
print_r($merged);
/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
    [3] => date
)
*/

echo "\n\n";

$string = implode(", ", $merged); // Array jadi string
echo $string; // apple, banana, cherry, date
echo "\n\n";

$newArray = explode(", ", $string); // String jadi array
print_r($newArray);

/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
    [3] => date
)
*/

echo "\n\n";

/*
5. Memfilter Array
    
    - array_filter(): Memfilter elemen array berdasarkan kondisi tertentu.
*/

echo "5. Memfilter Array" . "\n\n";

$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function ($num) {
    return $num % 2 === 0; // Ambil angka genap
});
print_r($evenNumbers);

/*
Output:

Array
(
    [1] => 2
    [3] => 4
)
*/

echo "\n\n";

/*
6. Menghitung Elemen dalam Array
    
    - count(): Menghitung jumlah elemen dalam array.
    - array_count_values(): Menghitung jumlah kemunculan nilai dalam array.
*/

echo "6. Menghitung Elemen dalam Array" . "\n\n";

$fruits = ["apple", "banana", "apple", "cherry", "banana", "apple"];
echo "Jumlah elemen: " . count($fruits) . "\n\n"; // Jumlah elemen: 6

$counts = array_count_values($fruits);
print_r($counts);

/*
Output:

Array
(
    [apple] => 3
    [banana] => 2
    [cherry] => 1
)
*/

echo "\n\n";

/*
7. Manipulasi Kunci dan Nilai
    
    - array_keys(): Mendapatkan semua kunci dari array.
    - array_values(): Mendapatkan semua nilai dari array.
*/

echo "7. Manipulasi Kunci dan Nilai" . "\n\n";

$prices = ["apple" => 2, "banana" => 1, "cherry" => 3];
$keys = array_keys($prices);
$values = array_values($prices);

print_r($keys); // ["apple", "banana", "cherry"]

/*
Output:

Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
)
*/

echo "\n\n";

print_r($values); // [2, 1, 3]

/*
Output:

Array
(
    [0] => 2
    [1] => 1
    [2] => 3
)
*/

echo "\n\n";

/*
8. Fungsi Lain yang Berguna
    
    - array_map(): Mengaplikasikan fungsi ke setiap elemen array.
    - array_reduce(): Mengurangi array menjadi satu nilai menggunakan callback.
    - array_slice(): Mengambil bagian tertentu dari array.
    - array_splice(): Menghapus dan/atau mengganti elemen tertentu dari array.
*/

echo "8. Fungsi Lain yang Berguna" . "\n\n";

$numbers = [1, 2, 3, 4, 5];

$squared = array_map(function ($num) {
    return $num * $num;
}, $numbers);
print_r($squared); // [1, 4, 9, 16, 25]

/*
Output:

Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)
*/

echo "\n\n";

$sum = array_reduce($numbers, function ($carry, $num) {
    return $carry + $num;
}, 0);
echo "Jumlah: $sum" . "\n\n"; // Jumlah: 15