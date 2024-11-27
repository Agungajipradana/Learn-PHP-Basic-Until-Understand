<?php

/*
Apa itu Built-in Function Number pada PHP?
*/

echo "--------------------------------------------------- Fungsi-fungsi Built-in Number yang Sering Digunakan ---------------------------------------------------" . "\n\n";

/*
1. abs()

    - Mengembalikan nilai absolut dari sebuah angka (menghilangkan tanda negatif).
*/

echo "1. abs(): Mengembalikan nilai absolut dari sebuah angka (menghilangkan tanda negatif)." . "\n\n";

echo "Mengembalikan nilai absolut dari angka -10: " . abs(-10) . "\n\n"; // Output: 10

/*
2. round()

    - Membulatkan angka ke bilangan terdekat.
*/

echo "2. round(): Membulatkan angka ke bilangan terdekat." . "\n\n";

echo "Membulatkan angka ke bilangan terdekat dari 3.4: " . round(3.4) . "\n\n";  // Output: 3

echo "Membulatkan angka ke bilangan terdekat dari 3.5: " . round(3.5) . "\n\n";  // Output: 4

echo "Membulatkan angka ke bilangan terdekat dari 3.1234 dengan panjang 2 angka dibelakang titik (.): " . round(3.1234, 2) . "\n\n"; // Output: 3.12

echo "Membulatkan angka ke bilangan terdekat dari 3.1234 dengan panjang 3 angka dibelakang titik (.): " . round(3.1234, 3) . "\n\n"; // Output: 3.123

/*
3. ceil()

    - Membulatkan angka ke atas (ke bilangan bulat terdekat yang lebih besar).
*/

echo "3. ceil(): Membulatkan angka ke atas (ke bilangan bulat terdekat yang lebih besar)." . "\n\n";

echo "Membulatkan angka ke atas dari 4.3: " . ceil(4.3) . "\n\n"; // Output: 5

echo "Membulatkan angka ke atas dari 7.1: " . ceil(7.1) . "\n\n"; // Output: 8


/*
4. floor()

    - Membulatkan angka ke bawah (ke bilangan bulat terdekat yang lebih kecil).
*/

echo "4. floor(): Membulatkan angka ke bawah (ke bilangan bulat terdekat yang lebih kecil)." . "\n\n";

echo "Membulatkan angka ke bawah dari 4.7: " . floor(4.7) . "\n\n"; // Output: 4

echo "Membulatkan angka ke bawah dari 7.9: " . floor(7.9) . "\n\n"; // Output: 7

/*
5. pow()

    - Menghitung eksponen (bilangan pangkat).
*/

echo "5. pow(): Menghitung eksponen (bilangan pangkat)." . "\n\n";

echo "Menghitung bilangan pangkat dari 2 pangkat 3: " . pow(2, 3) . "\n\n"; // Output: 8 (2 pangkat 3)

echo "Menghitung bilangan pangkat dari 5 pangkat 2: " . pow(5, 2) . "\n\n"; // Output: 25 (5 pangkat 2)


/*
6. sqrt()

    - Menghitung akar kuadrat dari sebuah angka.
*/

echo "6. sqrt(): Menghitung akar kuadrat dari sebuah angka." . "\n\n";

echo "Menghitung akar kuadrat dari 16: " . sqrt(16) . "\n\n"; // Output: 4

echo "Menghitung akar kuadrat dari 81: " . sqrt(81) . "\n\n"; // Output: 9

/*
7. max()

    - Mengembalikan nilai maksimum dari sekumpulan angka.
*/

echo "7. max(): Mengembalikan nilai maksimum dari sekumpulan angka." . "\n\n";

echo "Mengembalikan nilai maksimum dari (1, 2, 3, 4, 5): " . max(1, 2, 3, 4, 5) . "\n\n"; // Output: 5

echo "Mengembalikan nilai maksimum dari ([10, 20, 30]): " . max([10, 20, 30]) . "\n\n"; // Output: 30

/*
8. min()

    - Mengembalikan nilai minimum dari sekumpulan angka.
*/

echo "8. min(): Mengembalikan nilai minimum dari sekumpulan angka." . "\n\n";

echo "Mengembalikan nilai minimum dari (1, 2, 3, 4, 5): " . min(1, 2, 3, 4, 5) . "\n\n"; // Output: 1

echo "Mengembalikan nilai minimum dari ([10, 20, 30]): " . min([10, 20, 30]) . "\n\n";  // Output: 10

/*
9. rand()

    - Menghasilkan angka acak.
    - Jika diberikan parameter, menghasilkan angka acak dalam rentang tertentu.
*/

echo "9. rand(): Menghasilkan angka acak." . "\n\n";

echo "Menghasilkan angka acak: " . rand() . "\n\n"; // Output: angka acak

echo "menghasilkan angka acak dalam rentang tertentu antara angka minimal 1 sampai maksimal 100: " . rand(1, 100) . "\n\n";  // Output: angka acak antara 1 dan 100

/*
10. number_format()

    - Memformat angka menjadi bentuk yang lebih mudah dibaca (dengan separator ribuan dan desimal).
*/

echo "10. Memformat angka menjadi bentuk yang lebih mudah dibaca (dengan separator ribuan dan desimal)." . "\n\n";

echo "Memformat angka menjadi bentuk yang lebih mudah dibaca dari angka (1234567): " . number_format(1234567) . "\n\n"; // Output: 1,234,567

echo "Memformat angka menjadi bentuk yang lebih mudah dibaca dari angka (1234567.891) dengan panjang 2 angka dibelakang titik (.): " . number_format(1234567.891, 2) . "\n\n"; // Output: 1,234,567.89

echo "------------------------------------------------------- Contoh Program Lengkap -------------------------------------------------------" . "\n\n";

// Nilai Absolut
echo "Nilai Absolut:\n";
echo abs(-25) . "\n\n"; // Output: 25

// Pembulatan
echo "Pembulatan:\n";
echo "Round (3.5): " . round(3.5) . "\n"; // Output: 4
echo "Ceil (4.3): " . ceil(4.3) . "\n";  // Output: 5
echo "Floor (4.7): " . floor(4.7) . "\n\n"; // Output: 4

// Eksponen dan Akar
echo "Eksponen dan Akar Kuadrat:\n";
echo "2 pangkat 3: " . pow(2, 3) . "\n"; // Output: 8
echo "Akar kuadrat 25: " . sqrt(25) . "\n\n"; // Output: 5

// Nilai Maksimum dan Minimum
echo "Nilai Maksimum dan Minimum:\n";
echo "Max: " . max(1, 4, 7, 2) . "\n"; // Output: 7
echo "Min: " . min(1, 4, 7, 2) . "\n\n"; // Output: 1

// Angka Acak
echo "Angka Acak:\n";
echo "Angka acak tanpa batas: " . rand() . "\n"; // Output: angka acak
echo "Angka acak antara 1-100: " . rand(1, 100) . "\n\n"; // Output: angka acak antara 1 dan 100

// Format Angka
echo "Format Angka:\n";
echo number_format(123456789) . "\n"; // Output: 123,456,789

echo number_format(1234567.89, 2) . "\n"; // Output: 1,234,567.89

