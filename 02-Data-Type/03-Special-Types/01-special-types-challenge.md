# PHP Special Type Challenges

Special types adalah tipe data yang memiliki fungsi khusus dan penting dalam pengelolaan alur program serta interaksi dengan sumber daya eksternal.

Berikut ini adalah tantangan untuk memperdalam pemahaman kamu terhadap tipe data **null** dan **resource** dalam PHP.

## Easy

1. Buat variabel `$item` dan isi dengan `null`.
2. Gunakan `is_null()` untuk memeriksa apakah `$item` bernilai null.
3. Tampilkan pesan “Belum ada data” jika `$item` adalah null.
4. Buat variabel `$username` tanpa memberikan nilai, lalu tampilkan hasil `var_dump()`-nya.
5. Gunakan `isset()` untuk memeriksa apakah `$username` sudah terdefinisi.
6. Ubah nilai `$item` dari `null` menjadi `"Book"`, lalu tampilkan.
7. Buat variabel `$data` dan isi dengan nilai dari fungsi yang mengembalikan `null`.
8. Gunakan operator `??` untuk memberikan nilai default jika `$data` bernilai null.
9. Gunakan fungsi `fopen()` untuk membuka file `"sample.txt"` dalam mode baca.
10. Gunakan `is_resource()` untuk memeriksa apakah hasil `fopen()` adalah resource.

## Medium

11. Buat fungsi `getUser()` yang mengembalikan `null` jika data tidak ditemukan.
12. Gunakan `if (!is_null(...))` untuk mengeksekusi kode hanya jika data tidak null.
13. Buat array `$users`, lalu cari elemen dengan `null coalescing operator` (`??`).
14. Buat resource dengan membuka file lalu tampilkan tipe datanya menggunakan `gettype()`.
15. Tulis kode untuk membuka file `"log.txt"` dan membaca isinya hanya jika resource valid.
16. Tutup resource menggunakan `fclose()` setelah selesai digunakan.
17. Coba tampilkan nilai dari variabel null dan lihat hasilnya menggunakan `echo`.
18. Buat variabel `$connection` dan isi dengan `null`, lalu simulasikan kondisi koneksi database gagal.
19. Gunakan `fopen()` pada file yang tidak ada, lalu tangani jika hasilnya `false` atau bukan resource.
20. Buat fungsi `openLogFile()` yang mengembalikan resource atau `null` jika gagal membuka file.

## Hard

21. Buat class `FileHandler` dengan method `open()`, `read()`, dan `close()` menggunakan resource file.
22. Tulis fungsi `safeRead($filename)` yang membuka file, membaca isinya, dan menangani jika gagal dibuka.
23. Simulasikan fungsi `getConfig()` yang bisa mengembalikan `null` atau array konfigurasi.
24. Tulis fungsi `logMessage($message)` yang menulis ke file log menggunakan resource dan menangani error.
25. Buat sistem fallback: jika `$primaryConnection` null, gunakan `$backupConnection`.
26. Gunakan kombinasi `is_null()` dan `fopen()` untuk membuka file dengan validasi berlapis.
27. Implementasikan pola `null object` dalam class `User` agar method tetap bisa dipanggil meskipun objek null.
28. Gunakan `stream_get_meta_data()` untuk melihat metadata dari resource file.
29. Buat fungsi yang menerima parameter bertipe resource, lalu validasi dengan `is_resource()`.
30. Buat simulasi manajemen resource di mana file dibuka dan ditutup otomatis menggunakan blok `try...finally`.

---

Silakan kerjakan tantangan ini untuk memperkuat pemahamanmu tentang tipe data khusus `null` dan `resource` dalam PHP.
