<?php

// ЦИКЛЫ

for ($i = 0; $i <= 20; $i++)
    echo $i . "<br>";

$a = 1;
while ($a <= 10) {
    echo $a . "<br>";
    $a++;
}

$x = 100;

do {
    echo $x;
} while ($x < 10);

for ($el = 100; $el > 10; $el /= 2) {
    if ($el < 15)
        break;

    if ($el % 2 == 0)
        continue;

    echo $el . "<br>";
}

$arr = [5, 6, 7, "name", 30.1];

for ($i = 0; $i < count($arr); $i++)
    echo "Element $i: $arr[$i]<br>";

$list = ["age" => 32, "name" => "Alex", "hobbies" => "soccer"];

foreach ($list as $key => $value) {
    echo "Key: $key. Value: $value. <br>";
}
