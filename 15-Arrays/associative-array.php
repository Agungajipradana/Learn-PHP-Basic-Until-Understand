<?php
/*
Associative Arrays pada PHP adalah array yang menggunakan key (kunci) berupa string untuk mengakses nilai.
Ini sangat berguna dalam pengembangan web, misalnya untuk menyimpan data pengguna, konfigurasi, atau informasi yang mudah dipahami.
*/

echo "-------------------- Associative Arrays in PHP --------------------" . "\n\n";

/*
1. Access Associative Arrays
   - Mengakses nilai array menggunakan key (string).
*/

echo "1. Access Associative Arrays" . "\n\n";

$user = [
    "name" => "Michael",
    "email" => "michael@example.com",
    "role" => "Admin"
];

echo "Name: " . $user["name"] . "\n";    // Output: Name: Michael
echo "Email: " . $user["email"] . "\n";  // Output: Email: michael@example.com
echo "Role: " . $user["role"] . "\n";    // Output: Role: Admin
echo "\n\n";

/*
2. Change Value
   - Mengubah nilai array menggunakan key yang sudah ada.
*/

echo "2. Change Value" . "\n\n";

$user["role"] = "Super Admin"; // Mengubah role user
$user["email"] = "michael.superadmin@example.com"; // Mengubah email

print_r($user);
/*
Output:
Array
(
    [name] => Michael
    [email] => michael.superadmin@example.com
    [role] => Super Admin
)
*/
echo "\n\n";

/*
3. Loop Through an Associative Array
   - Melakukan perulangan untuk membaca key dan value.
*/

echo "3. Loop Through an Associative Array" . "\n\n";

$team = [
    "John" => "Frontend Developer",
    "Emma" => "Backend Developer",
    "Robert" => "UI/UX Designer"
];

foreach ($team as $name => $position) {
    echo "Name: $name - Position: $position\n";
}
/*
Output:
Name: John - Position: Frontend Developer
Name: Emma - Position: Backend Developer
Name: Robert - Position: UI/UX Designer
*/
echo "\n\n";

/*
4. Complex Example in Web Development Context
   - Menyimpan data user login dan menampilkannya dalam format tertentu.
*/

echo "4. Complex Example in Web Development Context" . "\n\n";

$users = [
    [
        "name" => "Alice",
        "email" => "alice@example.com",
        "role" => "Editor"
    ],
    [
        "name" => "David",
        "email" => "david@example.com",
        "role" => "Subscriber"
    ],
    [
        "name" => "Sophia",
        "email" => "sophia@example.com",
        "role" => "Author"
    ]
];

foreach ($users as $user) {
    echo "User: " . $user["name"] . "\n";
    echo "Email: " . $user["email"] . "\n";
    echo "Role: " . $user["role"] . "\n";
    echo "-----------------------------\n";
}
/*
Output:
User: Alice
Email: alice@example.com
Role: Editor
-----------------------------
User: David
Email: david@example.com
Role: Subscriber
-----------------------------
User: Sophia
Email: sophia@example.com
Role: Author
-----------------------------
*/
