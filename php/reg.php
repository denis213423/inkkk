<?php
// Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ink";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Регистрация нового пользователя
if (isset($_POST['registerName']) && isset($_POST['registerPassword']) && isset($_POST['registerEmail'])) {
    $name = $_POST['registerName'];
    $password = $_POST['registerPassword'];
    $email = $_POST['registerEmail'];

    // Проверка наличия пользователя с таким же именем пользователя или email
    $checkQuery = "SELECT * FROM users WHERE name = '$name' OR email = '$email'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo "Пользователь с таким именем пользователя или email уже существует.";
    } else {
        // Вставка нового пользователя в базу данных
        $insertQuery = "INSERT INTO users (name, password, email, role) VALUES ('$name', '$password', '$email', '0')";
        if ($conn->query($insertQuery) === TRUE) {
            echo '<script>alert("Успешная регистраци!"); window.location.href = "../component5.php";</script>';  
        } else {
            echo "Ошибка регистрации: " . $conn->error;
        }
    }
}


?>
