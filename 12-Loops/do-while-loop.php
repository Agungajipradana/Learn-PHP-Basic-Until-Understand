<?php

/*
PHP do...while Loop
Digunakan untuk menjalankan blok kode minimal sekali, lalu mengulang selama kondisi terpenuhi.
*/

echo "-------------------- PHP do...while Loop --------------------\n\n";

/*
1. Simple do...while loop
   - Menampilkan pesan sambutan 3 kali.
*/
$name = "John";
$count = 1;
do {
    echo "1. Hello, $name! Message number $count\n";
    // Output: Hello, John! Message number 1 ... 3
    $count++;
} while ($count <= 3);

echo "\n";

/*
2. do...while loop dengan break
   - Memproses API request hingga mencapai batas maksimal lalu berhenti.
*/
$apiRequest = 1;
do {
    echo "2. Processing API request #$apiRequest\n";
    if ($apiRequest == 5) {
        echo "2. Max API requests reached. Stopping loop.\n";
        // Output: Max API requests reached. Stopping loop.
        break;
    }
    $apiRequest++;
} while (true);

echo "\n";

/*
3. do...while loop dengan continue
   - Melewati user yang tidak aktif saat pengecekan status.
*/
$users = [
    ["name" => "Emma", "active" => true],
    ["name" => "Liam", "active" => false],
    ["name" => "Olivia", "active" => true],
];
$index = 0;
do {
    if (!$users[$index]["active"]) {
        $index++;
        continue; // Lewati user yang tidak aktif
    }
    echo "3. Active user: {$users[$index]['name']}\n";
    // Output: Active user: Emma, Active user: Olivia
    $index++;
} while ($index < count($users));

echo "\n";

/*
4. do...while loop nested
   - Memeriksa status berbagai layanan web, berhenti jika salah satu status 'down'.
*/
$services = [
    ["name" => "Database", "status" => "up"],
    ["name" => "API Server", "status" => "up"],
    ["name" => "Web Server", "status" => "down"],
    ["name" => "Cache", "status" => "up"],
];
$index = 0;
do {
    echo "4. Checking service: {$services[$index]['name']} - Status: {$services[$index]['status']}\n";
    if ($services[$index]['status'] === 'down') {
        echo "4. Service {$services[$index]['name']} is down! Stopping check.\n";
        break;
    }
    $index++;
} while ($index < count($services));

echo "\n";

/*
5. do...while loop dengan kondisi kompleks
   - Mengirim newsletter ke daftar user sampai batas pengiriman tercapai.
*/
$subscribers = ["Eve", "Frank", "Grace", "Hank", "Ivy"];
$maxEmails = 3;
$sentEmails = 0;
$pos = 0;

do {
    echo "5. Sending newsletter to: {$subscribers[$pos]}\n";
    $sentEmails++;
    $pos++;
    if ($sentEmails >= $maxEmails) {
        echo "5. Max emails sent. Ending mailing process.\n";
        break;
    }
} while ($pos < count($subscribers));

echo "\n";

/*
6. Infinite do...while loop dengan break untuk polling status server
   - Mencegah loop berjalan tanpa henti.
*/
$pollCount = 0;
do {
    $pollCount++;
    echo "6. Polling server status attempt #$pollCount\n";
    if ($pollCount >= 4) {
        echo "6. Max polling attempts reached. Stopping loop.\n";
        break;
    }
} while (true);
