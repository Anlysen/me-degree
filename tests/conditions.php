<?php

// УСЛОВИЯ

$ark = "Ark-";
$model = 12;

if ($model == 12) {
    echo $ark . $model . "<br>";
} elseif ($model == 144) {
    echo $ark . $model . "<br>";
} else {
    echo 'No correctly model of ark.' . "<br>";
}

$x = 2;
$y = 10;

if ($x < $y) {
    echo 'X меньше Y' . "<br>";
} elseif ($x == $y) {
    echo "X равен Y" . "<br>";
} elseif ($x > $y) {
    echo 'X больше Y' . "<br>";
} else {
    echo false;
}

$city = 'Phoenix';
$weatherToday = false;

if ($city !== 'Phoenix' && !$weatherToday) {
    echo 'First' . "<br>";
} elseif ($city !== 'Poenix' || !$weatherToday) {
    echo 'Second' . "<br>";
} else {
    echo 'Error';
}

$a = 11;

switch ($a) {
    case 5:
        echo 'Var: ' . 5;
        break;
    case 10:
        echo 'Var: ' . 10;
        break;
    case 12:
        echo 'Var: ' . 12;
        break;
    default:
        echo 'Default. Not working!<br>';
}
