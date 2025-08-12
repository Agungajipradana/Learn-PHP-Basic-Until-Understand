<?php

/*
PHP for Loop
Digunakan untuk menjalankan blok kode dengan perulangan yang jumlahnya diketahui.
*/

echo "-------------------- PHP for Loop --------------------\n\n";

/*
1. Simple for loop
   - Menampilkan pesan sapaan sebanyak 3 kali.
*/
$name = "Alice";
for ($i = 1; $i <= 3; $i++) {
    echo "1. Hello, $name! Message number $i\n";
    // Output: Hello, Alice! Message number 1 ... 3
}

echo "\n";

/*
2. for loop dengan break
   - Menghentikan loop saat iterasi mencapai batas tertentu.
   - Misal: proses pengiriman API request maksimal 5 kali.
*/
for ($request = 1; $request <= 10; $request++) {
    echo "2. Sending API request #$request\n";
    if ($request == 5) {
        echo "2. Max API requests reached, stopping loop.\n";
        // Output: Max API requests reached, stopping loop.
        break;
    }
}

echo "\n";

/*
3. for loop dengan continue
   - Melewati user yang tidak aktif dalam daftar user.
*/
$users = [
    ["name" => "Bob", "active" => true],
    ["name" => "Charlie", "active" => false],
    ["name" => "Diana", "active" => true],
];

for ($i = 0; $i < count($users); $i++) {
    if (!$users[$i]["active"]) {
        continue; // Lewati user yang tidak aktif
    }
    echo "3. Active user: {$users[$i]['name']}\n";
    // Output: Active user: Bob, Active user: Diana
}

echo "\n";

/*
4. Nested for loop
   - Memeriksa produk dalam kategori, berhenti jika produk 'Laptop' ditemukan.
*/
$categories = [
    "Clothes" => ["T-shirt", "Jeans", "Hat"],
    "Electronics" => ["Phone", "Laptop", "Tablet"],
    "Books" => ["Novel", "Magazine", "Comics"]
];

$catKeys = array_keys($categories);
$found = false;

for ($i = 0; $i < count($catKeys); $i++) {
    $category = $catKeys[$i];
    $products = $categories[$category];
    for ($j = 0; $j < count($products); $j++) {
        echo "4. Checking $category product: {$products[$j]}\n";
        if ($products[$j] == "Laptop") {
            echo "4. Product found: Laptop in $category\n";
            // Output: Product found: Laptop in Electronics
            $found = true;
            break;
        }
    }
    if ($found) {
        break;
    }
}

echo "\n";

/*
5. for loop dengan kondisi kompleks
   - Mengirim email ke user sampai batas maksimal tercapai.
*/
$subscribers = ["Eve", "Frank", "Grace", "Hank", "Ivy"];
$maxEmails = 3;
$sentEmails = 0;

for ($i = 0; $i < count($subscribers); $i++) {
    echo "5. Sending email to: {$subscribers[$i]}\n";
    $sentEmails++;
    if ($sentEmails >= $maxEmails) {
        echo "5. Max emails sent. Stopping process.\n";
        break;
    }
}

echo "\n";
