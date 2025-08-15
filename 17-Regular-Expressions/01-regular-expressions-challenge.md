# PHP Regex Challenges

## Easy

1. Gunakan `preg_match()` untuk memeriksa apakah string `"My name is John Doe"` mengandung kata `"John"`.
2. Gunakan `preg_match()` untuk memeriksa apakah string `"Hello Alice, welcome!"` mengandung kata `"Alice"` tanpa mempedulikan huruf besar/kecil (gunakan modifier `i`).
3. Gunakan `preg_match_all()` untuk menghitung jumlah kata `"dog"` dalam string `"The dog chased another dog"`.
4. Gunakan `preg_replace()` untuk mengganti kata `"cat"` menjadi `"dog"` dalam string `"The cat is sleeping"`.
5. Gunakan pola `[0-9]` untuk memeriksa apakah string `"Order number: 12345"` mengandung angka.
6. Gunakan `\d` untuk memeriksa apakah string `"Room 7"` mengandung digit.
7. Gunakan `\s` untuk memeriksa apakah string `"Hello world"` mengandung spasi.
8. Gunakan `^` untuk memeriksa apakah string `"Hello world"` diawali dengan kata `"Hello"`.
9. Gunakan `$` untuk memeriksa apakah string `"Welcome home"` diakhiri dengan kata `"home"`.
10. Gunakan `\b` untuk memeriksa apakah kata `"car"` muncul sebagai kata utuh di `"A blue car parked"`.

---

## Medium

11. Gunakan `preg_match()` dengan `|` untuk memeriksa apakah string `"I love pizza"` mengandung `"pizza"` atau `"burger"`.
12. Gunakan `.` untuk memeriksa apakah string `"cat"` memiliki huruf pertama `'c'` dan huruf ketiga `'t'`.
13. Gunakan `[A-Z]` untuk menemukan huruf kapital pertama dalam string `"my Name is Peter"`.
14. Gunakan `[a-z]` untuk menemukan huruf kecil pertama dalam string `"Hello World"`.
15. Gunakan `n+` untuk menemukan semua huruf `"a"` berturut-turut dalam `"I have aaaa apples"`.
16. Gunakan `n{2,5}` untuk memeriksa apakah string `"aaaaa"` memiliki huruf `"a"` sebanyak 2–5 kali berturut-turut.
17. Gunakan grouping `(red|blue) car` untuk memeriksa apakah string `"I saw a red car"` sesuai pola.
18. Gunakan `preg_replace()` dengan regex untuk menghapus semua angka dari string `"User1234Name"`.
19. Gunakan `preg_match_all()` untuk mengambil semua kata yang diawali huruf vokal (`a, e, i, o, u`) dari `"Alice is an amazing developer"`.
20. Gunakan regex untuk memeriksa apakah format tanggal `"2025-08-15"` sesuai pola `YYYY-MM-DD`.

---

## Hard

21. Gunakan regex untuk validasi form pendaftaran dengan aturan:

    - Username: hanya huruf/angka, panjang 5–15
    - Email: format valid
    - Password: minimal 8 karakter

22. Gunakan regex untuk mengekstrak semua alamat email dari teks panjang.
23. Gunakan regex untuk mencari semua `href` dari tag `<a>` di HTML.
24. Gunakan regex untuk mendeteksi apakah string mengandung tag `<script>` (antisipasi XSS).
25. Gunakan regex untuk memvalidasi URL yang hanya mengizinkan `.com` atau `.org`.
26. Gunakan regex untuk memformat nomor `"1234567890"` menjadi `(123) 456-7890`.
27. Gunakan regex untuk mendeteksi komentar HTML (`<!-- comment -->`).
28. Gunakan regex untuk memecah kalimat menjadi array kata (tokenizing).
29. Gunakan regex untuk memeriksa apakah password mengandung minimal:

    - 1 huruf kapital
    - 1 angka
    - 1 simbol

30. Gunakan regex untuk menemukan semua file dengan ekstensi `.jpg` atau `.png` dari daftar string.
