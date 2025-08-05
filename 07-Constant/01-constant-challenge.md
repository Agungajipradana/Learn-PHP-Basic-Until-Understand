# PHP Constant Challenges

Konstanta (constant) dalam PHP digunakan untuk menyimpan nilai tetap yang tidak dapat diubah selama eksekusi program. Tantangan ini akan membantu kamu memahami penggunaan `define()`, `const`, serta konsep konstanta global dan konstanta dalam class.

---

## Easy

1. Buat konstanta bernama `SITE_NAME` dengan nilai `"My Personal Blog"` menggunakan `define()`.
2. Tampilkan nilai `SITE_NAME` di browser menggunakan `echo`.
3. Buat konstanta `MAX_USERS` menggunakan `define()` dengan nilai `100`.
4. Tampilkan kalimat: `Maximum allowed users: 100` menggunakan konstanta `MAX_USERS`.
5. Buat konstanta `PI` menggunakan `define()` dan beri nilai `3.14`.
6. Buat class `AppInfo` dengan konstanta `VERSION = "1.0.0"`.
7. Tampilkan nilai `AppInfo::VERSION`.
8. Buat konstanta array `SERVICES` menggunakan `define()` dengan elemen `"email"`, `"chat"`, dan `"blog"`.
9. Tampilkan elemen kedua dari konstanta `SERVICES`.
10. Buat konstanta `GREETING = "Hello, world!"` lalu tampilkan isinya.

---

## Medium

11. Buat class `DatabaseConfig` dengan konstanta `HOST = "localhost"` dan `PORT = 3306`.
12. Buat method static `getConnectionInfo()` untuk menampilkan `localhost:3306`.
13. Gunakan `const` dengan visibility `public` di class `App` untuk mendefinisikan `ENV = "production"`.
14. Tampilkan `App::ENV` dari luar class.
15. Buat konstanta global `API_KEY` dan gunakan dalam fungsi `getKey()`.
16. Gunakan `defined()` untuk mengecek apakah `SITE_NAME` sudah didefinisikan.
17. Buat interface `StatusCode` berisi konstanta `OK = 200`, `NOT_FOUND = 404`.
18. Implementasikan interface tersebut dalam class `HttpResponse`.
19. Tampilkan status `OK` dari dalam class.
20. Buat array konstanta `CONFIG` berisi `debug => true` dan `cache => false`, lalu tampilkan `debug`.

---

## Hard

21. Buat class `AppSettings` dengan `protected const TIMEZONE = "Asia/Jakarta"` dan method static untuk mengaksesnya.
22. Buat class `Security` dengan konstanta `TOKEN_EXPIRY = 3600` lalu buat fungsi untuk mengecek sisa waktu token.
23. Buat class `MailService` dengan 2 konstanta: `FROM_ADDRESS` dan `REPLY_TO`, lalu tampilkan keduanya.
24. Buat fungsi `logEnvironment()` yang memeriksa apakah `ENV` adalah `"production"`, `"staging"`, atau `"development"`.
25. Buat class `UserRole` yang menggunakan konstanta untuk mendefinisikan `"admin"`, `"editor"`, dan `"viewer"`.
26. Tampilkan nama-nama peran dari `UserRole` di dalam loop.
27. Buat class `Currency` dengan konstanta `USD = "$"`, `EUR = "€"`, lalu tampilkan format harga dalam masing-masing mata uang.
28. Buat `Config` class dengan konstanta array `DATABASE`, lalu tampilkan `host`, `port`, dan `user`.
29. Buat fungsi `printConstant(string $name)` yang menerima nama konstanta dan mencetak nilainya jika tersedia.
30. Bandingkan kecepatan akses `const` dan `define()` menggunakan `microtime()` dan dokumentasikan hasilnya.

---

Silakan selesaikan tantangan ini satu per satu untuk memperkuat pemahamanmu tentang **konstanta di PHP**, baik secara global maupun dalam konteks OOP.
