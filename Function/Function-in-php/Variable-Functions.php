<?php
/*
PHP memungkinkan Anda untuk memanggil fungsi menggunakan variabel yang berisi nama fungsi tersebut. Ini memungkinkan Anda untuk memanggil fungsi secara dinamis.
*/

function halo() {
    echo "Halo, World!";
}

$fungsi = "halo";  // Nama fungsi disimpan dalam variabel
$fungsi();  // Memanggil fungsi halo() menggunakan variabel