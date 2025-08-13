<?php
/*
Custom Functions adalah fungsi buatan sendiri yang dibuat oleh developer 
untuk menyelesaikan kebutuhan spesifik dalam aplikasi. 
Dengan membuat fungsi sendiri, kode menjadi lebih rapi, reusable, dan mudah di-maintain.

Contoh di bawah disusun dari yang paling sederhana hingga lebih kompleks, relevan untuk pengembangan web.
*/

echo "-------------------------------- Custom Functions --------------------------------\n\n";

/*
1. Basic Function - Display Welcome Message
   Menampilkan pesan sambutan sederhana.
*/
function showWelcomeMessage()
{
    echo "Welcome to My Website!";
}
showWelcomeMessage(); // Output: Welcome to My Website!

echo "\n\n";

/*
2. Function with Parameter - Personalized Greeting
   Menampilkan salam berdasarkan nama user.
*/
function greetUser(string $name)
{
    echo "Hello, $name!";
}
greetUser("Emma"); // Output: Hello, Emma!

echo "\n\n";

/*
3. Function with Multiple Parameters - Calculate Total Price
   Menghitung total harga produk.
*/
function calculateTotalPrice(float $price, int $quantity)
{
    return $price * $quantity;
}
echo "Total Price: $" . calculateTotalPrice(29.99, 4); // Output: Total Price: $119.96

echo "\n\n";

/*
4. Function Returning a Value - Format Date
   Mengubah format tanggal untuk tampilan yang lebih rapi.
*/
function formatDate(string $date)
{
    return date("F j, Y", strtotime($date));
}
echo "Published Date: " . formatDate("2025-08-13");
// Output: Published Date: August 13, 2025

echo "\n\n";

/*
5. Function with Default Parameter - Generate Button
   Membuat HTML button dengan default class.
*/
function generateButton(string $label, string $class = "btn-primary")
{
    return "<button class='$class'>$label</button>";
}
echo generateButton("Click Here");
// Output: <button class='btn-primary'>Click Here</button>

echo "\n\n";

/*
6. Function with Conditional Logic - Check User Role
   Menentukan apakah user memiliki akses admin.
*/
function isAdmin(string $role)
{
    return strtolower($role) === "admin";
}
echo isAdmin("Admin") ? "Access Granted" : "Access Denied";
// Output: Access Granted

echo "\n\n";

/*
7. More Complex Example - Get Active Users
   Mengambil daftar user yang statusnya aktif.
*/
function getActiveUsers(array $users)
{
    $active = [];
    foreach ($users as $user) {
        if ($user["active"]) {
            $active[] = $user["name"];
        }
    }
    return $active;
}

$usersList = [
    ["name" => "Emma", "active" => true],
    ["name" => "John", "active" => false],
    ["name" => "Lucas", "active" => true]
];

$activeUsers = getActiveUsers($usersList);
echo "Active Users: " . implode(", ", $activeUsers);
// Output: Active Users: Emma, Lucas
