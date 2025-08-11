# PHP Conditional Statement Challenges

Conditional statement adalah struktur dasar dalam PHP yang digunakan untuk membuat keputusan berdasarkan kondisi tertentu. Tantangan ini dibagi menjadi tiga level: Easy, Medium, dan Hard, mencakup berbagai bentuk pernyataan seperti **if**, **if-else**, **if-elseif-else**, **short hand if (ternary)**, **null coalescing**, dan **nested if**.

---

## Easy

1. Gunakan `if` untuk memeriksa apakah `$status` bernilai `"Active"`, lalu tampilkan pesan "User is active".
2. Gunakan `if-else` untuk memeriksa apakah `$age` >= 18, tampilkan `"Adult"` jika benar, dan `"Teenager"` jika salah.
3. Gunakan `if` untuk memeriksa apakah `$pageTitle` kosong, lalu isi dengan `"Home Page"`.
4. Periksa apakah `$userRole` bernilai `"admin"`, jika ya tampilkan `"Access granted"`.
5. Gunakan `if-else` untuk menampilkan `"In Stock"` jika `$stock` > 0, jika tidak `"Out of Stock"`.
6. Gunakan `if` untuk memeriksa apakah `$cartTotal` >= 100, lalu tampilkan `"Free Shipping"`.
7. Gunakan `if` untuk memeriksa apakah `$isLoggedIn` bernilai true, lalu tampilkan `"Welcome back, user!"`.
8. Gunakan `if-else` untuk memeriksa apakah `$discountCode` sama dengan `"SUMMER2025"`, jika benar tampilkan `"Discount applied"`, jika salah `"Invalid code"`.
9. Gunakan `if` untuk memeriksa apakah `$searchQuery` tidak kosong, lalu tampilkan hasil pencarian.
10. Gunakan `if-else` untuk memeriksa apakah `$language` bernilai `"en"`, jika tidak gunakan default `"id"`.

---

## Medium

11. Gunakan `if-elseif-else` untuk menentukan level membership berdasarkan `$points`: Gold (>=1000), Silver (>=500), Bronze (<500).
12. Gunakan `if-elseif-else` untuk menilai skor ujian: `"A"` (>=90), `"B"` (>=80), `"C"` (>=70), `"D"` lainnya.
13. Gunakan operator ternary `?:` untuk memeriksa apakah `$age` >= 21, jika ya tampilkan `"Allowed"`, jika tidak `"Not Allowed"`.
14. Gunakan ternary untuk menampilkan `"Welcome, $name"` jika `$name` diset, jika tidak `"Welcome, Guest"`.
15. Gunakan null coalescing `??` untuk menampilkan nilai dari `$displayName`, jika null gunakan `$username`, jika juga null gunakan `"Anonymous"`.
16. Gunakan `if-elseif-else` untuk menentukan pesan salam berdasarkan `$time`: `"Good morning"`, `"Good afternoon"`, `"Good evening"`.
17. Gunakan ternary untuk memeriksa apakah `$cartItems` > 0, tampilkan jumlah item atau `"Cart is empty"`.
18. Gunakan null coalescing `??` untuk memeriksa apakah `$profilePicture` tersedia, jika tidak gunakan `"default.jpg"`.
19. Gunakan `if-elseif-else` untuk memeriksa status pembayaran: `"Paid"`, `"Pending"`, `"Failed"`.
20. Gunakan ternary untuk memeriksa apakah `$emailVerified` true, tampilkan `"Email Verified"`, jika tidak `"Please verify your email"`.

---

## Hard

21. Gunakan nested if untuk memeriksa apakah `$userRole` adalah `"admin"` dan `$status` `"active"`, lalu izinkan akses dashboard admin.
22. Gunakan nested if untuk memeriksa login: jika `$email` benar, lanjutkan cek `$password`, lalu tampilkan `"Login successful"` atau `"Wrong password"`.
23. Gunakan nested if untuk memeriksa kategori produk (`"Electronics"`, `"Clothing"`, `"Food"`) dan status stok.
24. Gunakan ternary bersarang untuk menentukan grade: `"A"` (>=90), `"B"` (>=80), `"C"` (>=70), `"D"` lainnya.
25. Gunakan kombinasi `if` dan null coalescing untuk mengatur `$metaDescription` dari input user atau default `"Default description"`.
26. Gunakan nested if untuk memeriksa apakah `$isLoggedIn` true, jika iya periksa apakah `$subscriptionActive` true, lalu tampilkan `"Welcome to Premium"`.
27. Gunakan nested if untuk validasi form: jika `$username` tidak kosong, periksa apakah `$password` minimal 8 karakter.
28. Gunakan ternary untuk menentukan `$buttonLabel` berdasarkan `$isAdmin` dan `$isLoggedIn`.
29. Gunakan nested if untuk memeriksa apakah `$country` adalah `"USA"`, lalu cek `$state` untuk menentukan pajak penjualan.
30. Buat sistem verifikasi login dengan nested if dan null coalescing untuk default value jika data user tidak lengkap.
