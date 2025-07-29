# PHP Casting Challenges

Type casting dalam PHP digunakan untuk mengubah jenis data dari satu tipe ke tipe lainnya. PHP mendukung casting ke: `string`, `int`, `float`, `bool`, `array`, `object`, dan `null`.

Berikut ini adalah daftar tantangan untuk melatih pemahaman kamu terhadap konversi tipe data dalam PHP.

---

## Easy

1. Konversi string `"123"` ke integer dan tambahkan dengan angka `100`.
2. Ubah angka `99.5` menjadi string, lalu gabungkan dengan string `" points"`.
3. Buat variabel `$isActive` bernilai `true`, dan cast ke integer.
4. Ubah string `"false"` menjadi boolean, dan tampilkan hasilnya.
5. Konversi angka `42` ke array, lalu tampilkan isi array-nya dengan `print_r()`.
6. Ubah array `["name" => "John"]` menjadi object, lalu tampilkan properti `name`.
7. Ubah `null` menjadi object dan tampilkan dengan `var_dump()`.

---

## Medium

8. Buat fungsi yang menerima parameter `string`, dan mengembalikan nilai integer hasil casting-nya.
9. Ambil nilai float dari string `"150.75 points"` dengan casting.
10. Buat array numerik `[100, 200, 300]`, lalu ubah ke object dan akses properti indeks ke-1.
11. Cast boolean `false` ke string dan tampilkan panjang string-nya dengan `strlen()`.
12. Buat string JSON `{"product":"Book","price":79}` lalu ubah ke object menggunakan `json_decode()`.
13. Buat class `User` tanpa constructor, lalu instansiasi dan cast object tersebut menjadi array.
14. Buat array `["John", "john@example.com"]` dan ubah ke object, lalu akses nilai email-nya.
15. Buat string `"0"` lalu cast ke boolean, dan jelaskan hasilnya.

---

## Hard

16. Buat class `Product` dengan properti `name`, `stock`, dan `price` (protected/private/public), kemudian cast object ke array dan tampilkan hasilnya.
17. Buat nested array (multidimensional) `["user" => ["name" => "Alice", "age" => 30]]` lalu ubah ke object (nested) dan akses `user->name`.
18. Ubah hasil API JSON menjadi object, lalu akses datanya.
19. Buat fungsi `castToArray($data)` yang menerima tipe apapun dan mengembalikannya dalam bentuk array.
20. Buat fungsi `normalizeData()` yang menerima input berupa string, int, float, atau boolean dan memastikan hasil akhirnya berupa string.
