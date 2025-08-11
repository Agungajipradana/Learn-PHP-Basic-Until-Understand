# PHP Switch Statement 

`switch` statement digunakan untuk membandingkan nilai dari sebuah variabel terhadap beberapa kemungkinan nilai (case) dan mengeksekusi blok kode yang sesuai.
Struktur ini mempermudah pengelolaan banyak kondisi dibandingkan `if...elseif...else` berantai.

---

## 1. PHP switch Statement 

```php
<?php
// Contoh sederhana penggunaan switch statement
$name = "John";

// Mengecek nama menggunakan switch
switch ($name) {
    case "John":
        echo "Hello John, welcome back!"; // Output jika $name adalah John
        break;
    case "Michael":
        echo "Hello Michael, nice to see you!";
        break;
    case "Sarah":
        echo "Hello Sarah, how are you today?";
        break;
}
?>
```

**Penjelasan:**

- `switch ($name)` → mengevaluasi nilai dari variabel `$name`.
- `case "John":` → jika nilai `$name` sama dengan `"John"`, eksekusi kode pada case ini.
- `break;` → menghentikan eksekusi agar tidak lanjut ke case berikutnya.

---

## 2. PHP break Keyword (Kata Kunci break di PHP)

`break` digunakan untuk menghentikan eksekusi switch setelah case yang cocok ditemukan.
Jika `break` dihilangkan, eksekusi akan **terus berjalan** ke case berikutnya (fall-through).

```php
<?php
$status = "Active";

switch ($status) {
    case "Active":
        echo "User account is active."; // Output
        break;
    case "Inactive":
        echo "User account is inactive.";
        break;
    case "Banned":
        echo "User account is banned.";
        break;
}
?>
```

---

## 3. PHP default Keyword (Kata Kunci default di PHP)

`default` dijalankan jika tidak ada case yang cocok.
Mirip seperti `else` pada `if...else`.

```php
<?php
$role = "Guest";

switch ($role) {
    case "Admin":
        echo "Access granted to admin panel.";
        break;
    case "Editor":
        echo "Access granted to edit content.";
        break;
    default:
        echo "Access denied. Please login first."; // Output
}
?>
```

---

## 4. Common Code Blocks (Blok Kode Umum)

Beberapa `case` dapat memiliki kode yang sama tanpa diulang, dengan menggabungkan case.

```php
<?php
$day = "Saturday";

switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's weekend! Time to relax."; // Output untuk Saturday & Sunday
        break;
    default:
        echo "It's a working day.";
}
?>
```

---

## 5. Contoh dari Termudah hingga Tersulit

### **Easy**

```php
<?php
$color = "Blue";

switch ($color) {
    case "Red":
        echo "The color is Red.";
        break;
    case "Blue":
        echo "The color is Blue."; // Output
        break;
    case "Green":
        echo "The color is Green.";
        break;
}
?>
```

---

### **Medium**

```php
<?php
$page = "dashboard";

switch ($page) {
    case "home":
        echo "Welcome to the homepage.";
        break;
    case "dashboard":
        echo "Welcome to your dashboard."; // Output
        break;
    case "profile":
        echo "Here is your profile page.";
        break;
    default:
        echo "404 Page Not Found.";
}
?>
```

---

### **Hard**

```php
<?php
$userRole = "Editor";
$userStatus = "Active";

switch ($userRole) {
    case "Admin":
        echo ($userStatus === "Active")
            ? "Admin access granted."
            : "Admin account is not active.";
        break;

    case "Editor":
        echo ($userStatus === "Active")
            ? "Editor access granted."
            : "Editor account is not active."; // Output
        break;

    case "Subscriber":
        echo ($userStatus === "Active")
            ? "Subscriber content access granted."
            : "Subscriber account is not active.";
        break;

    default:
        echo "Unknown role.";
}
?>
```

**Penjelasan tambahan:**

- Menggabungkan `switch` dengan **operator ternary** untuk membuat validasi dalam satu baris.
- Digunakan dalam pengembangan web untuk **kontrol akses berdasarkan peran & status pengguna**.

---

## Kesimpulan

- Gunakan **`switch`** untuk memeriksa satu variabel terhadap banyak kemungkinan nilai.
- Selalu gunakan **`break`** untuk mencegah eksekusi tidak diinginkan (fall-through), kecuali memang diinginkan.
- Gunakan **`default`** sebagai penanganan jika tidak ada kondisi yang cocok.
- **Common Code Blocks** menghemat kode jika beberapa kondisi memiliki hasil yang sama.
