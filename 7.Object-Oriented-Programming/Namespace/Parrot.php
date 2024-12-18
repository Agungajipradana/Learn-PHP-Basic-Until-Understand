<?php
namespace Animals\Birds; // Mendefinisikan namespace Animals\Birds
// Namespace ini bertujuan untuk mengelompokkan class Parrot ke dalam kategori "Animals\Birds",
// sehingga class ini memiliki ruang lingkup unik dan tidak akan berbenturan dengan class lain yang mungkin memiliki nama sama.

class Parrot
{
    // Class Parrot berada dalam namespace Animals\Birds
    public function sound()
    {
        // Method sound() mengembalikan suara khas burung beo (parrot)
        return "Squawk!";
    }
}

/*
Penjelasan:

    - Namespace: Membuat ruang lingkup khusus, dalam hal ini Animals\Birds, untuk mengorganisasi class berdasarkan kategori.
    - Class Parrot: Mewakili burung beo dalam kategori Birds pada namespace Animals.
    - Method sound: Mengembalikan string "Squawk!", menggambarkan suara burung beo.
    - Namespace sangat membantu dalam menghindari konflik nama class saat bekerja dengan banyak modul atau library.
*/

/*
Catatan:

    1. Class Parrot dapat diakses menggunakan namespace "Animals\Birds\Parrot".
    2. Dengan menggunakan namespace, class ini dapat digunakan bersamaan dengan class lain bernama sama di namespace berbeda.
    3. Namespace membantu menjaga struktur dan organisasi kode, terutama dalam proyek besar atau saat menggunakan library pihak ketiga.
*/
