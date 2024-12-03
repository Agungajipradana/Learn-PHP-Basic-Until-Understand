<?php

/*
Array Manipulation (Multidimensional Arrays) adalah proses bekerja dengan array yang memiliki elemen-elemen berupa array lain, sehingga membentuk struktur data bertingkat. Multidimensional arrays sering digunakan untuk menyimpan data dalam bentuk tabel, matriks, atau data kompleks lainnya yang membutuhkan pengorganisasian hierarkis.

Multidimensional arrays dapat berupa:

    1. Array 2 Dimensi: Setiap elemen adalah array.
    2. Array N Dimensi: Setiap elemen bisa berupa array dengan tingkat lebih dalam.
*/

echo "-------------------- Dasar Multidimensional Array --------------------" . "\n\n";

/*
1. Definisi Multidimensional Array

    - Array yang memiliki array di dalamnya.
*/

echo "1. Definisi Multidimensional Array: Array yang memiliki array di dalamnya." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"],
    ["name" => "Charlie", "age" => 21, "grade" => "A"]
];
print_r($students);

/*
Output:
Array (
    [0] => Array ( [name] => Alice [age] => 20 [grade] => A )
    [1] => Array ( [name] => Bob [age] => 22 [grade] => B )
    [2] => Array ( [name] => Charlie [age] => 21 [grade] => A )
)
*/

echo "\n\n";

echo "-------------------- Manipulasi Multidimensional Arrays --------------------" . "\n\n";

/*
1. Mengakses Elemen

    - Akses elemen dengan menggunakan indeks berlapis.
*/

echo "1. Mengakses Elemen: Akses elemen dengan menggunakan indeks berlapis." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"]
];

echo $students[0]["name"] . "\n\n"; // Alice
echo $students[1]["grade"] . "\n\n"; // B

/*
2. Menambahkan Elemen

    - Tambahkan elemen baru menggunakan [].
*/

echo "2. Menambahkan Elemen: Tambahkan elemen baru menggunakan []." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"]
];

$students[] = ["name" => "Charlie", "age" => 21, "grade" => "A"];
print_r($students);

/*
Output:

Array (
    [0] => Array ( [name] => Alice [age] => 20 [grade] => A )
    [1] => Array ( [name] => Bob [age] => 22 [grade] => B )
    [2] => Array ( [name] => Charlie [age] => 21 [grade] => A )
)
*/

echo "\n\n";

/*
3. Menghapus Elemen

    - Gunakan unset() untuk menghapus elemen tertentu.
*/

echo "3. Menghapus Elemen: Gunakan unset() untuk menghapus elemen tertentu." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"]
];

unset($students[1]); // Menghapus elemen kedua
print_r($students);

/*
Output:

Array (
    [0] => Array ( [name] => Alice [age] => 20 [grade] => A )
)
*/

echo "\n\n";

/*
4. Mengubah Elemen

    - Ubah elemen dengan memberikan nilai baru ke indeks tertentu.
*/

echo "4. Mengubah Elemen: Ubah elemen dengan memberikan nilai baru ke indeks tertentu." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"]
];

$students[1]["grade"] = "A"; // Mengubah nilai grade Bob
print_r($students);

/*
Output:

Array (
    [0] => Array ( [name] => Alice [age] => 20 [grade] => A )
    [1] => Array ( [name] => Bob [age] => 22 [grade] => A )
)
*/

echo "\n\n";

/*
5. Looping pada Multidimensional Arrays

    - Gunakan loop seperti foreach() atau for untuk iterasi.
*/

echo "5. Looping pada Multidimensional Arrays: Gunakan loop seperti foreach() atau for untuk iterasi." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"],
    ["name" => "Charlie", "age" => 21, "grade" => "A"]
];

foreach ($students as $student) {
    echo "Name: " . $student["name"] . ", Age: " . $student["age"] . ", Grade: " . $student["grade"] . "\n";
}

/*
Output:

Name: Alice, Age: 20, Grade: A
Name: Bob, Age: 22, Grade: B
Name: Charlie, Age: 21, Grade: A
*/

echo "\n\n";

/*
6. Mengurutkan Multidimensional Arrays

    - Gunakan array_multisort() untuk mengurutkan berdasarkan kolom tertentu.
*/

echo "6. Mengurutkan Multidimensional Arrays: Gunakan array_multisort() untuk mengurutkan berdasarkan kolom tertentu." . "\n\n";

$students = [
    ["name" => "Alice", "age" => 20, "grade" => "A"],
    ["name" => "Bob", "age" => 22, "grade" => "B"],
    ["name" => "Charlie", "age" => 21, "grade" => "A"]
];

array_multisort(array_column($students, 'age'), SORT_ASC, $students);
print_r($students);

/*
Output:

Array (
    [0] => Array ( [name] => Alice [age] => 20 [grade] => A )
    [1] => Array ( [name] => Charlie [age] => 21 [grade] => A )
    [2] => Array ( [name] => Bob [age] => 22 [grade] => B )
)
*/

echo "\n\n";

/*
Kesimpulan

Manipulasi Multidimensional Arrays dalam PHP sangat penting untuk mengelola data kompleks seperti tabel, daftar pengguna, atau informasi hierarkis. Dengan teknik seperti menambah, menghapus, mengubah, atau mengurutkan, Anda dapat mengelola data secara fleksibel dan efisien.
*/