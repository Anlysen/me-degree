<?php

// // Запросы к базе данных MySQL при помощи PHP
// require_once 'settings.php';

// // Подключение к MySQL
// $connection = new mysqli($host, $user, $pass, $data);

// // Проверка подключения
// if ($connection->connect_error) die('Errorr connection');


// // Запрос данных
// $query = "SELECT * FROM users";
// $result = $connection->query($query);

// // Проверка подключения запроса
// if (!$result) die('Errorr select!'); // Если в переменную $result ничего не прешло, выведет ошибку

// // Работа с данными
// $rows = $result->num_rows;
// for ($i = 0; $i < $rows; ++$i) {
//     $result->data_seek($i);
//     echo 'ID: ' . $result->fetch_assoc()['id'] . '<br>'; // В данный момент $result - это таблица с данными имени
//     echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>'; // В данный момент $result - это таблица с данными имени
// }

// // Закрыть коннект
// $result->close();

// // Закрыть сессию соединения
// $connection->close();



// echo '<pre>';
// print_r($rows);
// echo '</pre>';


require_once 'settings.php';

// // Connection to DB
$conn = new mysqli($host1, $user, $pass, $data);
if ($conn->connect_error) die('Error connection');

// // Запись строк
// $sql = "INSERT INTO users (name, age, login, password) VALUES ('Garry', '20', 'gg33rr', '1234567')";

// // // Проверка добавления
// if (mysqli_query($conn, $sql)) {
//         echo "New connection!";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// $conn->close();


$query = "SELECT * FROM users";
$result = $conn->query($query);

// Проверка подключения запроса
if (!$result) die('Errorr select!'); // Если в переменную $result ничего не прешло, выведет ошибку

// Работа с данными
$rows = $result->num_rows;
for ($i = 0; $i < $rows; ++$i) {
    $result->data_seek($i);
    echo 'ID: ' . $result->fetch_assoc()['id'] . '<br>'; // В данный момент $result - это таблица с данными имени
    echo 'Name: ' . $result->fetch_assoc()['name'] . '<br>'; // В данный момент $result - это таблица с данными имени
    echo 'Age: ' . $result->fetch_assoc()['age'] . '<br>';
    echo 'Login: ' . $result->fetch_assoc()['login'] . '<br>';
    echo 'Password: ' . $result->fetch_assoc()['password'] . '<br>';
}




?>