<?php

/*
Fungsi Rekursif (Recursive Functions)
Fungsi rekursif adalah fungsi yang memanggil dirinya sendiri untuk menyelesaikan tugas tertentu. Fungsi ini digunakan ketika masalah yang harus diselesaikan dapat dibagi menjadi sub-masalah yang lebih kecil.
*/

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(5);  // Output: 120