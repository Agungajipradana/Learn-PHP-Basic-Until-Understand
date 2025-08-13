# PHP Functions Challenges

Berikut adalah tantangan terkait berbagai jenis fungsi di PHP, mencakup penggunaan **parameter**, **return**, **default value**, **anonymous function**, **recursive**, hingga **variable function**, yang sangat berguna dalam pengembangan web.

---

## Easy

1. Buat fungsi **sayHello()** yang menampilkan `"Hello, World!"`.
2. Buat fungsi **greet()** yang menampilkan `"Hello, everyone!"`, lalu panggil fungsinya.
3. Buat fungsi **greetPerson(\$name)** untuk menampilkan `"Hello, [name]!"` dengan nilai `John`.
4. Buat fungsi **introduce(\$name, \$age)** yang menampilkan `"My name is [name] and I am [age] years old."`.
5. Buat fungsi **welcomeMessage()** tanpa parameter yang menampilkan `"Welcome to our website!"`.
6. Buat fungsi **sayHi(\$name = "Guest")** yang menampilkan `"Hi, [name]!"` dan coba panggil tanpa argumen.
7. Buat fungsi **sum(\$a, \$b)** yang mengembalikan hasil penjumlahan dua angka dan cetak hasilnya.
8. Buat fungsi **printMessage(\$message)** yang menampilkan pesan `"Learning PHP is fun!"`.
9. Buat fungsi **addOne(&\$number)** yang menambahkan 1 ke variabel `$value = 5` menggunakan referensi.
10. Buat fungsi **sumAll(...\$numbers)** yang menerima jumlah argumen tak terbatas dan mengembalikan totalnya.

---

## Medium

11. Buat fungsi **displayValue(\$value)** yang menampilkan nilai, lalu uji dengan angka dan string.
12. Buat fungsi **multiply(int \$a, int \$b): float** yang mengembalikan hasil perkalian dua bilangan bulat.
13. Buat **anonymous function** untuk menampilkan `"Hello, Emily!"` dan simpan ke variabel lalu panggil.
14. Buat fungsi **convertToUpper(\$text)** yang mengubah teks menjadi huruf kapital.
15. Buat fungsi **divide(\$a, \$b)** yang melempar exception jika `$b` bernilai nol.
16. Buat kelas **Person** dengan properti `$name` dan method `setName()` serta `greet()`, lalu panggil.
17. Buat fungsi **factorial(\$n)** secara rekursif untuk menghitung faktorial angka.
18. Buat fungsi **greetHello(\$name)** lalu simpan nama fungsinya di variabel dan panggil menggunakan variable function.
19. Buat fungsi **welcomeUser(\$name = "Visitor")** yang menggunakan default parameter dan uji dengan serta tanpa argumen.
20. Buat fungsi **calculateArea(\$width, \$height)** yang mengembalikan luas persegi panjang.

---

## Hard

21. Buat fungsi **validateEmail(\$email)** yang mengembalikan `true` jika format email valid, `false` jika tidak.
22. Buat fungsi **generateSlug(\$text)** yang mengubah teks menjadi format slug URL (huruf kecil dan tanda `-` antar kata).
23. Buat fungsi **recursiveSum(\$n)** yang menghitung jumlah angka dari 1 sampai `$n` menggunakan rekursi.
24. Buat fungsi **callCustomFunction(\$functionName, \$parameter)** yang memanggil fungsi berdasarkan nama yang dikirim.
25. Buat fungsi **processUsers(...\$names)** yang mencetak sapaan untuk setiap nama yang diberikan.
26. Buat fungsi **calculateDiscount(\$price, \$discount = 10)** yang mengembalikan harga setelah diskon.
27. Buat fungsi **throwErrorIfNegative(\$number)** yang melempar exception jika angka negatif.
28. Buat fungsi **stringManipulator(\$text, \$callback)** yang memanggil fungsi callback untuk memodifikasi teks.
29. Buat fungsi **countdown(\$n)** yang mencetak angka dari `$n` hingga 1 menggunakan rekursi.
30. Buat fungsi **mathOperation(\$a, \$b, \$operation)** yang menerima nama fungsi operasi matematika (`sum`, `multiply`, dll.) lalu memanggilnya.
