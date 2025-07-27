<?php

/*
Include and Require
Digunakan untuk menyertakan file eksternal ke dalam program.
*/

/*
a. Include

    - Melanjutkan eksekusi meskipun file yang dimasukkan tidak ditemukan.
*/

echo "a. Include: Melanjutkan eksekusi meskipun file yang dimasukkan tidak ditemukan." . "\n\n";

include 'header.php';
echo "Main Content";

echo "\n\n";

/*
b. Require

    - Menghentikan eksekusi jika file tidak ditemukan.
*/

echo "b. Require: Menghentikan eksekusi jika file tidak ditemukan." . "\n\n";

require 'config.php';
echo "Main Content";