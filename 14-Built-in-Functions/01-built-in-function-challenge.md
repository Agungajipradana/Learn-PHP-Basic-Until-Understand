# PHP Built-in Functions Challenges

## Easy

1. Buat array berisi `["John", "Michael", "Sarah"]`, lalu hitung jumlah elemennya dengan `count()`.
2. Tambahkan nama `"Emma"` ke dalam array menggunakan `array_push()`, lalu cetak hasilnya.
3. Hapus elemen terakhir array menggunakan `array_pop()` dan tampilkan hasilnya.
4. Cek apakah `"Sarah"` ada di dalam array menggunakan `in_array()` dan tampilkan pesan yang sesuai.
5. Gabungkan dua array nama menggunakan `array_merge()` dan tampilkan hasilnya.
6. Buat variabel `$value = true`, lalu cek tipe datanya dengan `is_bool()`.
7. Gunakan `empty()` untuk mengecek apakah variabel `$email` kosong.
8. Tampilkan tanggal hari ini dengan format `Y-m-d` menggunakan `date()`.
9. Tampilkan angka acak antara 1 dan 100 menggunakan `rand()`.
10. Ubah string `"hello world"` menjadi huruf kapital semua menggunakan `strtoupper()`.

---

## Medium

11. Cek apakah variabel `"12345"` adalah angka menggunakan `is_numeric()`.
12. Gunakan `round()` untuk membulatkan angka `7.6` ke bilangan bulat terdekat.
13. Buat string `"Hello, World!"` lalu hitung panjangnya menggunakan `strlen()`.
14. Potong string `"Programming"` menjadi `"Program"` menggunakan `substr()`.
15. Ganti kata `"World"` menjadi `"PHP"` dalam string `"Hello World"` menggunakan `str_replace()`.
16. Dapatkan timestamp saat ini menggunakan `time()` dan tampilkan.
17. Ubah string `"2025-12-31"` menjadi timestamp menggunakan `strtotime()`.
18. Tulis teks `"Learning PHP Built-in Functions"` ke file `note.txt` menggunakan `file_put_contents()`.
19. Baca isi file `note.txt` menggunakan `file_get_contents()` dan tampilkan.
20. Buka file `note.txt` menggunakan `fopen()` dalam mode baca, lalu tutup kembali.

---

## Hard

21. Gunakan `array_search()` untuk menemukan posisi elemen `"Sarah"` dalam array.
22. Gunakan `array_unique()` untuk menghapus nilai duplikat dari array `[1, 2, 2, 3, 4, 4, 5]`.
23. Buat array asosiatif dengan kunci `"name"` dan `"age"`, lalu ambil semua kunci menggunakan `array_keys()`.
24. Gunakan `ceil()` untuk membulatkan angka `4.1` ke atas, lalu `floor()` untuk membulatkan angka `4.9` ke bawah.
25. Gunakan `mktime()` untuk membuat timestamp dari `1 Januari 2025` pukul `12:00:00`.
26. Gunakan `var_dump()` untuk menampilkan tipe dan nilai variabel dari berbagai tipe data (string, integer, boolean).
27. Gunakan `fread()` untuk membaca 10 karakter pertama dari file `note.txt`.
28. Buat fungsi yang menerima teks, lalu mengubahnya menjadi **slug URL** (huruf kecil dan tanda `-`) menggunakan `strtolower()` dan `str_replace()`.
29. Gunakan `implode()` untuk menggabungkan array `["apple", "banana", "cherry"]` menjadi string `"apple-banana-cherry"`.
30. Gunakan `explode()` untuk memecah string `"red,green,blue"` menjadi array, lalu tampilkan setiap elemennya.
