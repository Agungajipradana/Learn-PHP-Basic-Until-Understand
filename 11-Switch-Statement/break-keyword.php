<?php

/*
PHP break Keyword
Digunakan untuk:
- Menghentikan eksekusi loop lebih awal.
- Mengontrol alur logika program.
- Menghemat sumber daya ketika kondisi sudah terpenuhi.
*/

echo "-------------------- PHP break Keyword --------------------\n\n";

/*
1. Break pada loop foreach sederhana
   - Digunakan untuk menghentikan pencarian jika data sudah ditemukan.
*/
$users = ["Michael", "Sarah", "David", "Emma"];
foreach ($users as $user) {
    if ($user == "David") {
        echo "1. User found: $user\n"; // Output: User found: David
        break;
    }
    echo "1. Checking: $user\n";
}

echo "\n";

/*
2. Break pada while loop
   - Berguna untuk menghentikan proses jika batas tercapai.
*/
$counter = 1;
while ($counter <= 10) {
    echo "2. Processing item $counter\n";
    if ($counter == 5) {
        echo "2. Limit reached, stopping process.\n"; // Output: Limit reached, stopping process.
        break;
    }
    $counter++;
}

echo "\n";

/*
3. Break dalam nested loop (2 tingkat)
   - Menghentikan kedua loop sekaligus saat kondisi tercapai.
*/
$categories = [
    "Electronics" => ["Laptop", "Phone", "Tablet"],
    "Fashion" => ["Shirt", "Shoes", "Watch"],
    "Books" => ["Novel", "Magazine", "Comics"]
];

foreach ($categories as $category => $products) {
    foreach ($products as $product) {
        echo "3. Checking $category - $product\n";
        if ($product == "Shoes") {
            echo "3. Product found: $product\n"; // Output: Product found: Shoes
            break 2;
        }
    }
}

echo "\n";

/*
4. Break dalam switch
   - Menghentikan eksekusi case setelah dijalankan.
*/
$orderStatus = "shipped";
switch ($orderStatus) {
    case "pending":
        echo "4. Your order is being processed.\n";
        break;
    case "shipped":
        echo "4. Your order is on the way.\n"; // Output: Your order is on the way.
        break;
    case "delivered":
        echo "4. Your order has been delivered.\n";
        break;
    default:
        echo "4. Unknown order status.\n";
}

echo "\n";

/*
5. Break dalam loop pencarian database simulasi
   - Menghentikan pencarian setelah user ditemukan.
*/
$databaseUsers = [
    ["id" => 1, "name" => "Michael", "role" => "admin"],
    ["id" => 2, "name" => "Sarah", "role" => "editor"],
    ["id" => 3, "name" => "David", "role" => "customer"]
];

$searchName = "Sarah";
foreach ($databaseUsers as $user) {
    if ($user["name"] == $searchName) {
        echo "5. User found: {$user['name']} with role {$user['role']}\n";
        // Output: User found: Sarah with role editor
        break;
    }
}

echo "\n";

/*
6. Break dengan kondisi kompleks (simulasi API request loop)
   - Berhenti setelah data valid ditemukan.
*/
$apiResponses = [
    ["status" => 404, "message" => "Not Found"],
    ["status" => 500, "message" => "Server Error"],
    ["status" => 200, "message" => "OK"]
];

foreach ($apiResponses as $response) {
    echo "6. Checking API response: {$response['status']}\n";
    if ($response["status"] == 200) {
        echo "6. Valid data received: {$response['message']}\n"; // Output: Valid data received: OK
        break;
    }
}

echo "\n";

/*
7. Break pada infinite loop untuk keamanan
   - Mencegah program terus berjalan tanpa henti.
*/
$count = 0;
while (true) {
    $count++;
    echo "7. Loop count: $count\n";
    if ($count >= 3) {
        echo "7. Max loop limit reached. Stopping.\n"; // Output: Max loop limit reached. Stopping.
        break;
    }
}
