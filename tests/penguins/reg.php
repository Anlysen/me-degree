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
