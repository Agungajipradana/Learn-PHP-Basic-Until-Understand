# PHP String Challenges

Tipe data `string` digunakan untuk menyimpan teks dan merupakan salah satu tipe data paling umum dalam pengembangan web.

Berikut ini adalah daftar tantangan untuk melatih pemahaman kamu terhadap string di PHP, mulai dari dasar seperti manipulasi teks, hingga teknik lanjutan seperti parsing dan validasi input.

---

## Easy

1. Buat variabel `$name` dengan isi `"John Doe"` dan tampilkan.
2. Gabungkan string `"Hello, "` dan `$name` lalu simpan dalam variabel `$greeting`.
3. Hitung panjang string `"Welcome to PHP"` menggunakan `strlen()`.
4. Hitung jumlah kata dalam string `"PHP is a popular scripting language"` menggunakan `str_word_count()`.
5. Ubah string `"learn php"` menjadi huruf kapital semua.
6. Ubah string `"HELLO WORLD"` menjadi huruf kecil semua.
7. Ganti kata `"World"` dengan `"PHP"` dari string `"Hello World"`.
8. Potong string `"dashboard.php"` menjadi `"dashboard"` menggunakan `substr()`.
9. Hapus spasi di awal dan akhir string `"   hello world   "`.
10. Pecah string `"red,green,blue"` menjadi array menggunakan `explode()`.

---

## Medium

11. Cek apakah kata `"PHP"` terdapat dalam string `"Learn PHP for web development"` dan tampilkan posisi awalnya.
12. Balik string `"abcdefg"` menjadi `"gfedcba"`.
13. Gabungkan variabel `$firstName = "Jane"` dan `$lastName = "Smith"` menjadi `"Jane Smith"`.
14. Buat kalimat menggunakan tanda kutip di dalamnya, seperti: `He said, "PHP is awesome!"`.
15. Buat string yang menampilkan `Name: John` dan `Email: john@example.com` dalam dua baris menggunakan `\n`.
16. Buat format string harga seperti `"Total: $50.00"` menggunakan `\$` untuk menampilkan simbol dolar.
17. Buat fungsi `sanitizeInput($text)` yang menghapus whitespace menggunakan `trim()` dan mengubah ke lowercase.
18. Potong `URL` `"https://example.com/posts/12345"` dan ambil hanya ID (`12345`) di akhir.
19. Simulasikan parsing tag dari string `"php,laravel,javascript"` menjadi array, lalu tampilkan semua tag menggunakan `foreach`.
20. Buat fungsi `maskEmail($email)` yang mengubah `"john@example.com"` menjadi `"j***@example.com"`.

---

## Hard

21. Buat fungsi `slugify($text)` yang mengubah `"Learn PHP Basics"` menjadi `"learn-php-basics"` (hint: `strtolower()`, `str_replace()`).
22. Buat validasi bahwa password memiliki minimal 8 karakter menggunakan `strlen()` dan tampilkan pesan jika terlalu pendek.
23. Simulasikan sistem template sederhana: ubah `"Hello, {{name}}"` menjadi `"Hello, John"` dengan `str_replace()`.
24. Buat fungsi `highlightKeyword($text, $keyword)` yang menambahkan tag `<strong>` pada keyword dalam teks.
25. Buat fungsi `limitWords($text, $limit)` yang hanya menampilkan sejumlah kata pertama dari teks.
26. Buat log multi-line untuk user login seperti:

    ```
    [INFO] User: John Doe
    [INFO] Login Time: 2025-07-28
    ```

27. Buat string JSON `"{"name":"John","age":30}"` lalu ubah menjadi array dengan `json_decode()`.
28. Buat sistem redirect dengan URL path, ambil segmen terakhir dari `/products/detail/12345` dan tampilkan ID.
29. Buat escape karakter untuk mencetak path file `"C:\xampp\htdocs\project"` dan tampilkan.
30. Buat sistem pengecekan apakah input berisi karakter khusus (`!@#$%`) dan tampilkan pesan "Invalid input" jika ditemukan.
