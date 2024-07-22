<?php

// Запросы к базе данных MySQL при помощи PHP (PDO)

$connection = new PDO("mysql:host=localhost;dbname=medegree;charset=utf8", "root", "");

// Подготовленый запрос
// $query = "INSERT users (name, age, login, password) VALUE ('Andrew', '31', 'anlysen', 'Christ144')";
// $count = $connection->exec($query);
// echo $count;
// $count = null;

$name = 'Caurtney';
$age = 20;
$login = 'sammers';
$pass = 'vvlog11usa';

$par = [
    'n' => $name,
    'age' => $age,
    'l' => $login,
    'p' => $pass
];

$sql = "INSERT users (name, age, login, password) VALUE (:n, :age, :l, :p)";
$query = $connection->prepare($sql); // Подготовка запроса с данными

$query->execute($par);








?>