<?php
/*
Fungsi Date and Time pada PHP adalah kumpulan fungsi bawaan yang digunakan untuk menangani operasi terkait tanggal dan waktu. Fungsi-fungsi ini memungkinkan kita untuk mendapatkan tanggal dan waktu saat ini, memformat tanggal dan waktu, atau melakukan operasi perhitungan dengan tanggal dan waktu.

Fungsi ini sangat berguna untuk berbagai kebutuhan, seperti mencatat log, mengatur batas waktu, atau menampilkan waktu dalam aplikasi.
*/

echo "-------------------- Fungsi Built-in Date and Time yang Sering Digunakan --------------------" . "\n\n";

/*
1. date()

    - Mengembalikan tanggal atau waktu saat ini dalam format tertentu.
*/

echo "1. date() : Mengembalikan tanggal atau waktu saat ini dalam format tertentu." . "\n\n";

echo date("Y-m-d") . "\n\n"; // Format: Tahun-Bulan-Hari

echo date("H:i:s") . "\n\n"; // Format: Jam:Menit:Detik

/*
2. time()

    - Mengembalikan waktu saat ini dalam detik sejak Unix Epoch (1 Januari 1970 00:00:00 GMT).
*/

echo "2. time() : Mengembalikan waktu saat ini dalam detik sejak Unix Epoch (1 Januari 1970 00:00:00 GMT)." . "\n\n";

echo time() . "\n\n"; // Timestamp saat ini

/*
3. mktime()

    - Membuat timestamp dari nilai tertentu (jam, menit, detik, bulan, hari, tahun).
*/

echo "3. mktime() : Membuat timestamp dari nilai tertentu (jam, menit, detik, bulan, hari, tahun)." . "\n\n";

$timestamp = mktime(15, 30, 0, 12, 25, 2024); // 25 Desember 2024, 15:30:00
echo date("Y-m-d H:i:s", $timestamp) . "\n\n"; // Format tanggal dan waktu

/*
4. strtotime()

    - Mengonversi string waktu ke dalam timestamp.
*/

echo "4. strtotime() : Mengonversi string waktu ke dalam timestamp." . "\n\n";

$timestamp = strtotime("next Monday");
echo date("Y-m-d", $timestamp) . "\n\n"; // Tanggal hari Senin berikutnya

/*
5. getdate()

    - Mengembalikan array dengan detail lengkap dari tanggal dan waktu saat ini atau timestamp tertentu.
*/

echo "5. getdate() : Mengembalikan array dengan detail lengkap dari tanggal dan waktu saat ini atau timestamp tertentu." . "\n\n";

$dateInfo = getdate();
print_r($dateInfo); // Menampilkan detail waktu saat ini
echo "\n\n";

/*
6. checkdate()

    - Memeriksa apakah tanggal yang diberikan valid.
*/

echo "6. checkdate() : Memeriksa apakah tanggal yang diberikan valid." . "\n\n";

if (checkdate(2, 29, 2024)) { // Tahun kabisat
    echo "Tanggal valid.";
} else {
    echo "Tanggal tidak valid.";
}
echo "\n\n";

/*
7. date_default_timezone_set()

    - Mengatur zona waktu default untuk skrip PHP.
*/

echo "7. date_default_timezone_set() : Mengatur zona waktu default untuk skrip PHP." . "\n\n";

date_default_timezone_set("Asia/Jakarta");
echo date("Y-m-d H:i:s") . "\n\n"; // Waktu dengan zona Asia/Jakarta

/*
8. date_diff()

    - Menghitung selisih antara dua tanggal.
*/

echo "8. date_diff() : Menghitung selisih antara dua tanggal." . "\n\n";

$date1 = date_create("2024-12-25");
$date2 = date_create("2024-11-28");
$diff = date_diff($date1, $date2);
echo "Selisih tanggal antara 2024-12-25 dan 2024-11-28" . $diff->format("%R%a days") . "\n\n"; // Selisih dalam hari

/*
9. strftime()

    - Memformat waktu sesuai dengan pengaturan lokal.
*/

echo "9. strftime() : Memformat waktu sesuai dengan pengaturan lokal." . "\n\n";

setlocale(LC_TIME, "id_ID.UTF-8");
echo strftime("%A, %d %B %Y") . "\n\n"; // Hari, Tanggal Bulan Tahun

/*
10. gmdate()

    - Mengembalikan tanggal/waktu dalam zona waktu GMT (Greenwich Mean Time).
*/

echo "10. gmdate() : Mengembalikan tanggal/waktu dalam zona waktu GMT (Greenwich Mean Time)." . "\n\n";

echo gmdate("Y-m-d H:i:s") . "\n\n"; // Tanggal dan waktu GMT

/*
11. date_modify()

    - Memodifikasi objek tanggal.
*/

echo "11. date_modify() : Memodifikasi objek tanggal." . "\n\n";

$date = date_create("2024-11-28");
date_modify($date, "+1 month"); // Menambahkan 1 bulan
echo date_format($date, "Y-m-d") . "\n\n";

/*
12. calendar functions (Opsional untuk kalender spesifik)

    - Fungsi seperti cal_days_in_month() digunakan untuk menghitung jumlah hari dalam bulan tertentu untuk kalender tertentu.
*/

echo "12. cal_days_in_month() :  digunakan untuk menghitung jumlah hari dalam bulan tertentu untuk kalender tertentu." . "\n\n";

echo cal_days_in_month(CAL_GREGORIAN, 2, 2024) . "\n\n"; // Februari 2024 (tahun kabisat)
