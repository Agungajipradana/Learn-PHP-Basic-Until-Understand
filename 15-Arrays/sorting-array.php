<?php
/*
Sorting Arrays in PHP digunakan untuk mengurutkan data dalam array.
Ini sangat berguna dalam pengembangan web, seperti mengurutkan daftar produk, user, atau data statistik.
*/

echo "-------------------- Sorting Arrays in PHP --------------------" . "\n\n";

/*
1. Sort Array in Ascending Order - sort()
   - Mengurutkan array berdasarkan nilai dari kecil ke besar (A-Z, 0-9).
   - Contoh: Mengurutkan nama user di halaman dashboard.
*/

echo "1. Sort Array in Ascending Order - sort()" . "\n\n";

$names = ["David", "Michael", "Alice", "Sophia"];
sort($names);

print_r($names);
/*
Output:
Array
(
    [0] => Alice
    [1] => David
    [2] => Michael
    [3] => Sophia
)
*/
echo "\n\n";

/*
2. Sort Array in Descending Order - rsort()
   - Mengurutkan array berdasarkan nilai dari besar ke kecil (Z-A, 9-0).
   - Contoh: Menampilkan daftar harga produk dari termurah ke termahal.
*/

echo "2. Sort Array in Descending Order - rsort()" . "\n\n";

$prices = [120, 50, 200, 80];
rsort($prices);

print_r($prices);
/*
Output:
Array
(
    [0] => 200
    [1] => 120
    [2] => 80
    [3] => 50
)
*/
echo "\n\n";

/*
3. Sort Associative Array by Values - asort()
   - Mengurutkan array asosiatif berdasarkan nilai (A-Z) dan mempertahankan key.
   - Contoh: Mengurutkan daftar kategori produk berdasarkan nama.
*/

echo "3. Sort Array by Values - asort()" . "\n\n";

$products = [
    "p1" => "Laptop",
    "p2" => "Smartphone",
    "p3" => "Tablet"
];
asort($products);

print_r($products);
/*
Output:
Array
(
    [p1] => Laptop
    [p2] => Smartphone
    [p3] => Tablet
)
*/
echo "\n\n";

/*
4. Sort Associative Array by Keys - ksort()
   - Mengurutkan array asosiatif berdasarkan key (A-Z).
   - Contoh: Mengurutkan daftar user berdasarkan ID.
*/

echo "4. Sort Array by Keys - ksort()" . "\n\n";

$users = [
    "user3" => "Alice",
    "user1" => "David",
    "user2" => "Michael"
];
ksort($users);

print_r($users);
/*
Output:
Array
(
    [user1] => David
    [user2] => Michael
    [user3] => Alice
)
*/
echo "\n\n";

/*
5. Sort Associative Array by Values Descending - arsort()
   - Mengurutkan array asosiatif berdasarkan nilai (Z-A) dan mempertahankan key.
   - Contoh: Mengurutkan skor leaderboard dari tertinggi ke terendah.
*/

echo "5. Sort Array by Values Descending - arsort()" . "\n\n";

$scores = [
    "Alice" => 88,
    "David" => 95,
    "Michael" => 72
];
arsort($scores);

print_r($scores);
/*
Output:
Array
(
    [David] => 95
    [Alice] => 88
    [Michael] => 72
)
*/
echo "\n\n";

/*
6. Sort Associative Array by Keys Descending - krsort()
   - Mengurutkan array asosiatif berdasarkan key (Z-A).
   - Contoh: Mengurutkan role user berdasarkan abjad terbalik.
*/

echo "6. Sort Array by Keys Descending - krsort()" . "\n\n";

$roles = [
    "admin" => "Michael",
    "editor" => "Alice",
    "subscriber" => "David"
];
krsort($roles);

print_r($roles);
/*
Output:
Array
(
    [subscriber] => David
    [editor] => Alice
    [admin] => Michael
)
*/
echo "\n\n";

/*
7. Complex Example in Web Development Context
   - Mengurutkan daftar produk berdasarkan harga dari termahal ke termurah.
   - Sering digunakan pada halaman e-commerce dengan filter "Sort by Price: High to Low".
*/

echo "7. Complex Example - Sort Products by Price Descending" . "\n\n";

$storeProducts = [
    ["name" => "Laptop", "price" => 1200],
    ["name" => "Smartphone", "price" => 800],
    ["name" => "Tablet", "price" => 600]
];

// Mengurutkan berdasarkan harga dari besar ke kecil
usort($storeProducts, function ($a, $b) {
    return $b["price"] <=> $a["price"];
});

print_r($storeProducts);
/*
Output:
Array
(
    [0] => Array
        (
            [name] => Laptop
            [price] => 1200
        )

    [1] => Array
        (
            [name] => Smartphone
            [price] => 800
        )

    [2] => Array
        (
            [name] => Tablet
            [price] => 600
        )
)
*/
echo "\n\n";
