<?php

/*
Fungsi Anonim (Anonymous Functions)
Fungsi anonim adalah fungsi yang tidak memiliki nama dan sering disebut sebagai closure. Fungsi ini bisa disimpan dalam variabel dan dipanggil tanpa mendefinisikan nama fungsi.
*/

$hello = function($name) {
    return "Halo, $name!";
};

echo $hello("John");  // Output: Halo, John!