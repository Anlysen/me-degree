<?php

echo date("m-d-Y", mktime(0, 0, 0, 12, 32, 1997));
echo "<br>";

$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo "Последний день февраля в 2000 году: " , date('d', $lastday);
echo "<br>";

$last = mktime(0, 0, 0, 5, 0, 2008);
echo date($last);
echo "<br>";


// Сегоднешняя дата
$today = date("m.d.y, h:i");
echo $today;
echo "<br>";

// Случайное число
$num1 = 0;
$num2 = 1000;
echo mt_rand($num1, $num2);
echo "<br>";



// Показывает, какой тип данных в переменной

$values = [23, "23", 23.5, "23.5", null, true, false];
foreach ($values as $value) {
    echo "is_int(";
    var_export($value);
    echo ") = ";
    var_dump(is_int($value));
}
echo "<br>";

var_dump(is_float(23));

$tests = [
    " 40",
    "40 ",
    "\u{A0}9001",
    "9001\u{A0}",
];
echo "<br>";

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " - число" , PHP_EOL;
    } else {
        echo var_export($element, true) . " - НЕ число", PHP_EOL;
    }
}
echo "<br>";

var_dump(round(3.3));
echo "<br>";
var_dump(round(678, -2));
echo "<br>";

$number = 135.79;
var_dump(round($number, -3));
echo "<br>";

echo PHP_EOL;
var_dump(round(9.5, 0, PHP_ROUND_HALF_UP));
echo "<br>";



// Округлить число 42.43752
$round = 42.43752;
var_dump(round($round, 2));
echo "<br>";

// Перевод в двоичное представление
$num1 = 4252;
$num2 = 89080;

$bin1 = decbin($num1);
$bin2 = decbin($num2);

echo "Двоичное число {$bin1} <br>";
echo "Двоичное число {$bin2} <br>";

// Перевод обратно в десятичное число
$backToDecimal1 = bindec($bin1);
$backToDecimal2 = bindec($bin2);

echo "Обратно в десятичное число {$backToDecimal1} <br>";
echo "Обратно в десятичное число {$backToDecimal2} <br>";



?>