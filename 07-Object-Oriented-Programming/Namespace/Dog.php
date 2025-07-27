<?php

namespace Animals\Mammals; // Mendefinisikan namespace Animals\Mammals
// Namespace ini berfungsi untuk mengelompokkan class Dog ke dalam ruang lingkup "Animals\Mammals",
// sehingga dapat digunakan tanpa bentrok dengan class lain yang mungkin memiliki nama sama.

class Dog
{
    // Class Dog berada dalam namespace Animals\Mammals
    public function sound()
    {
        // Method sound() mengembalikan suara khas anjing
        return "Woof! Woof!";
    }
}

/*
Penjelasan:

    - Namespace: namespace Animals\Mammals; membuat ruang lingkup khusus untuk class Dog, sehingga tidak akan berbenturan dengan class lain bernama sama di namespace yang berbeda.
    - Method sound: Merupakan method sederhana yang mengembalikan string "Woof! Woof!", mewakili suara anjing.
    - Namespace sering digunakan dalam proyek yang terstruktur atau menggunakan library pihak ketiga untuk menjaga nama class tetap unik.
*/

/*
Catatan:

    1. Class Dog ini dapat diakses menggunakan namespace "Animals\Mammals\Dog" di luar file ini.
    2. Namespace membantu menjaga organisasi kode, terutama dalam proyek besar dengan banyak class.
*/
