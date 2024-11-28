<?php
/*
Fungsi dengan Return Value (Function with Return Value)
Fungsi yang mengembalikan nilai menggunakan kata kunci return. Nilai yang dikembalikan dapat digunakan di tempat lain dalam kode.
*/

function calculateAreaofCircle($radius)
{
    return pi() * $radius * $radius;
}

$luas = calculateAreaofCircle(7);
echo "Circle Area: $luas";  // Output: Circle Area: 153.9380400259