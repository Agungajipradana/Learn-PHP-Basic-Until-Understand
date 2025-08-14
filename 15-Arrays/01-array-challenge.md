# PHP Array Challenges

## Easy

1. Buat array berisi `["David", "Alice", "Michael"]`, lalu tampilkan jumlah elemennya menggunakan `count()`.
2. Tambahkan `"Sophia"` ke array menggunakan `array_push()` dan tampilkan hasilnya.
3. Hapus elemen terakhir dari array menggunakan `array_pop()` dan tampilkan hasilnya.
4. Hapus elemen pertama dari array menggunakan `array_shift()` dan tampilkan hasilnya.
5. Cek apakah `"Alice"` ada di dalam array menggunakan `in_array()` dan tampilkan pesan yang sesuai.
6. Urutkan array `["Banana", "Apple", "Orange"]` dalam urutan ascending menggunakan `sort()` dan tampilkan hasilnya.
7. Urutkan array angka `[12, 5, 25, 8]` dalam urutan descending menggunakan `rsort()` dan tampilkan hasilnya.
8. Gabungkan dua array `["HTML", "CSS"]` dan `["JavaScript", "PHP"]` menjadi satu array menggunakan `array_merge()`.
9. Ambil hanya 2 elemen pertama dari array `["Laptop", "Tablet", "Smartphone", "Camera"]` menggunakan `array_slice()`.
10. Gunakan `array_diff()` untuk menghapus nilai `"Tablet"` dari array `["Laptop", "Tablet", "Smartphone"]`.

---

## Medium

11. Hapus elemen dengan index tertentu (misal index `1`) dari array `["Apple", "Banana", "Cherry"]` menggunakan `unset()`.
12. Hapus beberapa elemen (`"Apple"` dan `"Cherry"`) dari array menggunakan `array_diff()`.
13. Urutkan array asosiatif `["p1" => "Laptop", "p2" => "Tablet", "p3" => "Smartphone"]` berdasarkan nilai ascending menggunakan `asort()`.
14. Urutkan array asosiatif `["user3" => "David", "user1" => "Alice", "user2" => "Michael"]` berdasarkan key ascending menggunakan `ksort()`.
15. Urutkan array asosiatif `["David" => 95, "Alice" => 88, "Michael" => 72]` berdasarkan nilai descending menggunakan `arsort()`.
16. Urutkan array asosiatif `["admin" => "Michael", "editor" => "Alice", "subscriber" => "David"]` berdasarkan key descending menggunakan `krsort()`.
17. Gunakan `array_keys()` untuk mendapatkan semua key dari array `["name" => "Alice", "role" => "Editor"]`.
18. Gunakan `array_values()` untuk mendapatkan semua nilai dari array `["name" => "Alice", "role" => "Editor"]`.
19. Gunakan `array_reverse()` untuk membalik urutan array `["Monday", "Tuesday", "Wednesday"]`.
20. Gunakan `implode()` untuk menggabungkan array `["PHP", "MySQL", "JavaScript"]` menjadi string `"PHP, MySQL, JavaScript"`.

---

## Hard

21. Gunakan `usort()` untuk mengurutkan array multidimensi produk berikut berdasarkan harga (price) descending:

```php
[
    ["name" => "Laptop", "price" => 1200],
    ["name" => "Tablet", "price" => 600],
    ["name" => "Smartphone", "price" => 800]
]
```

22. Hapus item `"Smartphone"` dari array multidimensi di atas menggunakan `array_filter()`.
23. Gunakan `array_unique()` untuk menghapus nilai duplikat dari array `["PHP", "JavaScript", "PHP", "HTML"]`.
24. Buat array `["Frontend" => ["HTML", "CSS"], "Backend" => ["PHP", "NodeJS"]]`, lalu ambil semua bahasa di `"Backend"` saja.
25. Gunakan `array_map()` untuk mengubah semua elemen array `["laptop", "tablet", "smartphone"]` menjadi huruf kapital.
26. Gunakan `array_reduce()` untuk menghitung total harga dari array `["Laptop" => 1200, "Tablet" => 600, "Smartphone" => 800]`.
27. Gunakan `array_search()` untuk menemukan key dari nilai `"Tablet"` dalam array `["p1" => "Laptop", "p2" => "Tablet"]`.
28. Gunakan `array_combine()` untuk membuat array asosiatif dari dua array `["name", "role"]` dan `["Alice", "Editor"]`.
29. Gunakan `array_chunk()` untuk membagi array `["Alice", "David", "Michael", "Sophia"]` menjadi grup berisi 2 orang.
30. Buat fungsi yang menerima array nama, lalu menghapus semua elemen yang panjangnya kurang dari 5 huruf menggunakan `array_filter()`.
