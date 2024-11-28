<?php
/*
Built-in Function Array pada PHP adalah fungsi bawaan yang disediakan oleh PHP untuk mempermudah manipulasi dan pengelolaan array. Array adalah struktur data yang dapat menyimpan banyak nilai dalam satu variabel, dan fungsi array membantu kita melakukan berbagai operasi seperti menambah, menghapus, mencari, memfilter, dan mengurutkan elemen array.
*/

echo "-------------------- Fungsi Built-in Array yang Sering Digunakan --------------------" . "\n\n";

/*
1. array_push()

    - Menambahkan satu atau lebih elemen ke akhir array.
*/

echo "1. array_push() : Menambahkan satu atau lebih elemen ke akhir array." . "\n\n";

$fruits = ["Apple", "Banana"];
array_push($fruits, "Orange", "Mango");
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana [2] => Orange [3] => Mango )
echo "\n\n";

/*
2. array_pop()

    - Menghapus elemen terakhir dari array.
*/

echo "2. array_pop() : Menghapus elemen terakhir dari array." . "\n\n";

$fruits = ["Apple", "Banana", "Orange"];
array_pop($fruits);
print_r($fruits); // Output: Array ( [0] => Apple [1] => Banana )
echo "\n\n";

/*
3. array_merge()

    - Menggabungkan dua atau lebih array menjadi satu.
*/

echo "3. array_merge() : Menggabungkan dua atau lebih array menjadi satu." . "\n\n";

$array1 = ["A", "B"];
$array2 = ["C", "D"];
$result = array_merge($array1, $array2);
print_r($result); // Output: Array ( [0] => A [1] => B [2] => C [3] => D )
echo "\n\n";

/*
4. array_keys()

    - Mengambil semua kunci dari array.
*/

echo "4. array_keys() : Mengambil semua kunci dari array." . "\n\n";

$person = ["name" => "John", "age" => 25, "city" => "New York"];
$keys = array_keys($person);
print_r($keys); // Output: Array ( [0] => name [1] => age [2] => city )
echo "\n\n";

/*
5. array_values()

    - Mengambil semua nilai dari array.
*/

echo "5. array_values() : Mengambil semua nilai dari array." . "\n\n";

$person = ["name" => "John", "age" => 25, "city" => "New York"];
$values = array_values($person);
print_r($values); // Output: Array ( [0] => John [1] => 25 [2] => New York )
echo "\n\n";

/*
6. array_filter()

    - Menyaring elemen array berdasarkan kondisi tertentu.
*/

echo "6. array_filter() : Menyaring elemen array berdasarkan kondisi tertentu." . "\n\n";

$numbers = [1, 2, 3, 4, 5];
$evenNumbers = array_filter($numbers, function($num) {
    return $num % 2 == 0;
});
print_r($evenNumbers); // Output: Array ( [1] => 2 [3] => 4 )
echo "\n\n";

/*
7. array_map()

    - Menerapkan fungsi ke setiap elemen array.
*/

echo "7. array_map() : Menerapkan fungsi ke setiap elemen array." . "\n\n";

$numbers = [1, 2, 3, 4, 5];
$squared = array_map(function($num) {
    return $num * $num;
}, $numbers);
print_r($squared); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 )
echo "\n\n";

/*
8. in_array()

    - Memeriksa apakah sebuah nilai ada di dalam array.
*/

echo "8. in_array() : Memeriksa apakah sebuah nilai ada di dalam array." . "\n\n";

$fruits = ["Apple", "Banana", "Orange"];
$isInArray = in_array("Banana", $fruits);
var_dump($isInArray); // Output: bool(true)
echo "\n\n";

/*
9. sort()

    - Mengurutkan array dalam urutan menaik (ascending).
*/

echo "9. sort() : Mengurutkan array dalam urutan menaik (ascending)." . "\n\n";

$numbers = [3, 1, 4, 1, 5];
sort($numbers);
print_r($numbers); // Output: Array ( [0] => 1 [1] => 1 [2] => 3 [3] => 4 [4] => 5 )
echo "\n\n";

/*
10. array_slice()

    - Mengambil sebagian elemen dari array.
*/

echo "10. array_slice() : Mengambil sebagian elemen dari array." . "\n\n";

$fruits = ["Apple", "Banana", "Orange", "Mango"];
$slicedArray = array_slice($fruits, 1, 2);
print_r($slicedArray); // Output: Array ( [0] => Banana [1] => Orange )
echo "\n\n";

/*
11. array_search()

    - Mencari nilai dalam array dan mengembalikan kunci dari elemen tersebut.
*/

echo "11. array_search() : Mencari nilai dalam array dan mengembalikan kunci dari elemen tersebut." . "\n\n";

$fruits = ["Apple", "Banana", "Orange"];
$key = array_search("Banana", $fruits);
echo $key; // Output: 1
echo "\n\n";

/*
12. array_reverse()

    - Membalik urutan elemen dalam array.
*/

echo "12. array_reverse() : Membalik urutan elemen dalam array." . "\n\n";

$fruits = ["Apple", "Banana", "Orange"];
$reversed = array_reverse($fruits);
print_r($reversed); // Output: Array ( [0] => Orange [1] => Banana [2] => Apple )
echo "\n\n";

/*
13. array_unique()

    - Menghapus elemen duplikat dari array.
*/

echo "13. array_unique() : Menghapus elemen duplikat dari array." . "\n\n";

$fruits = ["Apple", "Banana", "Orange"];
$reversed = array_reverse($fruits);
print_r($reversed); // Output: Array ( [0] => Orange [1] => Banana [2] => Apple )
echo "\n\n";