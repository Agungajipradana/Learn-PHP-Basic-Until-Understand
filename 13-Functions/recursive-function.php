<?php

/*
Recursive Functions dalam PHP adalah fungsi yang memanggil dirinya sendiri
hingga mencapai kondisi tertentu (base case) untuk menghentikan proses.

Teknik ini bermanfaat untuk menyelesaikan masalah yang dapat dipecah menjadi
sub-masalah yang mirip, seperti:
- Mengolah data bertingkat (nested data)
- Membuat menu multi-level
- Menelusuri struktur folder
- Pencarian data pada struktur hierarki

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks,
dan relevan untuk pengembangan web.
*/

echo "-------------------------------- Recursive Functions --------------------------------\n\n";

/*
1. Simple Countdown
   Contoh paling sederhana: menghitung mundur angka.
   Ini mirip proses looping tetapi menggunakan rekursi.
*/
function countdown(int $number): void
{
    if ($number <= 0) {
        echo "Blast off!\n";
        return; // Base case
    }
    echo $number . "\n";
    countdown($number - 1); // Recursive call
}

echo "Countdown:\n";
countdown(5);
// Output:
// 5
// 4
// 3
// 2
// 1
// Blast off!

echo "\n\n";

/*
2. Factorial Calculation
   Contoh umum penggunaan rekursi untuk perhitungan matematis.
   Dalam pengembangan web, bisa digunakan untuk perhitungan statistik
   atau algoritma tertentu.
*/
function factorial(int $n): int
{
    if ($n <= 1) {
        return 1; // Base case
    }
    return $n * factorial($n - 1); // Recursive call
}

echo "Factorial of 5: " . factorial(5) . "\n";
// Output: 120

echo "\n\n";

/*
3. Render Nested Categories (Menu Multi-Level)
   Digunakan untuk menampilkan kategori bertingkat, seperti menu e-commerce.
*/
$categories = [
    [
        'name' => 'Electronics',
        'children' => [
            ['name' => 'Laptops', 'children' => [
                ['name' => 'MacBook Air'],
                ['name' => 'Dell XPS']
            ]],
            ['name' => 'Smartphones', 'children' => [
                ['name' => 'iPhone'],
                ['name' => 'Samsung Galaxy']
            ]]
        ]
    ],
    [
        'name' => 'Books',
        'children' => [
            ['name' => 'Fiction'],
            ['name' => 'Programming']
        ]
    ]
];

function renderCategories(array $categories, string $prefix = "- "): void
{
    foreach ($categories as $category) {
        echo $prefix . $category['name'] . "\n";
        if (isset($category['children'])) {
            renderCategories($category['children'], $prefix . "- ");
        }
    }
}

echo "Categories:\n";
renderCategories($categories);
/*
Output:
- Electronics
-- Laptops
--- MacBook Air
--- Dell XPS
-- Smartphones
--- iPhone
--- Samsung Galaxy
- Books
-- Fiction
-- Programming
*/

echo "\n\n";

/*
4. Calculate Total Size of Files in Nested Folders
   Berguna untuk menampilkan total penggunaan storage di dashboard web.
*/
$folders = [
    'folder1' => [
        'file1.txt' => 120,
        'file2.txt' => 300,
        'subfolder' => [
            'file3.txt' => 500
        ]
    ],
    'folder2' => [
        'file4.txt' => 200
    ]
];

function getTotalSize(array $folder): int
{
    $total = 0;
    foreach ($folder as $key => $value) {
        if (is_array($value)) {
            $total += getTotalSize($value); // Recursive call
        } else {
            $total += $value; // File size
        }
    }
    return $total;
}

echo "Total storage used: " . getTotalSize($folders) . " KB\n";
// Output: Total storage used: 1120 KB

echo "\n\n";

/*
5. Search User in a Nested Team Structure
   Studi kasus nyata: mencari user tertentu pada struktur organisasi.
*/
$team = [
    [
        'name' => 'Alice',
        'role' => 'Manager',
        'subordinates' => [
            ['name' => 'Bob', 'role' => 'Developer'],
            ['name' => 'Charlie', 'role' => 'Designer']
        ]
    ],
    [
        'name' => 'David',
        'role' => 'Manager',
        'subordinates' => [
            ['name' => 'Eve', 'role' => 'Developer']
        ]
    ]
];

function findUser(array $team, string $name): ?array
{
    foreach ($team as $member) {
        if ($member['name'] === $name) {
            return $member; // Base case
        }
        if (isset($member['subordinates'])) {
            $found = findUser($member['subordinates'], $name); // Recursive call
            if ($found !== null) {
                return $found;
            }
        }
    }
    return null; // Not found
}

$searchedUser = findUser($team, 'Eve');
if ($searchedUser) {
    echo "User found: {$searchedUser['name']} - {$searchedUser['role']}\n";
    // Output: User found: Eve - Developer
} else {
    echo "User not found.\n";
}
