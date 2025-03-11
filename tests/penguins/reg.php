<?php

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

$conn = mysqli_connect($host, $username, $password, $db);
if ($conn->connect_error) {
    die ("Connection failed" . mysqli_connect_error());
}
echo "Connection successfully!";

$username = mysqli_real_escape_string($conn, $username);
var_dump($username);

$query = sprintf("SELECT user_id FROM Users WHERE username='%s'",
    //mysqli_real_escape_string($conn, $username));
    $username);
$result = mysqli_query($conn, $query);
printf("Возвращённые строки: %d.\n", mysqli_num_rows($result));

// Проверкак пользователя на существование

$username = $_POST['username'];
$email = $_POST['email'];

// Исправленный SQL-запрос для проверки существования пользователя
$stmt = $conn->prepare("SELECT * FROM Users WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Пользователь с таким именем уже существует.";
} else {
    // Вставка нового пользователя
    $stmt = $conn->prepare("INSERT INTO Users (username, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $email);

    if ($stmt->execute()) {
        echo "Новый пользователь успешно добавлен.";
    } else {
        echo "Ошибка при добавлении пользователя: " . $stmt->error;
    }
}

$stmt->close();
$conn->close();

// $username = $_POST['username'];
// $email = $_POST['email'];

// $stmt = $conn->prepare("SELECT * FROM Users WHERE username = ?");
// $stmt->bind_param("s", $username);
// $stmt->execute();
// $result = $stmt->get_result();

// if ($result->num_rows > 0) {
//     echo "Пользователь с таким именем уже существует.";
// } else {
//     // Вставка нового пользователя
//     $stmt = $conn->prepare("INSERT INTO Users (username, email) VALUES (?, ?)");
//     $stmt->bind_param("ss", $username, $email);

//     if ($stmt->execute()) {
//         echo "Новый пользователь успешно добавлен.";
//     } else {
//         echo "Ошибка при добавлении пользователя: " . $stmt->error;
//     }
// }

// $stmt->close();
// $conn->close();
