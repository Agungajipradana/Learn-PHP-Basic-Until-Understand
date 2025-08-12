<?php

/*
PHP Break Statement
Digunakan untuk menghentikan eksekusi loop lebih awal, berguna untuk mengontrol alur dan menghemat sumber daya.
*/

echo "-------------------- PHP Break Statement --------------------\n\n";

/*
1. Break in For loop
   - Menghentikan pengiriman API request setelah mencapai batas.
*/
for ($request = 1; $request <= 10; $request++) {
    echo "1. Sending API request #$request\n";
    if ($request == 5) {
        echo "1. Max requests reached. Stopping loop.\n"; // Output: Max requests reached. Stopping loop.
        break;
    }
}

echo "\n";

/*
2. Break in While loop
   - Memproses user sampai user dengan nama tertentu ditemukan.
*/
$users = ["Alice", "Bob", "Charlie", "Diana"];
$index = 0;
while ($index < count($users)) {
    echo "2. Checking user: {$users[$index]}\n";
    if ($users[$index] == "Charlie") {
        echo "2. User found: Charlie. Stopping loop.\n"; // Output: User found: Charlie. Stopping loop.
        break;
    }
    $index++;
}

echo "\n";

/*
3. Break in Do While loop
   - Melakukan polling server sampai status 'OK' diterima.
*/
$polls = ["Pending", "Pending", "Error", "OK", "Pending"];
$pollIndex = 0;
do {
    echo "3. Polling server: Status - {$polls[$pollIndex]}\n";
    if ($polls[$pollIndex] == "OK") {
        echo "3. Server responded OK. Ending polling.\n"; // Output: Server responded OK. Ending polling.
        break;
    }
    $pollIndex++;
} while ($pollIndex < count($polls));

echo "\n";

/*
4. Break in Foreach loop
   - Mencari user dengan role 'admin' dan berhenti saat ditemukan.
*/
$usersInfo = [
    ["name" => "Eve", "role" => "editor"],
    ["name" => "Frank", "role" => "admin"],
    ["name" => "Grace", "role" => "subscriber"],
];

foreach ($usersInfo as $user) {
    echo "4. Checking user: {$user['name']} with role {$user['role']}\n";
    if ($user['role'] === "admin") {
        echo "4. Admin user found: {$user['name']}. Stopping loop.\n"; // Output: Admin user found: Frank. Stopping loop.
        break;
    }
}
