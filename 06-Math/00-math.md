# PHP Math Functions

Fungsi matematika di PHP digunakan untuk melakukan perhitungan numerik. Sangat berguna dalam pengembangan web, seperti perhitungan harga, diskon, statistik, validasi angka, dan lainnya.

---

## 1. `pi()` – Nilai Konstanta Pi

Mengembalikan nilai π (pi), biasanya digunakan dalam perhitungan lingkaran.

```php
echo pi(); // Output: 3.1415926535898
```

---

## 2. `min()` dan `max()` – Nilai Minimum dan Maksimum

Digunakan untuk mencari nilai terkecil dan terbesar dari sekumpulan angka.

```php
$prices = [299, 499, 150, 899, 450];

echo min($prices); // 150
echo max($prices); // 899
```

---

## 3. `abs()` – Nilai Absolut

Mengembalikan nilai positif dari angka (nilai mutlak).

```php
$scoreDiff = -75;
echo abs($scoreDiff); // 75
```

---

## 4. `sqrt()` – Akar Kuadrat

Mengembalikan nilai akar kuadrat dari suatu angka.

```php
$area = 144;
echo sqrt($area); // 12
```

---

## 5. `round()` – Pembulatan Desimal

Membulatkan angka desimal ke bilangan bulat terdekat.

```php
$rating = 4.6;
echo round($rating); // 5
```

---

## 6. `rand()` – Angka Acak

Menghasilkan angka acak dalam rentang tertentu.

```php
echo rand(1, 100); // Misalnya: 57
```

---

## 7. `floor()` dan `ceil()` – Pembulatan Khusus

- `floor()` → membulatkan ke bawah
- `ceil()` → membulatkan ke atas

```php
$price = 19.75;

echo floor($price); // 19
echo ceil($price);  // 20
```

---

## 8. `pow()` – Perpangkatan

Digunakan untuk menghitung pangkat dari sebuah angka.

```php
echo pow(5, 3); // 125
```

---

## 9. `number_format()` – Format Angka

Digunakan untuk memformat angka ribuan/desimal, sangat berguna untuk tampilan data keuangan.

```php
$amount = 1234567.891;

echo number_format($amount, 2, '.', ','); // Output: 1,234,567.89
```

---

## Ringkasan Fungsi

| Fungsi            | Deskripsi                       |
| ----------------- | ------------------------------- |
| `pi()`            | Nilai konstanta π               |
| `min(), max()`    | Nilai terkecil dan terbesar     |
| `abs()`           | Nilai absolut                   |
| `sqrt()`          | Akar kuadrat                    |
| `round()`         | Pembulatan ke bilangan bulat    |
| `rand()`          | Menghasilkan angka acak         |
| `floor(), ceil()` | Pembulatan ke bawah / atas      |
| `pow()`           | Perpangkatan angka              |
| `number_format()` | Format angka ribuan dan desimal |
