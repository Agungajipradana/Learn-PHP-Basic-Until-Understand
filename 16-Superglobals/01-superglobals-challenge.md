# PHP Superglobals Challenges

## Easy

1. Buat halaman yang menampilkan `$_SERVER['HTTP_USER_AGENT']` untuk mengetahui browser yang digunakan.
2. Gunakan `$_SERVER['REQUEST_METHOD']` untuk menampilkan apakah request yang dikirim adalah `GET` atau `POST`.
3. Buat form dengan method `GET` yang mengirimkan parameter `name`, lalu tampilkan nilainya menggunakan `$_GET['name']`.
4. Buat form dengan method `POST` yang mengirimkan parameter `email`, lalu tampilkan nilainya menggunakan `$_POST['email']`.
5. Gunakan `$_REQUEST` untuk mengambil nilai `username` dari form yang bisa dikirim dengan `GET` atau `POST`.
6. Buat cookie bernama `"user"` dengan nilai `"Alice"` yang berlaku selama 1 jam, lalu tampilkan nilai cookie tersebut.
7. Cek apakah cookie `"user"` sudah ada. Jika ada, tampilkan `"Welcome back, [nama]"`, jika tidak tampilkan `"Hello, new visitor!"`.
8. Buat session bernama `"role"` dengan nilai `"admin"`, lalu tampilkan nilai session tersebut.
9. Cek apakah session `"role"` bernilai `"admin"`, jika iya tampilkan `"You have admin access"`.
10. Gunakan `$_SERVER['SERVER_NAME']` untuk menampilkan nama server yang sedang digunakan.

---

## Medium

11. Buat halaman yang menampilkan semua key dan value dari `$_SERVER` menggunakan `foreach`.
12. Gunakan `$_GET` untuk membuat halaman yang menampilkan pesan `"Hello, [name]"` dan jika `name` tidak dikirim, tampilkan `"Hello, Guest"`.
13. Gunakan `$_POST` untuk membuat form login sederhana dengan field `username` dan `password`, lalu tampilkan `"Login successful"` jika `username` dan `password` cocok dengan data yang ditentukan.
14. Gunakan `$_REQUEST` untuk menampilkan nilai `color` yang dikirim lewat `GET` atau `POST`, lalu ubah warna teks sesuai nilai tersebut.
15. Buat cookie `"theme"` yang menyimpan pilihan `"light"` atau `"dark"`, lalu tampilkan halaman dengan background sesuai tema yang tersimpan.
16. Gunakan `setcookie()` untuk menghapus cookie `"theme"` dengan memberi waktu kadaluarsa yang sudah lewat.
17. Gunakan session untuk menyimpan jumlah kunjungan user ke halaman, lalu tampilkan `"You have visited this page X times"`.
18. Hapus session tertentu (misalnya `"role"`) dan cek apakah nilainya sudah tidak ada.
19. Gunakan `session_destroy()` untuk menghapus semua session dan tampilkan pesan `"Session cleared"`.
20. Gunakan `$_SERVER['REMOTE_ADDR']` untuk menampilkan alamat IP user.

---

## Hard

21. Buat sistem login sederhana menggunakan `$_POST` dan `$_SESSION` di mana jika login berhasil, session `"username"` akan diset dan user diarahkan ke halaman dashboard.
22. Gunakan `$_COOKIE` untuk menyimpan username yang terakhir login, lalu tampilkan `"Welcome back, [username]"` saat user mengunjungi kembali halaman.
23. Buat form dengan method `POST` yang mengirimkan data `name` dan `message`, lalu simpan semua pesan di session array dan tampilkan sebagai daftar chat sederhana.
24. Gunakan `$_SERVER['QUERY_STRING']` untuk menampilkan query string yang dikirim di URL.
25. Buat halaman yang hanya bisa diakses jika session `"role"` adalah `"admin"`, jika tidak arahkan ke halaman error.
26. Gunakan `$_SERVER['HTTP_REFERER']` untuk menampilkan halaman asal pengunjung (referrer).
27. Buat cookie `"visit_time"` yang menyimpan waktu terakhir user mengunjungi halaman, lalu tampilkan pesan `"Your last visit was at: [waktu]"`.
28. Buat form pendaftaran sederhana yang memvalidasi data menggunakan `$_POST`, jika valid simpan data di session `"user_data"`.
29. Gunakan session untuk menyimpan data keranjang belanja (shopping cart) sederhana dan tampilkan total item yang ada di keranjang.
30. Buat halaman yang menampilkan semua superglobals (`$_GET`, `$_POST`, `$_COOKIE`, `$_SESSION`, `$_SERVER`, `$_REQUEST`) dalam bentuk tabel.
