# PHP Switch Statement Challenges

Switch statement di PHP digunakan untuk memilih salah satu blok kode untuk dijalankan berdasarkan nilai suatu variabel. Tantangan ini dibagi menjadi tiga level: Easy, Medium, dan Hard, mencakup berbagai skenario penggunaan **switch**, **break**, **default**, dan **nested switch** yang sering digunakan dalam pengembangan web.

---

## Easy

1. Gunakan `switch` untuk memeriksa nilai `$day` dan tampilkan `"Monday"` jika nilainya `"Mon"`.
2. Gunakan `switch` untuk memeriksa nilai `$status` (`"Active"`, `"Inactive"`) dan tampilkan pesan sesuai status.
3. Gunakan `switch` untuk memeriksa `$role` (`"admin"`, `"user"`) dan tampilkan `"Welcome Admin"` atau `"Welcome User"`.
4. Gunakan `switch` untuk memeriksa `$paymentMethod` (`"Credit Card"`, `"PayPal"`) dan tampilkan metode pembayaran yang digunakan.
5. Gunakan `switch` untuk memeriksa `$language` (`"en"`, `"id"`) dan tampilkan teks sambutan.
6. Gunakan `switch` untuk memeriksa `$productCategory` (`"Electronics"`, `"Clothing"`) dan tampilkan kategori produk.
7. Gunakan `switch` untuk memeriksa `$theme` (`"light"`, `"dark"`) dan tampilkan tema aktif.
8. Gunakan `switch` untuk memeriksa `$browser` (`"Chrome"`, `"Firefox"`) dan tampilkan pesan kompatibilitas.
9. Gunakan `switch` untuk memeriksa `$subscription` (`"Free"`, `"Premium"`) dan tampilkan manfaatnya.
10. Gunakan `switch` untuk memeriksa `$shippingMethod` (`"Standard"`, `"Express"`) dan tampilkan estimasi pengiriman.

---

## Medium

11. Gunakan `switch` untuk memeriksa `$membershipLevel` (`"Bronze"`, `"Silver"`, `"Gold"`) dan tampilkan diskon.
12. Gunakan `switch` untuk memeriksa `$httpCode` (`200`, `404`, `500`) dan tampilkan pesan status HTTP.
13. Gunakan `switch` untuk memeriksa `$season` (`"Winter"`, `"Spring"`, `"Summer"`, `"Fall"`) dan tampilkan aktivitas yang direkomendasikan.
14. Gunakan `switch` dengan `default` untuk menampilkan `"Unknown category"` jika `$category` tidak sesuai pilihan yang tersedia.
15. Gunakan `switch` untuk memeriksa `$orderStatus` (`"Pending"`, `"Shipped"`, `"Delivered"`, `"Cancelled"`) dan tampilkan status pengiriman.
16. Gunakan `switch` untuk memeriksa `$deviceType` (`"Mobile"`, `"Tablet"`, `"Desktop"`) dan tampilkan tata letak UI yang sesuai.
17. Gunakan `switch` untuk memeriksa `$paymentStatus` (`"Paid"`, `"Pending"`, `"Failed"`) dan tampilkan instruksi selanjutnya.
18. Gunakan `switch` untuk memeriksa `$dayOfWeek` dan tampilkan apakah hari itu termasuk weekday atau weekend.
19. Gunakan `switch` untuk memeriksa `$fileType` (`"jpg"`, `"png"`, `"gif"`) dan tampilkan tipe file gambar.
20. Gunakan `switch` untuk memeriksa `$notificationType` (`"email"`, `"sms"`, `"push"`) dan tampilkan media notifikasi.

---

## Hard

21. Gunakan `switch` bersarang untuk memeriksa `$role` (`"admin"`, `"editor"`) lalu periksa `$status` (`"active"`, `"inactive"`) dan tampilkan hak akses.
22. Gunakan `switch` untuk memeriksa `$country` (`"USA"`, `"UK"`, `"Australia"`) dan tampilkan format tanggal yang digunakan.
23. Gunakan `switch` bersarang untuk memeriksa `$browser` dan versi browser tertentu.
24. Gunakan `switch` untuk memeriksa `$productCategory` lalu di dalamnya periksa `$availability` (`"in stock"`, `"out of stock"`).
25. Gunakan `switch` untuk memeriksa `$language` (`"en"`, `"es"`, `"fr"`) lalu tampilkan salam sesuai bahasa.
26. Gunakan `switch` untuk memeriksa `$errorCode` lalu berikan saran solusi berdasarkan kode error.
27. Gunakan `switch` untuk memeriksa `$currency` (`"USD"`, `"EUR"`, `"JPY"`) lalu konversi ke nilai lokal.
28. Gunakan `switch` untuk memeriksa `$plan` (`"Basic"`, `"Pro"`, `"Enterprise"`) lalu tampilkan fitur yang tersedia.
29. Gunakan `switch` untuk memeriksa `$theme` lalu di dalamnya periksa `$fontSize` (`"small"`, `"medium"`, `"large"`) untuk konfigurasi UI.
30. Gunakan `switch` bersarang untuk sistem login multi-level: periksa `$role` lalu di dalamnya periksa `$isVerified`.
