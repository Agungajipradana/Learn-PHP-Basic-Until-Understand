# PHP Operators Challenges

Operators adalah fitur fundamental dalam PHP yang digunakan untuk melakukan operasi pada variabel dan nilai. Tantangan ini dibagi dalam tiga level: Easy, Medium, dan Hard, dan mencakup berbagai operator seperti Arithmetic, Assignment, Comparison, Increment/Decrement, Logical, String, Array, dan Conditional Assignment Operators.

---

## Easy

1. Tambahkan dua harga produk menggunakan operator `+` dan tampilkan totalnya.
2. Kurangi saldo pengguna dengan total pembelian menggunakan operator `-`.
3. Hitung total biaya dengan mengalikan jumlah barang dan harga satuan menggunakan operator `*`.
4. Hitung rata-rata nilai dari tiga angka menggunakan operator `/`.
5. Tampilkan sisa pembagian antara jumlah item dan batas maksimal item per halaman menggunakan `%`.
6. Gabungkan `firstName` dan `lastName` menjadi `fullName` menggunakan operator `.`.
7. Gunakan operator `=` untuk menetapkan status pengguna sebagai `"Active"`.
8. Tambahkan 1 ke variabel `$counter` menggunakan `++$counter`, lalu tampilkan.
9. Cek apakah dua string `'admin'` dan `'admin'` bernilai sama menggunakan `==`.
10. Gunakan operator `??` untuk menampilkan "Guest" jika variabel `$userName` belum diset.

---

## Medium

11. Gunakan `-=` untuk mengurangi stok barang setiap kali ada transaksi pembelian.
12. Bandingkan dua nilai yang berbeda tipe data tetapi sama secara nilai menggunakan `==` dan `===`.
13. Gunakan `xor` untuk memvalidasi bahwa hanya satu promo yang aktif dari dua variabel.
14. Periksa apakah email input tidak sama dengan email yang tersimpan menggunakan operator `!=`.
15. Tambahkan beberapa bagian teks menjadi satu log menggunakan `.=` dan tampilkan hasilnya.
16. Gabungkan array `$userData` dan `$userPreferences` menggunakan operator `+`, lalu cetak hasilnya.
17. Buat validasi login menggunakan `&&` untuk memastikan email dan password keduanya benar.
18. Gunakan operator ternary `?:` untuk menampilkan “Adult” jika umur >= 18, jika tidak tampilkan “Teenager”.
19. Hitung sisa kuota dengan menampilkan nilai variabel sebelum dan sesudah `--$quota`.
20. Gunakan `===` untuk memeriksa apakah dua array memiliki struktur dan nilai yang identik.

---

## Hard

21. Buat fungsi `compareRatings($r1, $r2)` menggunakan operator spaceship `<=>` untuk membandingkan dua rating.
22. Simulasikan fallback form: jika `$_POST['email']` tidak diset, gunakan `"default@example.com"` dengan operator `??`.
23. Bangun sistem logging menggunakan `.=` untuk membuat catatan log lengkap dengan waktu (`date()`).
24. Gunakan ternary bersarang untuk menilai hasil ujian: A (>=90), B (>=80), C (>=70), D lainnya.
25. Buat sistem paginasi di mana nomor halaman bertambah menggunakan `++` dalam loop.
26. Buat validasi akses sistem: hanya user dengan `isAdmin === true` dan `status === "active"` yang bisa masuk.
27. Tambahkan point loyalty ke user menggunakan `+=`, lalu gunakan ternary untuk menentukan level user.
28. Bandingkan dua konfigurasi aplikasi (`$configA` dan `$configB`) dengan `!==` dan tampilkan apakah berbeda.
29. Gunakan kombinasi operator `??` untuk menampilkan `displayName`, jika tidak ada `username`, jika tidak juga, tampilkan `"Anonymous"`.
30. Gabungkan array `$adminRoles` dan `$userRoles` menggunakan `+`, lalu periksa kesamaannya menggunakan `==` dan identitasnya menggunakan `===`.

---

Tantangan ini disusun untuk membantumu memahami operator dalam berbagai konteks nyata pada pengembangan aplikasi web dengan PHP. Kerjakan sesuai urutan atau fokus pada bagian yang paling sesuai dengan kebutuhan belajar saat ini.
