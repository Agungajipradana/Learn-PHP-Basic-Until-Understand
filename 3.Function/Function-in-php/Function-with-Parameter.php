<?php

/*
Fungsi dengan Parameter (Function with Parameters)
Fungsi dengan parameter memungkinkan Anda untuk mengirimkan data ke dalam fungsi melalui parameter. Parameter ini digunakan dalam tubuh fungsi untuk memproses nilai yang diberikan.

Contoh:
*/

function call($name)
{
    echo "Halo, $name!";
}

call("John");  // Output: Halo, John!