<?php

// error_reporting(E_ALL);

// // Перевод в верхний регистр
// $line = 'Hello world';
// $line = strtoupper($line);
// echo $line . "<br>";

// // Поменять местами слова
// $line = trim($line);
// $words = explode(' ', $line);
// while ($words !== []) {
//     echo array_pop($words);
//     echo ' ' . "<br>";
// }

// // Вывод четных чисел
// $num = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// foreach ($num as $key) {
//     if ($key % 2 == 0) {
//         echo $key . ' ' . "<br>";
//     }
// }

// $num2 = [3, 5, 6, 10, 43, 7];

// foreach ($num2 as $key2) {
//     if ($key2 % 2 == 0) {
//         echo $key2 . ' ' . "<br>";
//     }
// }

// for ($i = 1; $i <= 50; $i++) {
//     if ($i % 2 === 0) {
//         echo $i . " " . "<br>";
//     }
// }

// // Определяем число фибоначи
// function fibonacci($num)
// {
//     $a = 0;
//     $b = 1;

//     while ($b < $num) {
//         $temp = $a + $b; // 13
//         $a = $b; // 8
//         $b = $temp; // 13
//     }
//     return $b == $num || $a == $num;
// }

// $number = 10;
// echo fibonacci($number) ? "Run" : "Stop" . "<br>";

// for ($i = 1; $i <= 100; $i++) {
//     echo $i . "<br>";
// }

// // Выводим n числа фибоначи
// $n = 4;
// $f = 0;
// $s = 1;

// for ($i = 1; $i <= $n; $i++) {
//     echo $f . " " . "<br>";
//     $next = $f + $s; // 5
//     $f = $s; // 3
//     $s = $next; // 5
//}

// Уникальные числа
// $inputString = "0 2 3 1 2";
// $numbers = explode(" ", $inputString);
// $uniqueNumber = [];

// foreach ($numbers as $number) {
//     if (!in_array($number, $uniqueNumber)) {
//         $uniqueNumber[] = $number;
//     }
// }

// echo implode(" ", $uniqueNumber);

// $input1 = "hello";
// $input2 = "hi, there";
// $input3 = ",";

// echo "<pre>";
// print_r(explode(',', $input1));
// echo "</pre>";

// echo "<pre>";
// print_r(explode(',', $input2));
// echo "</pre>";

// echo "<pre>";
// print_r(explode(',', $input3));
// echo "</pre>";

// Вывод повторяющихся чисел
// $numberString = "3 2 4 2 5 1 3";
// $numbers = explode(" ", $numberString);

// $duplicatedValues = [];

// foreach ($numbers as $number) {
//     if (!isset($duplicatedValues[$number])) {
//         $duplicatedValues[$number] = 1;
//     } else {
//         $duplicatedValues[$number]++;
//     }
// }

// foreach ($duplicatedValues as $number => $count) {
//     if ($count >= 2) {
//         echo $number . ' ' . "<br>";
//     }
// }

// Наиболее часто встречающееся число
// $string = "1 2 4 4 3 2 3 1 6 1 1";
// $numbers = explode(' ', $string);

// $nums2Freg = [];
// $currentMaxFreg = 1;
// $currentMaxNum = $numbers[0];

// foreach ($numbers as $number) {
//     if (!isset($nums2Freg[$number])) {
//         $nums2Freg[$number] = 1;
//     } else {
//         $nums2Freg[$number]++;
//     }

//     if ($nums2Freg[$number] > $currentMaxFreg) {
//         $currentMaxFreg = $nums2Freg[$number];
//         $currentMaxFreg = $number;
//     }
// }

// echo $currentMaxFreg . "<br>";

// $crystal = "1 2 2 3 4 7 8 7 7";
// $crystalArr = explode(' ', $crystal);

// $basket = [];
// $currentMaxYet = 1;
// $currentMaxCrystal = $crystalArr[0];

// foreach ($crystalArr as $keyCrystal) {
//     if (!isset($basket[$keyCrystal])) {
//         $basket[$keyCrystal] = 1;
//     } else {
//         $basket[$keyCrystal]++;
//     }

//     if ($basket[$keyCrystal] > $currentMaxYet) {
//         $currentMaxYet = $basket[$keyCrystal];
//         $currentMaxYet = $keyCrystal;
//     }
// }

// echo $currentMaxYet;

// Перемещение нулей в конец
// $string = "7 0 39 0 282 2 4 0 45";
// $digits = '';
// $zeros = '';

// for ($i = 0; $i < strlen($string); $i++) {
//     var_dump($i);
//     if ($string[$i] == '0') {
//         $zeros .= $string[$i];
//     } else {
//         $digits .= $string[$i];
//     }
// }

// $result = $digits . $zeros;
// echo $result;


// $nonZeros = array_filter(str_split($string), fn($x) => $x !== '0');
// $zeros = array_filter(str_split($string), fn($x) => $x == '0');
// $result = implode('', $nonZeros) . implode('', $zeros);

// echo $result;

// Асоциативный массив
// $arr = [
//     'fruit' => 'apple',
//     'veggie' => 'carrot'
// ];

// define('fruit', 'veggie');

// print $arr['fruit'];
// print "Hello {$arr[fruit]}";

// Проверка на существование константы
// define('VAL', 1);
// if (defined('VAL')) echo VAL;

// $index = mt_rand(1, 10);
// $name = "VALUE{$index}";
// define($name, 1);
// echo constant($name);

// // Определение флага
// define('MY_FILE_INCLUDED', false); // Константа флага

// function included_once_with_flag($filename)
// {
//     if (!defined('MY_FILE_INCLUDED' || !MY_FILE_INCLUDED)) {
//         require $filename;
//         define('MY_FILE_INCLUDED', true);
//     }
// }

// Вычисление чисел фибоначи
// function fibonacci($n)
// {
//     if ($n == 0) {
//         return 0;
//     } elseif ($n == 1) {
//         return 1;
//     }

//     $a = 0;
//     $b = 1;

//     for ($i = 2; $i <= $n; $i++) {
//         $c = $a + $b; // 1
//         $a = $b; // 1
//         $b = $c; // 1
//     }

//     return $b;
// }

// $number = 200;
// echo "Number fibonacci with number $number: " . fibonacci($number);
