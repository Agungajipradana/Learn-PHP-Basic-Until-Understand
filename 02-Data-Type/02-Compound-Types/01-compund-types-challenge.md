# PHP Compound Type Challenges

Compound types digunakan untuk menyimpan kumpulan nilai atau struktur kompleks.

Berikut ini adalah daftar tantangan untuk melatih pemahaman kamu terhadap tipe data **array**, **object**, **callable**, dan **iterable** dalam PHP.

## Easy

1. Buat array `$colors` yang berisi tiga warna favorit kamu.
2. Akses elemen kedua dari array `$colors` dan tampilkan.
3. Buat associative array `$user` dengan key `name`, `email`, dan `age`.
4. Tampilkan nilai dari key `email` di array `$user`.
5. Tambahkan elemen baru ke array `$colors` dengan fungsi `array_push()`.
6. Gunakan `count()` untuk menghitung jumlah elemen dalam array `$colors`.
7. Buat class `Person` dengan properti `$name` dan method `sayHello()`.
8. Instansiasi object `$person` dari class `Person` dan tampilkan hasil `sayHello()`.
9. Buat fungsi bernama `greet()` lalu simpan ke dalam variabel `$fn` dan panggil fungsi tersebut.
10. Buat fungsi `printArray()` yang menerima parameter array dan mencetak semua elemen dengan `foreach`.

## Medium

11. Buat multidimensional array `$matrix` berisi dua baris angka `[1, 2, 3]` dan `[4, 5, 6]`.
12. Akses elemen `5` dari array `$matrix` dan tampilkan.
13. Buat associative array `$book` dengan key `title`, `author`, dan `year`, lalu ubah nilai `year`.
14. Iterasi array `$user` menggunakan `foreach` dan tampilkan setiap key dan value.
15. Buat class `Product` dengan properti `name` dan `price`, lalu instansiasi object `$item`.
16. Buat closure yang menerima `$name` dan mengembalikan `"Hello, $name!"`, simpan di variabel `$welcome`.
17. Buat array `$functions` yang berisi dua fungsi anonim, lalu panggil keduanya.
18. Buat fungsi `applyFunction(callable $fn, $value)` yang memanggil `$fn($value)`.
19. Buat fungsi `printItems(iterable $items)` dan kirim array ke fungsi tersebut.
20. Cek apakah variabel `$matrix` adalah array menggunakan `is_array()`.

## Hard

21. Buat array asosiatif multidimensi `$users` yang berisi beberapa user (dengan key `name` dan `role`), lalu tampilkan semua nama.
22. Buat class `MathHelper` dengan method static `add($a, $b)` dan panggil tanpa membuat objek.
23. Buat class `Logger` yang mengimplementasikan `__invoke()` sehingga objeknya bisa dipanggil seperti fungsi.
24. Buat fungsi `execute(callable $fn)` dan kirim fungsi anonim ke dalamnya.
25. Buat class `Team` yang memiliki properti array `$members`, lalu gunakan loop untuk mencetak semua anggotanya.
26. Implementasikan interface `IteratorAggregate` dalam class `Playlist`, lalu buat objek yang bisa di-looping dengan `foreach`.
27. Buat fungsi yang menerima parameter bertipe `iterable` dan menjumlahkan semua angka di dalamnya.
28. Buat array fungsi-fungsi anonim lalu gunakan loop untuk menjalankan semuanya.
29. Buat object yang memiliki method sebagai callable lalu panggil dengan format `[$object, 'methodName']`.
30. Uji apakah fungsi adalah callable menggunakan `is_callable()`.

---

Silakan kerjakan tantangan ini untuk memperkuat pemahamanmu tentang pengelolaan data kompleks di PHP menggunakan tipe compound.
