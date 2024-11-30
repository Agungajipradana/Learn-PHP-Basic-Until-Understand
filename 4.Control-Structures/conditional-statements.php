<?php

/*
Control structures pada PHP adalah blok kode yang digunakan untuk mengontrol alur eksekusi program berdasarkan kondisi tertentu atau pola perulangan. Dengan control structures, kita dapat menentukan apakah suatu bagian kode harus dijalankan atau dilewati.

Control structures pada PHP terdiri dari:

    1. Conditional Statements: Untuk pengambilan keputusan berdasarkan kondisi tertentu.
    2. Looping Structures: Untuk menjalankan blok kode secara berulang hingga kondisi tertentu terpenuhi.
*/

echo "-------------------- Jenis Control Structures (1. Conditional Statements) --------------------" . "\n\n";

/*
a. If Statement

    - Digunakan untuk menjalankan kode jika suatu kondisi benar (true).
*/

echo "a. If Statement: Digunakan untuk menjalankan kode jika suatu kondisi benar (true)." . "\n\n";

$age = 20;
if ($age >= 18) {
    echo "You are an adult.";
}

echo "\n\n";

/*
b. If-Else Statement

    - Menentukan dua jalur eksekusi, tergantung pada kondisi.
*/

echo "b. If-Else Statement: Menentukan dua jalur eksekusi, tergantung pada kondisi." . "\n\n";

$age = 16;
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

echo "\n\n";

/*
c. If-Elseif-Else Statement

    - Menentukan lebih dari dua jalur eksekusi berdasarkan beberapa kondisi.
*/

echo "c. If-Elseif-Else Statement: Menentukan lebih dari dua jalur eksekusi berdasarkan beberapa kondisi." . "\n\n";

$score = 85;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 75) {
    echo "Grade: B";
} else {
    echo "Grade: C";
}

echo "\n\n";

/*
d. Switch Statement

    - Digunakan untuk membandingkan satu nilai dengan beberapa kasus.
*/

echo "d. Switch Statement: Digunakan untuk membandingkan satu nilai dengan beberapa kasus." . "\n\n";

$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "Start of the work week.";
        break;
    case "Friday":
        echo "End of the work week.";
        break;
    default:
        echo "It's a regular day.";
}

echo "\n\n";
