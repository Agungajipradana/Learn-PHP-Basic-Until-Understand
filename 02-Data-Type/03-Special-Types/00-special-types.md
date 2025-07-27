# Special Types (Tipe Khusus) dalam PHP

Special types adalah tipe data khusus yang memiliki fungsi atau perilaku unik di PHP. Mereka tidak termasuk dalam tipe skalar maupun gabungan, tetapi tetap penting untuk dikenali karena sering digunakan dalam pengelolaan alur program dan interaksi dengan sistem eksternal.

---

## 1. Null

Tipe `null` merepresentasikan **ketiadaan nilai**. Ketika sebuah variabel tidak memiliki nilai atau secara eksplisit diset menjadi `null`, maka tipenya adalah `NULL`.

Contoh:

```php
$selectedItem = null;

if (is_null($selectedItem)) {
    echo "No item selected.";
}
```

Catatan:

- Variabel yang belum diinisialisasi akan memiliki nilai `null`.
- Fungsi `is_null()` digunakan untuk memeriksa apakah suatu variabel bernilai null.

---

## 2. Resource

Tipe `resource` digunakan untuk merepresentasikan **referensi ke sumber daya eksternal**, seperti file, koneksi database, atau stream. Resource tidak dapat dimanipulasi secara langsung, tetapi digunakan melalui fungsi-fungsi PHP tertentu.

Contoh:

```php
$file = fopen("example.txt", "r");

if (is_resource($file)) {
    echo "File is opened as a resource.";
    fclose($file);
}
```

Catatan:

- Resource adalah tipe data **khusus dan bersifat internal**, dan digunakan dalam operasi sistem tingkat rendah.
- Fungsi `fopen()`, `mysqli_connect()`, dan sejenisnya menghasilkan resource.
- Selalu pastikan untuk menutup resource (misalnya dengan `fclose()`) setelah selesai digunakan untuk menghindari memory leak.

---

## Ringkasan

| Tipe     | Keterangan                                         |
| -------- | -------------------------------------------------- |
| null     | Menyatakan bahwa variabel tidak memiliki nilai     |
| resource | Referensi ke sumber daya eksternal (file, DB, dsb) |
