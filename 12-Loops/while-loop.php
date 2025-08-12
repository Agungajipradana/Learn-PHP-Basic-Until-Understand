<?php

/*
PHP while Loop
Digunakan untuk menjalankan blok kode selama kondisi terpenuhi.
*/

echo "-------------------- PHP while Loop --------------------\n\n";

/*
1. Simple while loop
   - Menampilkan pesan sapaan sebanyak 3 kali.
*/
$name = "Alice";
$count = 1;
while ($count <= 3) {
    echo "1. Hello, $name! Message number $count\n"; // Output: Hello, Alice! Message number 1 ... 3
    $count++;
}

echo "\n";

/*
2. while loop dengan break
   - Menghentikan loop saat jumlah request mencapai batas.
*/
$requests = 1;
while (true) {
    echo "2. Processing API request #$requests\n";
    if ($requests == 5) {
        echo "2. Max requests reached, stopping loop.\n"; // Output: Max requests reached, stopping loop.
        break;
    }
    $requests++;
}

echo "\n";

/*
3. while loop dengan continue
   - Melewati user yang tidak aktif saat proses pengecekan.
*/
$users = [
    ["name" => "Bob", "active" => true],
    ["name" => "Charlie", "active" => false],
    ["name" => "Diana", "active" => true],
];
$index = 0;
while ($index < count($users)) {
    if (!$users[$index]["active"]) {
        $index++;
        continue; // Lewati user yang tidak aktif
    }
    echo "3. Active user: {$users[$index]['name']}\n"; // Output: Active user: Bob, Active user: Diana
    $index++;
}

echo "\n";

/*
4. while loop nested (bersarang)
   - Memeriksa produk dalam kategori, berhenti jika 'Laptop' ditemukan.
*/
$categories = [
    "Clothes" => ["T-shirt", "Jeans", "Hat"],
    "Electronics" => ["Phone", "Laptop", "Tablet"],
    "Books" => ["Novel", "Magazine", "Comics"]
];
$catKeys = array_keys($categories);
$i = 0;
$found = false;
while ($i < count($catKeys)) {
    $category = $catKeys[$i];
    $products = $categories[$category];
    $j = 0;
    while ($j < count($products)) {
        echo "4. Checking $category product: {$products[$j]}\n";
        if ($products[$j] == "Laptop") {
            echo "4. Product found: Laptop in $category\n"; // Output: Product found: Laptop in Electronics
            $found = true;
            break;
        }
        $j++;
    }
    if ($found) {
        break;
    }
    $i++;
}

echo "\n";

/*
5. while loop dengan kondisi kompleks
   - Mengirim email ke sejumlah user sampai batas maksimal.
*/
$usersToEmail = ["Eve", "Frank", "Grace", "Hank", "Ivy"];
$maxEmails = 3;
$sentEmails = 0;
$pos = 0;
while ($pos < count($usersToEmail) && $sentEmails < $maxEmails) {
    echo "5. Sending email to: {$usersToEmail[$pos]}\n"; // Output: Mengirim email ke 3 user pertama
    $sentEmails++;
    $pos++;
}

echo "\n";

/*
6. Infinite while loop dengan break untuk keamanan
   - Mencegah loop berjalan tanpa henti, contoh polling request.
*/
$pollCount = 0;
while (true) {
    $pollCount++;
    echo "6. Polling attempt #$pollCount\n";
    if ($pollCount >= 4) {
        echo "6. Max polling attempts reached. Stopping loop.\n"; // Output: Max polling attempts reached. Stopping loop.
        break;
    }
}

echo "\n";

/*
7. Alternative syntax while loop
   - Bentuk alternatif menggunakan titik dua dan endwhile.
   - Menampilkan pesan beberapa kali.
*/
$message = "Welcome to Web Development!";
$times = 1;
while ($times <= 3):
    echo "7. $message - instance #$times\n"; // Output: Welcome to Web Development! - instance #1 ... #3
    $times++;
endwhile;
