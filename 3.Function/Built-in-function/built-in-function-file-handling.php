<?php
/*
File Handling Functions pada PHP adalah fungsi bawaan yang digunakan untuk bekerja dengan file. Fungsi-fungsi ini memungkinkan kita untuk melakukan operasi seperti membaca, menulis, membuat, menghapus, dan memodifikasi file di server.

File handling sangat penting dalam pengembangan aplikasi web, terutama untuk menyimpan data, membuat log, atau menangani file upload dari pengguna.
*/

echo "-------------------- Fungsi Built-in File Handling yang Sering Digunakan --------------------" . "\n\n";

/*
1. fopen()

    - Digunakan untuk membuka file. Fungsi ini memerlukan dua parameter:
        - Nama file.
        - Mode akses (seperti r untuk membaca, w untuk menulis, dll.).
*/

echo "1. fopen() : Digunakan untuk membuka file. Fungsi ini memerlukan dua parameter." . "\n\n";

$file = fopen("example.txt", "w"); // Membuka file dalam mode tulis
if ($file) {
    echo "File opened successfully!";
    fclose($file); // Menutup file setelah selesai digunakan
}
echo "\n\n";

/*
2. fwrite()

    - Digunakan untuk menulis data ke file.
*/

echo "2. fwrite() : Digunakan untuk menulis data ke file." . "\n\n";

$file = fopen("example.txt", "w");
if ($file) {
    fwrite($file, "Hello, World!\n");
    fwrite($file, "This is a second line.");
    fclose($file);
    echo "Data written successfully!";
}
echo "\n\n";

/*
3. fread()

    - Digunakan untuk membaca isi file.
*/

echo "3. fread() : Digunakan untuk membaca isi file." . "\n\n";

$file = fopen("example.txt", "r");
if ($file) {
    $content = fread($file, filesize("example.txt")); // Membaca seluruh isi file
    echo $content;
    fclose($file);
}
echo "\n\n";

/*
4. fclose()

    - Digunakan untuk menutup file yang telah dibuka.
*/

echo "4. fclose() : Digunakan untuk menutup file yang telah dibuka." . "\n\n";

$file = fopen("example.txt", "r");
// Operasi lainnya di file
fclose($file); // Menutup file
echo "\n\n";

/*
5. file_get_contents()

    - Membaca seluruh isi file ke dalam string.
*/

echo "5. file_get_contents() : Membaca seluruh isi file ke dalam string." . "\n\n";

$content = file_get_contents("example.txt");
echo $content;
echo "\n\n";

/*
6. file_put_contents()

    - Menulis data ke file. Jika file tidak ada, file akan dibuat.
*/

echo "6. file_put_contents() : Menulis data ke file. Jika file tidak ada, file akan dibuat." . "\n\n";

file_put_contents("example.txt", "Hello from file_put_contents!");
echo "File written successfully!";
echo "\n\n";

/*
7. unlink()

    - Digunakan untuk menghapus file.
*/

echo "7. unlink() : Digunakan untuk menghapus file." . "\n\n";

if (unlink("example.txt")) {
    echo "File deleted successfully!";
} else {
    echo "Failed to delete the file.";
}
echo "\n\n";

/*
8. rename()

    - Mengganti nama atau memindahkan file.
*/

echo "8. rename() : Mengganti nama atau memindahkan file." . "\n\n";

if (rename("example.txt", "new_example.txt")) {
    echo "File renamed successfully!";
} else {
    echo "Failed to rename the file.";
}
echo "\n\n";

/*
9. feof()

    - Memeriksa apakah file pointer telah mencapai akhir file.
*/

echo "9. feof() : Memeriksa apakah file pointer telah mencapai akhir file." . "\n\n";

$file = fopen("example.txt", "r");
while (!feof($file)) {
    $line = fgets($file); // Membaca baris demi baris
    echo $line;
}
fclose($file);
echo "\n\n";

/*
10. filesize()

    - Mengembalikan ukuran file dalam byte.
*/

echo "10. filesize() : Mengembalikan ukuran file dalam byte." . "\n\n";

$fileSize = filesize("example.txt");
echo "The file size is $fileSize bytes.";
echo "\n\n";

/*
11. is_file()

    - Memeriksa apakah sebuah path adalah file.
*/

echo "11. is_file() : Memeriksa apakah sebuah path adalah file." . "\n\n";

if (is_file("example.txt")) {
    echo "The path is a file.";
} else {
    echo "The path is not a file.";
}
echo "\n\n";

/*
12. mkdir() dan rmdir()

    - mkdir() digunakan untuk membuat direktori.
    - rmdir() digunakan untuk menghapus direktori kosong.
*/

echo "12. mkdir() :  digunakan untuk membuat direktori. dan rmdir() : digunakan untuk menghapus direktori kosong." . "\n\n";

// Membuat direktori
if (mkdir("new_directory")) {
    echo "Directory created successfully!";
}

// Menghapus direktori
if (rmdir("new_directory")) {
    echo "Directory removed successfully!";
}
echo "\n\n";

/*
13. copy()

    - Menyalin file dari satu lokasi ke lokasi lain.
*/

echo "13. copy() : Menyalin file dari satu lokasi ke lokasi lain." . "\n\n";

if (copy("example.txt", "copy_example.txt")) {
    echo "File copied successfully!";
} else {
    echo "Failed to copy the file.";
}
echo "\n\n";
