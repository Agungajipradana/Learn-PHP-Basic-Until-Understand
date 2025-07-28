<?php

/*
Escape characters di PHP digunakan untuk menyisipkan karakter khusus ke dalam string,
seperti tanda kutip, backslash, tab, atau baris baru.
Fitur ini sangat berguna saat menampilkan teks dinamis, output HTML, atau menangani input pengguna.
*/

echo "--------------------------------------------------- Escape Characters ---------------------------------------------------" . "\n\n";

/*
1. Double Quote (\")
    - Digunakan untuk menampilkan tanda kutip ganda di dalam string ber-kutip ganda.
    - Umum digunakan saat mencetak HTML atau JSON.
*/

echo "1. Double Quote\n\n";

echo "He said, \"PHP is awesome!\"\n\n";

/*
2. Single Quote (\')
    - Digunakan untuk menampilkan tanda kutip tunggal di dalam string ber-kutip tunggal.
    - Sering digunakan dalam atribut HTML seperti 'value'.
*/

echo "2. Single Quote\n\n";

echo 'User\'s profile page loaded successfully.' . "\n\n";

/*
3. Backslash (\\)
    - Digunakan untuk menampilkan karakter backslash secara literal.
    - Relevan untuk menampilkan path direktori atau escape karakter dalam JSON.
*/

echo "3. Backslash\n\n";

echo "C:\\xampp\\htdocs\\project\n\n";

/*
4. New Line (\n)
    - Menambahkan baris baru dalam output CLI atau log.
    - Cocok untuk membuat template email teks atau log multiline.
*/

echo "4. New Line\n\n";

echo "Dear user,\nThank you for registering.\n\n";

/*
5. Tab (\t)
    - Menambahkan jarak horizontal (indentasi) dalam teks.
    - Berguna untuk menampilkan data terformat seperti tabel CLI.
*/

echo "5. Tab\n\n";

echo "Name:\tJohn Doe\nEmail:\tjohn@example.com\n\n";

/*
6. Dollar Sign (\$)
    - Digunakan untuk menampilkan simbol dolar tanpa dianggap sebagai variabel.
    - Umum saat menampilkan harga atau nilai uang.
*/

echo "6. Dollar Sign\n\n";

echo "Total amount: \$50.00\n\n";
