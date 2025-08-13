<?php

declare(strict_types=1);

namespace Tutorial\FunctionsInClass;

/*
Function in Class
Dalam PHP, function di dalam class disebut "method". Method mengoperasikan data (property)
yang dimiliki oleh objek dari class tersebut. Di bawah ini contoh bertahap dari dasar
hingga yang lebih kompleks dan relevan untuk pengembangan web.
*/

echo "-------------------------------- Function in Class --------------------------------\n\n";

/*
1) Basic Class + Simple Method
   - Method sederhana yang mengembalikan salam.
*/
class Greeter
{
    public function sayHello(string $name): string
    {
        return "Hello, $name!";
    }
}

$greeter = new Greeter();
echo $greeter->sayHello("John"); // Output: Hello, John!

echo "\n\n";

/*
2) Class with Property + Setter/Getter
   - Menyimpan nama user dan menampilkannya kembali.
*/
class Profile
{
    private string $name = "";

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return "User's name is " . $this->name;
    }
}

$user = new Profile();
$user->setName("Michael");
echo $user->getName(); // Output: User's name is Michael

echo "\n\n";

/*
3) Constructor to Initialize Object
   - Inisialisasi properti saat objek dibuat.
   - Diberi default value agar tidak memicu warning “expected arguments”.
*/
class ProductItem
{
    private string $name;
    private float $price;

    public function __construct(string $name = "Unknown", float $price = 0.0)
    {
        $this->name  = $name;
        $this->price = $price;
    }

    public function info(): string
    {
        return "{$this->name} costs \${$this->price}";
    }
}

$product = new ProductItem("MacBook Air", 1199.00);
echo $product->info(); // Output: MacBook Air costs $1199

echo "\n\n";

/*
4) Method that Performs a Process (Business Logic)
   - Hitung total harga + pajak (umum di web/e-commerce).
*/
class Order
{
    private float $price;

    public function __construct(float $price = 0.0)
    {
        $this->price = $price;
    }

    public function totalWithTax(float $taxPercent): float
    {
        $tax = $this->price * ($taxPercent / 100);
        return $this->price + $tax;
    }
}

$order = new Order(100.00);
echo "Total price: $" . $order->totalWithTax(10); // Output: Total price: $110

echo "\n\n";

/*
5) Static Method
   - Dapat dipanggil tanpa membuat objek. Cocok untuk helper/utility.
*/
class EmailValidator
{
    public static function isValid(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}

echo EmailValidator::isValid("emma@mail.com") ? "Valid email" : "Invalid email";
// Output: Valid email

echo "\n\n";

/*
6) Inheritance (Pewarisan) + Pemakaian Method Parent
   - Controller turunan yang menggunakan method parent untuk render view.
*/
class BaseController
{
    protected function renderView(string $view): string
    {
        return "Rendering view: $view";
    }
}

class HomeController extends BaseController
{
    public function showHome(): string
    {
        return $this->renderView("home.php");
    }
}

$home = new HomeController();
echo $home->showHome(); // Output: Rendering view: home.php

echo "\n\n";

/*
7) Method Chaining (Fluent Interface)
   - Umum di query builder pada framework web (mis. Laravel/Doctrine).
*/
class SqlQuery
{
    private string $query = "";

    public function select(string $columns): self
    {
        $this->query .= "SELECT $columns ";
        return $this;
    }

    public function from(string $table): self
    {
        $this->query .= "FROM $table ";
        return $this;
    }

    public function where(string $condition): self
    {
        $this->query .= "WHERE $condition";
        return $this;
    }

    public function get(): string
    {
        return $this->query;
    }
}

$query = (new SqlQuery())
    ->select("*")
    ->from("users")
    ->where("id = 1")
    ->get();

echo $query; // Output: SELECT * FROM users WHERE id = 1

echo "\n";
