<?php

/*
PHP Continue Statement
Digunakan untuk melewati iterasi saat ini dan melanjutkan ke iterasi berikutnya dalam loop.
*/

echo "-------------------- PHP Continue Statement --------------------\n\n";

/*
1. Continue in For Loop
   - Melewati pengiriman API request yang statusnya 'skip'.
*/
$statusList = ["success", "skip", "success", "skip", "success"];

for ($i = 0; $i < count($statusList); $i++) {
    if ($statusList[$i] === "skip") {
        continue; // Lewati request yang statusnya 'skip'
    }
    echo "1. Sending API request #" . ($i + 1) . " with status: {$statusList[$i]}\n";
    // Output: Hanya request dengan status 'success' yang diproses
}

echo "\n";

/*
2. Continue in While Loop
   - Melewati user yang tidak aktif saat pengecekan status.
*/
$users = [
    ["name" => "Emma", "active" => true],
    ["name" => "Liam", "active" => false],
    ["name" => "Olivia", "active" => true],
];

$index = 0;

while ($index < count($users)) {
    if (!$users[$index]["active"]) {
        $index++;
        continue; // Lewati user yang tidak aktif
    }
    echo "2. Active user: {$users[$index]['name']}\n";
    // Output: Active user: Emma, Active user: Olivia
    $index++;
}

echo "\n";

/*
3. Continue in Do While Loop
   - Melewati polling server dengan status 'retry' saat cek status server.
*/
$serverStatuses = ["ok", "retry", "ok", "retry", "ok"];
$pos = 0;

do {
    if ($serverStatuses[$pos] === "retry") {
        $pos++;
        continue; // Lewati status retry
    }
    echo "3. Server status: {$serverStatuses[$pos]}\n";
    // Output: Hanya status 'ok' yang ditampilkan
    $pos++;
} while ($pos < count($serverStatuses));

echo "\n";

/*
4. Continue in Foreach Loop
   - Melewati produk yang sedang tidak tersedia saat iterasi.
*/
$products = [
    ["name" => "Laptop", "available" => true],
    ["name" => "Phone", "available" => false],
    ["name" => "Tablet", "available" => true],
];

foreach ($products as $product) {
    if (!$product["available"]) {
        continue; // Lewati produk yang tidak tersedia
    }
    echo "4. Product available: {$product['name']}\n";
    // Output: Laptop dan Tablet saja yang tampil
}
