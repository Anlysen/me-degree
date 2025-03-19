<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['username'])) {
        echo "Данные не пришли!<br>";
        echo "<a href='reg.html'> Вернитесь на регистрацию!</a>";
        exit;
    }
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
    $servername = "localhost"; // Обычно localhost
    $username = "root"; // Имя пользователя по умолчанию
    $password = ""; // Пароль по умолчанию (оставьте пустым, если не установлен)
    $dbname = "Penguins"; // Имя вашей базы данных
 
    // Создание соединения
    $conn = new mysqli($servername, $username, $password, $dbname);
 
    // Проверка соединения
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    // Получение данных из формы
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
 
        // Хеширование пароля перед сохранением (рекомендуется)
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
 
        // Подготовка и выполнение SQL-запроса
        $stmt = $conn->prepare("INSERT INTO Users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);
 
        if ($stmt->execute()) {
            echo "Регистрация прошла успешно!";
        } else {
            echo "Ошибка: " . $stmt->error;
        }
 
        // Закрытие подготовленного выражения и соединения
        $stmt->close();
    }
 
    $conn->close();
