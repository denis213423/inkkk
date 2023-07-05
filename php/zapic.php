<?php 
// Подключение к базе данных 
$servername = "localhost"; 
$dbusername = "root"; 
$dbpassword = ""; 
$dbname = "ink"; 
 
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname); 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
 
// Обработка отправленной формы 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $date = $_POST["date"]; 
    $time = $_POST["time"]; 
    $name = $_POST["name"]; 
 
    // Проверка, есть ли уже запись на указанное время и дату 
    $checkQuery = "SELECT * FROM appointments WHERE date = '$date' AND time = '$time'"; 
    $result = $conn->query($checkQuery); 
    if ($result->num_rows > 0) { 
        echo "Извините, это время уже занято. Пожалуйста, выберите другое время."; 
    } else { 
         
         
        // Вставка записи на прием в базу данных 
        $insertQuery = "INSERT INTO appointments (name, date, time, created_at) VALUES ('$name', '$date', '$time', NOW())"; 
        if ($conn->query($insertQuery) === TRUE) { 
            echo '<script>alert("Успешная запись"); window.location.href = "../index.php";</script>';   
        } else { 
            echo "Ошибка при записи на прием: " . $conn->error; 
        } 
         
    } 
} 
 
// Закрытие соединения с базой данных 
$conn->close(); 
?>