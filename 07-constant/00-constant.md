# Constant dalam PHP

Konstanta adalah **identifier (nama)** untuk nilai tetap. Setelah didefinisikan, nilai konstanta **tidak dapat diubah atau diredefinisi** selama eksekusi skrip.

Konstanta sangat berguna untuk menyimpan nilai tetap seperti nama aplikasi, versi, atau konfigurasi penting yang tidak seharusnya berubah.

---

## 1. Create a PHP Constant

Gunakan fungsi `define()` untuk membuat konstanta.

```php
// Membuat konstanta APP_NAME
define("APP_NAME", "MyWebApp");

// Menampilkan nilai konstanta
echo APP_NAME; // Output: MyWebApp
```

Catatan:

- Nama konstanta **tidak diawali dengan `$`**.
- Konstanta biasanya ditulis dalam **huruf kapital** agar mudah dibedakan.

---

## 2. PHP `const` Keyword

Selain `define()`, PHP juga menyediakan keyword `const` untuk membuat konstanta.

```php
// Konstanta dengan const
const COMPANY_NAME = "Tech Solutions";

echo COMPANY_NAME; // Output: Tech Solutions
```

Catatan:

- `const` hanya bisa digunakan di level global atau di dalam class.
- Tidak bisa digunakan dalam kondisi (misalnya di dalam if statement).

---

## 3. PHP Constant Arrays

PHP mendukung **array sebagai konstanta** (hanya menggunakan `define()` di versi < PHP 5.6 dan `const` sejak PHP 5.6+).

```php
// Konstanta array dengan define()
define("COLORS", ["Red", "Green", "Blue"]);

echo COLORS[1]; // Output: Green
```

```php
// Konstanta array dengan const (PHP 5.6+)
const STATUS_CODES = [200, 404, 500];

echo STATUS_CODES[2]; // Output: 500
```

---

## 4. Constants are Global

Konstanta secara otomatis bersifat **global**, artinya bisa diakses dari bagian manapun dalam skrip, termasuk di dalam fungsi atau method.

```php
define("SITE_URL", "https://example.com");

function showSiteURL() {
    // Mengakses konstanta global dari dalam fungsi
    echo SITE_URL;
}

showSiteURL(); // Output: https://example.com
```

---

## 5. Konstanta di Dalam Class (Class Constants)

Gunakan keyword `const` untuk membuat konstanta dalam class.

```php
class User {
    const ROLE_ADMIN = "Administrator";
}

echo User::ROLE_ADMIN; // Output: Administrator
```

---

## 6. Perbedaan `define()` vs `const`

| Fitur                      | `define()`    | `const`                     |
| -------------------------- | ------------- | --------------------------- |
| Digunakan di dalam class   | ❌ Tidak bisa | ✅ Bisa                     |
| Dapat digunakan di kondisi | ✅ Ya         | ❌ Tidak                    |
| Versi PHP minimal          | PHP 4         | PHP 5.3+ (5.6+ untuk array) |
| Sintaks                    | Fungsi        | Keyword                     |

---

## 7. Contoh Penggunaan Umum dalam Web Development

```php
define("BASE_URL", "https://mywebsite.com");
define("MAX_UPLOAD_SIZE", 1048576); // 1MB
const DEFAULT_LANG = "en";

// Konstanta array
define("SUPPORTED_LANGUAGES", ["en", "id", "fr"]);
```

---

Dengan memahami konstanta, kamu dapat menulis kode yang **lebih aman, stabil, dan mudah dikelola** untuk pengembangan aplikasi PHP skala kecil hingga besar.
