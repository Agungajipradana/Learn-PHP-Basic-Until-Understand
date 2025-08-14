<?php
/*
Delete Array Items pada PHP berarti menghapus elemen dari array.
Ini sering digunakan dalam pengembangan web, misalnya untuk menghapus item dari keranjang belanja,
menghapus user dari daftar, atau membersihkan data yang tidak diperlukan.
*/

echo "-------------------- Delete Array Items in PHP --------------------" . "\n\n";

/*
1. Remove Array Item (Indexed Array)
   - Menghapus item dari array menggunakan unset().
*/

echo "1. Remove Array Item (Indexed Array)" . "\n\n";

$products = ["Laptop", "Smartphone", "Tablet"];
unset($products[1]); // Menghapus item dengan index 1 (Smartphone)

print_r($products);
/*
Output:
Array
(
    [0] => Laptop
    [2] => Tablet
)
*/
echo "\n\n";

/*
2. Remove Multiple Array Items
   - Menghapus lebih dari satu item sekaligus menggunakan unset().
*/

echo "2. Remove Multiple Array Items" . "\n\n";

$frameworks = ["React", "Vue", "Angular", "Svelte"];
unset($frameworks[1], $frameworks[3]); // Menghapus Vue dan Svelte

print_r($frameworks);
/*
Output:
Array
(
    [0] => React
    [2] => Angular
)
*/
echo "\n\n";

/*
3. Remove Item From an Associative Array
   - Menghapus item menggunakan key.
*/

echo "3. Remove Item From an Associative Array" . "\n\n";

$user = [
    "name" => "Michael",
    "email" => "michael@example.com",
    "role" => "Admin"
];

unset($user["role"]); // Menghapus key "role"

print_r($user);
/*
Output:
Array
(
    [name] => Michael
    [email] => michael@example.com
)
*/
echo "\n\n";

/*
4. Using the array_diff Function
   - Menghapus item berdasarkan value.
*/

echo "4. Using the array_diff Function" . "\n\n";

$colors = ["red", "blue", "green", "yellow"];
$colors = array_diff($colors, ["blue", "yellow"]); // Menghapus berdasarkan value

print_r($colors);
/*
Output:
Array
(
    [0] => red
    [2] => green
)
*/
echo "\n\n";

/*
5. Remove the Last Item
   - Menggunakan array_pop() untuk menghapus item terakhir.
*/

echo "5. Remove the Last Item" . "\n\n";

$tasks = ["Design Homepage", "Develop API", "Write Documentation"];
array_pop($tasks); // Menghapus "Write Documentation"

print_r($tasks);
/*
Output:
Array
(
    [0] => Design Homepage
    [1] => Develop API
)
*/
echo "\n\n";

/*
6. Remove the First Item
   - Menggunakan array_shift() untuk menghapus item pertama.
*/

echo "6. Remove the First Item" . "\n\n";

$queue = ["User1", "User2", "User3"];
array_shift($queue); // Menghapus "User1"

print_r($queue);
/*
Output:
Array
(
    [0] => User2
    [1] => User3
)
*/
echo "\n\n";

/*
7. Complex Example in Web Development Context
   - Menghapus user dari daftar member aktif.
*/

echo "7. Complex Example in Web Development Context" . "\n\n";

$activeMembers = [
    ["name" => "Alice", "status" => "active"],
    ["name" => "David", "status" => "inactive"],
    ["name" => "Sophia", "status" => "active"]
];

// Hapus member yang statusnya "inactive"
foreach ($activeMembers as $index => $member) {
    if ($member["status"] === "inactive") {
        unset($activeMembers[$index]);
    }
}

print_r($activeMembers);
/*
Output:
Array
(
    [0] => Array
        (
            [name] => Alice
            [status] => active
        )

    [2] => Array
        (
            [name] => Sophia
            [status] => active
        )
)
*/
echo "\n\n";
