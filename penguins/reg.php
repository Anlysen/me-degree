<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка наличия данных
    if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])) {
        echo "Данные не пришли!<br>";
        echo "<a href='reg.html'> Вернитесь на регистрацию!</a>";
        exit;
    }

    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Проверка полей
    if (empty($username)) {
        echo "Имя пользователя не задано!";
        echo "<a href='reg.html'> Вернитесь на регистрацию!</a>";
        exit;
    }

    if (empty($email)) {
        echo "Не введен email!";
        echo "<a href='reg.html'> Вернитесь на регистрацию!</a>";
        exit;
    }

    if (empty($password)) {
        echo "Не введен пароль!";
        echo "<a href='reg.html'> Вернитесь на регистрацию!</a>";
        exit;
    }

    // Подключение к базе данных
    $servername = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "Penguins";

    // Соединение
    $conn = new mysqli($servername, $user, $pass, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Хеширование пароля перед сохранением
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Подготовка и выполнение SQL-запроса
    $stmt = $conn->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
    if (!$stmt) {
        die("Ошибка подготовки запроса: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        echo "Регистрация прошла успешно!";
    } else {
        echo "Ошибка: " . $stmt->error;
    }

    // Закрытие подготовленного выражения и соединения
    $stmt->close();
    $conn->close();
} else {
    echo "Неверный метод запроса.";
}
?>
