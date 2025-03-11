<?php

// Подключение к БД
$host = "localhost";
$db = "en_language";
$username = "root";
$password = '';

$conn = mysqli_connect($host, $username, $password, $db);

// // Проверка соединения
// if ($conn->connect_error) {
//     die ("Connection failed" . mysqli_connect_error());
// }
// echo "Connection successfully!>";

// // Создание БД
// $sql1 = "CREATE DATABASE en_language";

// // Проверка создания БД
// if ($conn->query($sql1) === true) {
//     echo "Database created successfully!";
// } else {
//     echo "Error" . $conn->error;
// }

// Создание таблицы
// $sql2 = "CREATE TABLE words (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     word VARCHAR(20) NOT NULL,
//     translation VARCHAR(20) NOT NULL,
//     topic VARCHAR(20) NOT NULL
// )";

// // Проверка создания таблицы
// if ($conn->query($sql2) === true) {
//     echo "Table 'words' created successfully!";
// } else {
//     echo "Error" . $conn->error;
// }

// Добавление данных в таблицу
// $sql3 = "INSERT INTO words (word, translation, topic) VALUES
// ('Mirror', 'зеркало', 'Bathroom'),
// ('Comb', 'расческа', 'Bathroom'),
// ('Bast', 'мочалка', 'Bathroom'),
// ('Bath', 'ванна', 'Bathroom'),
// ('Towel', 'полотенце', 'Bathroom'),
// ('Soap', 'мыло', 'Bathroom'),
// ('Toothpaste', 'зубнаяпаста', 'Bathroom'),
// ('Shower', 'душ', 'Bathroom'),
// ('Shampoo', 'шампунь', 'Bathroom'),
// ('Faucet', 'кран', 'Bathroom'),
// ('Slippers', 'тапочки', 'Bathroom'),
// ('Hair dryer', 'фен', 'Bathroom')";

// // Проверка записы данных
// if ($conn->query($sql3) === true) {
//     echo "Record created successfully!";
// } else {
//     echo "Error! Record not created!" . $conn->error;
// }

// Выбираем слова для темы
$topic = 'Bathroom';
$sql4 = "SELECT word, translation FROM words WHERE topic = ? ORDER BY RAND() LIMIT 5";
$stmt = $conn->prepare($sql4); // Подготавливает запрос к выполнению и возвращает связанный с этим запросом объект
$stmt->bind_param("s", $topic); // Привязка переменных к параметрам подготавливаемого запроса
$stmt->execute(); // Выполняет подготовленный запрос
$result = $stmt->get_result(); // Получает результат из подготовленного запроса в виде объекта

// Выводим слова
echo "<h1>Слова на тему: {$topic}</h1>";
echo "<ul>";

while ($row = $result->fetch_assoc()) { // Выбирает следующую строку из набора результатов и помещает её в ассоциативный массив
    echo "<li><strong>{$row['word']}</strong> - {$row['translation']}</li>";
}
echo "</ul>";

// Закрываем соединение
$stmt->close();
$conn->close();

?>