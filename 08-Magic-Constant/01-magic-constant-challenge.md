# PHP Magic Constants Challenges

Magic constants adalah konstanta bawaan PHP yang nilainya tergantung pada lokasi tempat ia digunakan. Tantangan ini akan membantumu memahami `__LINE__`, `__FILE__`, `__DIR__`, `__FUNCTION__`, `__CLASS__`, `__METHOD__`, `__NAMESPACE__`, `__TRAIT__`, dan `ClassName::class`, yang sering digunakan dalam debugging, logging, dan pengembangan aplikasi berbasis OOP atau framework.

---

## Easy

1. Tampilkan baris tempat fungsi `echo` berada menggunakan `__LINE__`.
2. Tampilkan path lengkap file saat ini menggunakan `__FILE__`.
3. Tampilkan direktori file menggunakan `__DIR__`.
4. Buat fungsi `showFunctionName()` dan tampilkan nama fungsi menggunakan `__FUNCTION__`.
5. Buat class `User` dengan method `showClass()` dan tampilkan nama class menggunakan `__CLASS__`.
6. Buat method static `getName()` dalam class `Helper`, lalu tampilkan `__METHOD__`.
7. Buat trait `Logger` dengan method `log()` yang menampilkan `__TRAIT__`.
8. Buat class `Customer` dan tampilkan `Customer::class` di luar class.
9. Buat namespace `App\Services`, lalu tampilkan `__NAMESPACE__` di dalam fungsi.

---

## Medium

10. Buat dua class `Admin` dan `Member`, lalu simpan nama class-nya masing-masing menggunakan `ClassName::class` ke dalam array.
11. Buat fungsi `debugInfo()` dalam class `PageController` yang menampilkan `__CLASS__`, `__METHOD__`, dan `__LINE__`.
12. Buat trait `Timestampable` lalu gunakan trait tersebut dalam class `Article`, tampilkan nama trait dengan `__TRAIT__`.
13. Buat class `RouteHandler` di dalam namespace `App\Http`, lalu tampilkan `__NAMESPACE__`.
14. Buat fungsi `logPosition()` yang mencetak informasi posisi dengan `__FUNCTION__`, `__FILE__`, dan `__LINE__`.
15. Buat class `AuthController` dan simulasikan error log menggunakan `__CLASS__`, `__METHOD__`, dan `__LINE__`.

---

## Hard

16. Buat struktur namespace `App\Controllers\Admin`, lalu tampilkan `__NAMESPACE__` di dalam fungsi `getCurrentNamespace()`.
17. Buat class `APIHandler` dengan method `call($methodName)` yang mencetak `__CLASS__` dan `__METHOD__` dinamis.
18. Buat class `ServiceLoader` yang menerima nama class melalui `::class`, lalu instansiasi objek secara dinamis menggunakan `new`.
19. Buat sistem logging sederhana yang mencatat nama class, fungsi, dan baris saat terjadi error menggunakan magic constants.
20. Buat fungsi `getSourceMap()` yang mengembalikan array berisi nama file, direktori, baris, nama class, dan nama method dari lokasi pemanggil.

---

Silakan kerjakan tantangan ini secara bertahap untuk mengasah kemampuan menggunakan magic constants dalam pengembangan aplikasi PHP modern. Tantangan ini sangat relevan terutama saat kamu membangun framework, melakukan logging, debugging, dan membangun arsitektur aplikasi berbasis OOP.
