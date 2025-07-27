# PHP Scalar Type Challenges

Tipe data skalar adalah tipe data paling dasar dalam PHP yang hanya menyimpan satu nilai tunggal.  
PHP memiliki empat tipe skalar utama: **Integer**, **Float**, **Boolean**, dan **String**.

Berikut adalah daftar tantangan yang dapat kamu kerjakan untuk melatih pemahaman tentang tipe skalar di PHP.

## Easy

1. Buat variabel `$age` dan isi dengan umur kamu (misalnya 25).
2. Buat variabel `$currentYear` dan isi dengan tahun sekarang, lalu hitung tahun lahir dengan mengurangkan `$age` dari `$currentYear`.
3. Tambahkan dua bilangan bulat dan simpan hasilnya ke dalam `$sum`.
4. Buat variabel `$price` dan isi dengan angka pecahan seperti `19.99`.
5. Kalikan `$price` dengan `0.9` untuk menghitung diskon 10%.
6. Buat variabel `$isOnline` dan isi dengan `true`.
7. Gunakan `if` untuk menampilkan “Online” jika `$isOnline` bernilai `true`.
8. Buat variabel `$isAdmin` dan isi dengan `false`, lalu tampilkan hasil `var_dump()`-nya.
9. Buat variabel `$firstName` dan `$lastName`, lalu gabungkan keduanya menjadi `$fullName`.
10. Gunakan `gettype()` untuk menampilkan tipe data dari variabel `$price`.

## Medium

11. Ubah string `"php is fun"` menjadi huruf kapital semua menggunakan `strtoupper()`.
12. Hitung panjang string `"OpenAI"` menggunakan fungsi `strlen()`.
13. Ambil karakter pertama dari string `"ChatGPT"` menggunakan `$string[0]`.
14. Gunakan `strpos()` untuk memeriksa apakah kata `"world"` ada dalam `"Hello world"`.
15. Gunakan `substr()` untuk mengambil kata `"Script"` dari string `"JavaScript"`.
16. Gunakan `trim()` untuk menghapus spasi di awal dan akhir dari string `"   Hello   "`.
17. Ganti kata `"cat"` dengan `"dog"` dalam string `"The cat sat on the mat"` menggunakan `str_replace()`.
18. Ubah string `"apple,banana,orange"` menjadi array menggunakan `explode()`.
19. Gabungkan array `["one", "two", "three"]` menjadi string dengan koma menggunakan `implode()`.
20. Format angka `12345.678` menjadi `"12,345.68"` menggunakan `number_format()`.

## Hard

21. Buat fungsi untuk memvalidasi alamat email menggunakan `filter_var()` dan `strpos()`.
22. Ganti semua kemunculan `"foo"` menjadi `"bar"` dalam string `"foo foo foo"` menggunakan `str_replace()`.
23. Normalisasi string `"e\u0301"` menjadi bentuk tersusun menggunakan `Normalizer::normalize()` dari ekstensi intl.
24. Bandingkan dua string `"apple"` dan `"banana"` menggunakan `strcmp()` dan jelaskan hasilnya.
25. Ambil domain dari URL seperti `"https://www.example.com/page"` menggunakan `parse_url()`.
26. Temukan semua angka dalam string `"abc123def456"` menggunakan `preg_match_all()`.
27. Buat fungsi yang menambahkan nol di depan angka agar panjangnya selalu 8 digit.
28. Tunjukkan bahwa string di PHP bersifat immutable dengan mencoba mengubah satu karakternya secara langsung.
29. Jelaskan perbedaan antara string dengan tanda kutip tunggal `' '` dan kutip ganda `" "` dalam PHP.
30. Buat fungsi untuk membalik string tanpa menggunakan `strrev()`.

---

Silakan kerjakan tantangan di atas untuk memperdalam pemahamanmu tentang tipe data skalar dalam PHP — mulai dari dasar, menengah, hingga tingkat lanjut.
