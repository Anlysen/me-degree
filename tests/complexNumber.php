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
echo $user->name . "<br>";


// $int1 = 81;
// function  number() {
//   $int1 = 18;
//   echo $int1 . "<br>";
// }
// number();

// function getMessage() {
//     $message = "Привет, дружище!!";
//     echo $message . "<br>";
// }
// getMessage();

// echo 20 % 3 . "<br>";
// echo 14 / 3 . "<br>";

// $a = 12;
// $b = 7;
// $a -= $b;
// $b *= 2;
// echo $a . "<br>";

// $a = 3;
// $b = 8;
// $c = $a + $b;
// echo $c . "<br>";

// $a = readline(3);
// $b = readline(8);
// $c = $a + $b;
// echo $c . "<br>";

// $num1 = 3;
// $num2 = 9;
// $num1 = $num1 ** 2;
// $num2 = $num2 ** 2;

// echo $num1 . "<br>"; // 9
// echo $num2 . "<br>"; // 81

// // Работа с массивом
// $numbers = [40, 54, 66, 5];

// // Складываем первые 3 числа
// $sum1 = $numbers[0] + $numbers[1] + $numbers[2]; // 160

// // Умножаем на 4-е число
// $sum2  = $sum1 * $numbers[3]; // 800

// // Находим остаток от деления
// $sum3 = $sum2 % 10; // 0

// // Вычитаем остаток от деления
// $sum4 = $sum2 - $sum3; // 800

// // Делим на 5
// $result = $sum4 / 5; // 160

// echo "Результат: " . $result;

// $array = [20, 5, 4, 3];
// $res1 = $array[0] * $array[1];
// $res2 = $res1 / $array[3];
// $res3 = $res2 - $array[2];
// echo $res3 . "<br>";

// $diff = ["Andrew", "wos", "born", "in", 1993, "year!"];
// echo "$diff[0] $diff[1] $diff[2] $diff[3] $diff[4] $diff[5]";

// $country = "Canada";
// if ($country === "USA") {
//     echo "Washington <br>";
// } elseif ($country === "Canada") {
//     echo "Toronto <br>";
// } elseif ($country === "France") {
//     echo "Paris <br>";
// } else {
//     echo "No correctly country! <br>";
// }

// $h = 0;
// while ($h < 3){
//     echo "Hello, my friend!<br>";
//     $h++;
// }

// $y = 3;
// do {
//     echo "Good afternoon!<br>";
//     $y--;
// } while ($y > 1);

$x = 10;
do {
    echo "Step " . $x . "<br>";
    $x--;
} while ($x >= 8);

for ($z = 1; $z < 4; $z++) {
    echo $z . "<br>";
}

$l = 1;
for (; $l < 4;) {
    echo $l . "<br>";
    $l++;
}

$a = 5;
if ($a > 0) {
    echo 1 . "<br>";
} elseif ($a == 0) {
    echo 0;
} else {
    echo -1;
}

// Seasons
$mouth = "Апрель";

switch ($mouth) {
    case "Декабрь":
    case "Январь":
    case "Февраль":
        echo "Зима";
        break;
    case "Март":
    case "Апрель":
    case "Май":
        echo "Весна";
        break;
    case "Июнь":
    case "Июль":
    case "Август":
        echo "Лето";
        break;
    case "Сентябрь":
    case "Октябрь":
    case "Наябрь":
        echo "Осень";
        break;
}
