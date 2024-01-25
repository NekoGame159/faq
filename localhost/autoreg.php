<?php

$host_name = "localhost";
$db_name = "Users";
$username = "root";
$password = "";

// Соединение с базой данных
$conn = new mysqli($host_name, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Соединение с базой данных не удалось: " . $conn->connect_error);
}

// Очистка данных
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Проверка данных и вход пользователя
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = test_input($_POST["login"]);
    $password = test_input($_POST["password"]);

    $sql = "SELECT id, login, password, user_role FROM users WHERE login = '$login'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $login = $result->fetch_assoc();

        if (password_verify($password, $login['password'])) {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $login["id"];
            $_SESSION["name"] = $login["name"];
            $_SESSION["user_role"] = $login["user_role"];

            if ($login["user_role"] == "admin") {
                echo "<script> location.href='admin.html'; </script>";
                exit;
            } else {
                echo "<script> location.href='user.html'; </script>";
                exit;
            }
        } else {
            echo "Неправильный пароль. Пожалуйста, попробуйте еще раз.";
        }
    }
}

$conn->close();
?>