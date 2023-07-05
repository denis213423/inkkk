<?php
session_start();
    // Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ink";

// Проверяем, была ли отправлена форма входа
if (isset($_POST['login'])) {
    // Получение данных из формы
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];
    


    // Подключение к базе данных
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Подготовленный SQL-запрос для поиска пользователя по email и паролю
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Авторизация успешна
        $_SESSION['password '] = true;
        $_SESSION['email'] = $email;
        echo '<script>alert("Успешная авторизация"); window.location.href = "../component5.php";</script>';  
        exit();
    } else {
        // Пользователь не найден
        $error = "Неверный email или пароль.";
    }

    // Закрытие подготовленного выражения и соединения с базой данных
    $stmt->close();
    $conn->close();
}
?>


