# PHP Superglobals (Variabel Superglobal PHP)

PHP menyediakan variabel superglobal yang dapat diakses dari mana saja dalam skrip. Variabel ini berguna untuk menangani data dari server, form, session, cookie, dan lingkungan.

## \$GLOBALS (Variabel Global)

Menampung semua variabel global dalam array asosiatif.

```php
<?php
$name = "John";

function showName() {
    // Mengakses variabel global $name menggunakan $GLOBALS
    echo $GLOBALS['name'];
}

showName(); // Output: John
?>
```

## $\_SERVER (Informasi Server dan Eksekusi)

Berisi informasi tentang server dan lingkungan eksekusi.

```php
<?php
// Menampilkan nama server
echo $_SERVER['SERVER_NAME']; // Output: localhost (tergantung server)

// Menampilkan path skrip
echo $_SERVER['SCRIPT_FILENAME'];
?>
```

## $\_REQUEST (Data Request)

Menampung data dari $\_GET, $\_POST, dan $\_COOKIE.

```php
<?php
// Misal form mengirimkan 'name'
echo $_REQUEST['name']; // Output: nilai dari form
?>
```

## $\_POST (Data Form via POST)

Berisi data yang dikirim dengan metode POST.

```php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    echo "Hello, $name"; // Output: Hello, John
}
?>
```

## $\_GET (Data URL)

Berisi data yang dikirim melalui URL (query string).

```php
<?php
// URL: page.php?name=John
$name = $_GET['name'];
echo $name; // Output: John
?>
```

## $\_FILES (Upload File)

Menyimpan informasi file yang diunggah.

```php
<?php
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    echo $_FILES['file']['name']; // Output: nama file
}
?>
```

## $\_ENV (Variabel Lingkungan)

Berisi variabel lingkungan server.

```php
<?php
echo $_ENV['PATH']; // Output: path environment
?>
```

## $\_COOKIE (Data Cookie)

Menyimpan data cookie yang dikirim dari browser.

```php
<?php
setcookie("user", "John", time() + 3600);
echo $_COOKIE['user']; // Output: John
?>
```

## $\_SESSION (Data Session)

Menyimpan data session.

```php
<?php
session_start();
$_SESSION['user'] = "John";
echo $_SESSION['user']; // Output: John
?>
```

---

**Catatan Keamanan:**

- Selalu validasi dan sanitasi data dari `$_GET`, `$_POST`, `$_REQUEST`, dan `$_COOKIE`.
- Gunakan `filter_input()` untuk keamanan tambahan.
- Pastikan upload file aman dengan memeriksa tipe file dan ukuran.
