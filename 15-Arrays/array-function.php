<?php
/*
Array Functions pada PHP adalah kumpulan fungsi bawaan yang digunakan
untuk memanipulasi array, seperti menghitung jumlah item, mencari nilai,
menggabungkan array, memecah array, dan sebagainya.

Dalam pengembangan web, ini sering digunakan untuk memproses data yang
berasal dari database, form, atau API.
*/

echo "-------------------- Array Functions in PHP --------------------" . "\n\n";

/*
1. count()
   - Menghitung jumlah item dalam array.
*/

echo "1. count()" . "\n\n";

$users = ["Alice", "Bob", "Charlie"];
echo "Total users: " . count($users) . "\n";
/*
Output:
Total users: 3
*/
echo "\n\n";

/*
2. in_array()
   - Mengecek apakah sebuah value ada di dalam array.
*/

echo "2. in_array()" . "\n\n";

$roles = ["Admin", "Editor", "Subscriber"];
if (in_array("Editor", $roles)) {
    echo "Role found: Editor\n";
} else {
    echo "Role not found\n";
}
/*
Output:
Role found: Editor
*/
echo "\n\n";

/*
3. array_push()
   - Menambahkan item ke akhir array.
*/

echo "3. array_push()" . "\n\n";

$products = ["Laptop", "Smartphone"];
array_push($products, "Tablet", "Smartwatch");

print_r($products);
/*
Output:
Array
(
    [0] => Laptop
    [1] => Smartphone
    [2] => Tablet
    [3] => Smartwatch
)
*/
echo "\n\n";

/*
4. array_merge()
   - Menggabungkan dua atau lebih array menjadi satu.
*/

echo "4. array_merge()" . "\n\n";

$frontend = ["HTML", "CSS"];
$backend = ["PHP", "Node.js"];
$fullstack = array_merge($frontend, $backend);

print_r($fullstack);
/*
Output:
Array
(
    [0] => HTML
    [1] => CSS
    [2] => PHP
    [3] => Node.js
)
*/
echo "\n\n";

/*
5. array_search()
   - Mencari key dari sebuah value di array.
*/

echo "5. array_search()" . "\n\n";

$frameworks = ["Laravel", "Symfony", "CodeIgniter"];
$key = array_search("Symfony", $frameworks);

echo "Symfony found at index: $key\n";
/*
Output:
Symfony found at index: 1
*/
echo "\n\n";

/*
6. array_slice()
   - Mengambil sebagian array.
*/

echo "6. array_slice()" . "\n\n";

$members = ["Alice", "Bob", "Charlie", "David"];
$subset = array_slice($members, 1, 2);

print_r($subset);
/*
Output:
Array
(
    [0] => Bob
    [1] => Charlie
)
*/
echo "\n\n";

/*
7. Complex Example in Web Development Context
   - Menggunakan beberapa fungsi array untuk memproses data user aktif.
*/

echo "7. Complex Example in Web Development Context" . "\n\n";

$allUsers = [
    ["name" => "Alice", "status" => "active"],
    ["name" => "Bob", "status" => "inactive"],
    ["name" => "Charlie", "status" => "active"],
    ["name" => "David", "status" => "inactive"]
];

// Ambil hanya user dengan status "active"
$activeUsers = array_filter($allUsers, function ($user) {
    return $user["status"] === "active";
});

// Ambil hanya nama user
$activeUserNames = array_column($activeUsers, "name");

// Urutkan nama secara ascending
sort($activeUserNames);

print_r($activeUserNames);
/*
Output:
Array
(
    [0] => Alice
    [1] => Charlie
)
*/
echo "\n\n";
