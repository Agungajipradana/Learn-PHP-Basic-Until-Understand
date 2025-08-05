# PHP Magic Constants

Magic Constants adalah konstanta bawaan PHP yang nilainya berubah tergantung di mana digunakan. Cocok untuk debugging, logging, dan struktur kode besar.

---

## `__LINE__` – Menampilkan Nomor Baris

```php
echo "1. Baris saat ini: " . __LINE__ . "\n"; // Output: 1. Baris saat ini: (nomor baris ini)
```

---

## `__FILE__` – Path Lengkap File Saat Ini

```php
echo "2. Path file ini: " . __FILE__ . "\n"; // Output: 2. Path file ini: C:\path\to\file.php
```

---

## `__DIR__` – Direktori Tempat File Ini Berada

```php
echo "3. Direktori file: " . __DIR__ . "\n"; // Output: 3. Direktori file: C:\path\to
```

---

## `__FUNCTION__` – Nama Fungsi Saat Ini

```php
function greetUser()
{
    echo "4. Nama fungsi saat ini: " . __FUNCTION__ . "\n"; // Output: greetUser
}
greetUser();
```

---

## `__CLASS__` – Nama Class Saat Ini

```php
class Product
{
    public function getClassName()
    {
        echo "5. Nama class: " . __CLASS__ . "\n"; // Output: Product
    }
}

$product = new Product();
$product->getClassName();
```

---

## `__METHOD__` – Nama Method Saat Ini (Class + Function)

```php
class Order
{
    public function process()
    {
        echo "6. Nama method: " . __METHOD__ . "\n"; // Output: Order::process
    }
}

$order = new Order();
$order->process();
```

---

## `__NAMESPACE__` – Namespace Saat Ini

```php
namespace MyApp;

echo "7. Namespace saat ini: " . __NAMESPACE__ . "\n"; // Output: MyApp
```

> Catatan: Jika tidak berada di namespace, hasilnya string kosong.

---

## `__TRAIT__` – Nama Trait Saat Ini

```php
trait Logger
{
    public function log()
    {
        echo "8. Trait saat ini: " . __TRAIT__ . "\n"; // Output: Logger
    }
}

class App
{
    use Logger;
}

$app = new App();
$app->log();
```

---

## `ClassName::class` – Nama Penuh Class (dengan Namespace jika ada)

```php
class User {}

echo "9. Nama class lengkap: " . User::class . "\n"; // Output: User
```

Jika berada dalam namespace:

```php
namespace Services;

class Auth {}

echo "10. Nama class lengkap dengan namespace: " . Auth::class . "\n"; // Output: Services\Auth
```

---

### Kegunaan Umum dalam Pengembangan Web

| Magic Constant     | Kegunaan Umum Web Development                            |
| ------------------ | -------------------------------------------------------- |
| `__LINE__`         | Debugging log                                            |
| `__FILE__`         | Tracking file load                                       |
| `__DIR__`          | Path konfigurasi relatif                                 |
| `__FUNCTION__`     | Monitoring atau logging fungsi                           |
| `__CLASS__`        | Logging class otomatis                                   |
| `__METHOD__`       | Dokumentasi otomatis                                     |
| `__NAMESPACE__`    | Namespace-based autoloading                              |
| `__TRAIT__`        | Struktur modular                                         |
| `ClassName::class` | Reflection, routing, dependency injection container (DI) |
