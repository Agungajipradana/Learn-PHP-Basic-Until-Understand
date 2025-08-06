<?php

/*
PHP Increment / Decrement Operators
Digunakan untuk menambah (+1) atau mengurangi (-1) nilai variabel.
Digunakan untuk:
- Menambah jumlah view
- Counter pagination
- Tracking login attempts
- Sistem antrian atau like

Operator:
- ++$x (Pre-increment)
- $x++ (Post-increment)
- --$x (Pre-decrement)
- $x-- (Post-decrement)
*/

echo "-------------------- PHP Increment / Decrement Operators --------------------\n\n";

/*
1. Pre-increment (++$x)
   - Tambah dulu, lalu tampilkan.
   - Berguna untuk penomoran otomatis sebelum data ditampilkan.
*/

$visitor = 100;
echo "1. Visitors before: $visitor\n";
echo "   Visitors now: " . ++$visitor . "\n"; // Output: 101

echo "\n";

/*
2. Post-increment ($x++)
   - Tampilkan dulu, lalu tambah.
   - Cocok untuk menampilkan nomor baris di tabel.
*/

$orderNumber = 200;
echo "2. Order printed: " . $orderNumber++ . "\n"; // Output: 200
echo "   Next order: $orderNumber\n"; // Output: 201

echo "\n";

/*
3. Pre-decrement (--$x)
   - Kurangi dulu, lalu tampilkan.
   - Cocok saat countdown sistem atau limit kuota akses.
*/

$remainingSlots = 5;
echo "3. Slot taken, remaining: " . --$remainingSlots . "\n"; // Output: 4

echo "\n";

/*
4. Post-decrement ($x--)
   - Tampilkan dulu, lalu kurangi.
   - Cocok untuk sistem antrian atau sistem tiket mundur.
*/

$queueNumber = 10;
echo "4. Queue now serving: " . $queueNumber-- . "\n"; // Output: 10
echo "   Next in line: $queueNumber\n"; // Output: 9

echo "\n";

/*
5. Kombinasi increment dan logic web
   - Menghitung berapa kali tombol like ditekan.
*/

$likes = 0;
echo "5. Like clicked!\n";
$likes++;
echo "   Total likes: $likes\n"; // Output: 1

$likes++;
echo "   Total likes: $likes\n"; // Output: 2
