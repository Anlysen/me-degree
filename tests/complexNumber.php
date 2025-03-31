<?php

class complexNumber { // Реализует операции сложения, вычитания и умноюжения
    private float $real;
    private float $imaginary;

    public function __construct(float $real, float $imaginary) {
        $this->real = $real;
        $this->imaginary = $imaginary;
    }

    public function add(complexNumber $other) : complexNumber {
        return new complexNumber(
            $this->real + $other->real,
            $this->imaginary + $other->imaginary
        );
    }

    public function subtract(complexNumber $other) : complexNumber {
        return new complexNumber(
            $this->real - $other->real,
            $this->imaginary - $other->imaginary
        );
    }

    public function multiply(complexNumber $other) : complexNumber {
        return new complexNumber(
            $this->real * $other->real - $this->imaginary * $other->imaginary,
            $this->real * $other->imaginary + $this->imaginary * $other->real
        );
    }

    public function __toString(): string {
        return "{$this->real} " . ($this->imaginary >= 0 ? "+ " : "- ") . abs($this->imaginary) . "i";
    }
}

//Пример использования

$z1 = new complexNumber(3, 4);
$z2 = new complexNumber(1, -2);

echo "z1 = $z1 <br>";
echo "z2 = $z2 <br>";
echo "Сложение: " . $z1->add($z2) . "<br>";
echo "Вычитание: " . $z1->subtract($z2) . "<br>";
echo "Умножение: " . $z1->multiply($z2) . "<br>";


// Простая фенкция сложения
function add($a, $b) {
    return $a + $b;
}
echo add(100, 99) . "<br>";

// Колькулятор в виде класса
// class Colculator {
//     public function add($c, $d) {
//         return $c * $d;
//     }
// }
// $result = new Colculator();
// echo $result->add(4, 4) . "<br>";


// Добавление элементов в массив
class ShoppingCart {
    private $items = [];
    
    public function add($item) {
        $this->items[] = $item;
    }

    public function getItems() {
        return $this->items;
    }
}

$cart =new ShoppingCart();
$cart->add("Яблоко");
$cart->add("Банан");

print_r($cart->getItems());
echo "<br>";


// Вычитание значений из массива
class AccountBalance {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function subtract($amount) {
        if ($amount > $this->balance) {
            echo "Недостаточно средств!<br>";
        } else {
            $this->balance -= $amount;
            echo "Списано: $amount. Текущий баланс: $this->balance<br>";
        }
    }
}

$account = new AccountBalance(100);
$account->subtract(30);
$account->subtract(100);


// Статические переменные в функции
function counter() {
    static $count = 0;
    $count++;
    echo $count . "<br>";
}

counter(); // 1
counter(); // 2
counter(); // 3

// Статические свойства и методы в классах
class MyClass {
    // Статическое свойство
    public static $name = "PHP";

    // Статический метод
    public static function greet() {
        echo "Hello, " . self::$name . "<br>";
    }
}

// Вызов статического свойства
echo MyClass::$name . "<br>";

// Вызов статическог метода
MyClass::greet();


// Статические методы с экземплярами классов
class Calculator {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// Вызов статических методов без создания обьекта
echo Calculator::add(5, 10) . "<br>";
echo Calculator::multiply(100, 3) . "<br>";


// Статический метод для работы с экземплярами класса
class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Статический метод для создания экземпляра
    public static function createUser($name) {
        return new self($name); // self - позволяет создать экземпляр самого класса внутри статического метода
    }
}

$user = User::createUser("Andrew Paxton");
echo $user->name;
