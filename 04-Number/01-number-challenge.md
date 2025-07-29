# PHP Number Type Challenges

Tipe data **Number** di PHP digunakan untuk menyimpan nilai numerik seperti integer, float, dan ekspresi matematika lainnya.

Berikut ini adalah daftar tantangan untuk melatih pemahaman kamu terhadap tipe data numerik dalam PHP.

---

## Easy

1. Buat variabel `$price` dengan nilai integer 100 dan tampilkan.
2. Buat variabel `$discount` dengan nilai float 15.5 dan tampilkan.
3. Hitung dan tampilkan hasil dari `$price + $discount`.
4. Gunakan `var_dump()` untuk menampilkan tipe data dari `$price`.
5. Buat operasi pembagian antara 100 dan 3, lalu tampilkan hasilnya.
6. Buat variabel `$value` berisi `"123"` (string) lalu cast ke integer dan tampilkan hasilnya.
7. Gunakan `is_numeric()` untuk mengecek apakah `"200.50"` adalah angka.
8. Hitung total belanja dari string `"150"` + 20 (integer), dan tampilkan totalnya.
9. Buat float `"99.99"` dari input string, lalu cast menjadi integer dan tampilkan.
10. Lakukan penjumlahan dua nilai float `12.5` dan `3.75`.

---

## Medium

11. Buat perhitungan diskon: dari harga `"250"` dan diskon `"10"` (keduanya string), hitung total harga setelah diskon.
12. Uji apakah hasil dari `sqrt(-1)` adalah NaN menggunakan `is_nan()`.
13. Cek apakah hasil `log(-100)` menghasilkan NaN, lalu tampilkan pesan validasi.
14. Buat fungsi `safeDivide($a, $b)` yang membagi `$a` dengan `$b`, tapi mengembalikan `"Invalid"` jika `$b == 0`.
15. Buat array `["200", "abc", "300.50", "-20.5", "xyz"]` dan tampilkan hanya nilai yang valid numerik.
16. Lakukan casting string `"456.78abc"` ke integer dan jelaskan hasilnya di komentar.
17. Tampilkan hasil dari `(int) true`, `(int) false`, dan `(int) null`.
18. Buat fungsi `isStrictNumeric()` menggunakan regex yang hanya menerima angka valid (`"123"`, `"45.67"`, `"-50"`).
19. Simulasikan data dari API dalam bentuk string dan konversikan ke integer untuk `price`, `views`, dan `quantity`.
20. Buat perhitungan hasil diskon 100% dan validasi agar hasil tidak bernilai negatif atau NaN.

---

## Hard

21. Buat sistem kuota penyimpanan berbasis `INF` untuk akun premium.
22. Buat fungsi `safeSqrt($number)` yang hanya mengembalikan hasil akar jika tidak menghasilkan NaN.
23. Buat sistem yang menolak casting jika hasil string numerik bernilai 0 akibat string tidak valid (misalnya `"abc"`).
24. Simulasikan form input harga dalam format `"1,500.75"` (dengan koma) dan ubah menjadi float valid.
25. Buat sistem validasi dan perhitungan harga akhir dari data JSON (string) yang berisi: `price`, `discount`, dan `tax` (semua dalam string).
26. Buat fungsi `castAndValidate($value)` yang hanya me-return `(int)` jika input adalah numerik yang valid, selain itu kembalikan pesan error.
27. Simulasikan pengecekan API dengan nilai `"INF"` dan jika ditemukan, tampilkan "Unlimited".
28. Buat array `["10", "abc", 50.75, sqrt(-1), INF]` lalu filter semua nilai yang bukan NaN dan bukan infinity.
29. Buat form simulasi sederhana untuk menghitung total belanja: input 3 item harga dalam string lalu hitung total.
30. Buat logika sistem yang mendeteksi apakah nilai `price`, `discount`, atau `total` menjadi NaN atau Infinity dan tampilkan pesan error.
