<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!isset($_POST['username'])) {
    echo "Данные не пришли!<br>";
    echo "<a href='reg.html'> Вернитесь на регистрацию!</a>";
    exit;
}
echo "данные пришли";

$username = isset($_POST['username']) ? $_POST['username'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$username = trim($username);
$email = trim($email);

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

$host = "localhost";
$db = "Penguins";
$username = "root";
$password = '';
$db = "Penguins";

try {
    // Подключение к базе данных
    $pdo = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Проверка, что форма отправлена методом POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Хеширование пароля

        // Подготовка SQL запроса
        $stmt = $pdo->prepare("INSERT INTO Users (username, password, email) VALUES (:username, :password, :email)");

        // Привязка параметров
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        // Выполнение запроса
        if ($stmt->execute()) {
            echo "Пользователь успешно зарегистрирован!";
        } else {
            echo "Ошибка при регистрации пользователя!";
        }
    }
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}

// Добавление данных в таблицу

try {
    $conn = new PDO("mysql:host=$host; dbname=$db", $username, $password, $email);
    $sql = "INSERT INTO Users (username, password, email)
            VALUES ('Andrew', 345, 'an@lysen.com')";

    $conn->exec($sql);
    echo "Данные записаны в таблицу.";
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}

$conn = null;
