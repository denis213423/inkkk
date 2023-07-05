<?php
// Подключение к базе данных
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "ink";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Проверка, был ли отправлен запрос на удаление фотографии
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $photoId = $_POST["photo_id"];

    // Получение информации о фотографии
    $sql = "SELECT * FROM gallery WHERE id=$photoId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $filename = $row['filename'];

        // Удаление фотографии из базы данных
        $deleteSql = "DELETE FROM gallery WHERE id=$photoId";

        if ($conn->query($deleteSql) === TRUE) {
            // Удаление файла фотографии
            if (unlink($filename)) {
                echo "Фотография успешно удалена.";
            } else {
                echo "Ошибка при удалении файла фотографии.";
            }
        } else {
            echo "Ошибка при удалении фотографии из базы данных: " . $conn->error;
        }
    } else {
        echo "Фотография не найдена.";
    }
}

// Получение всех фотографий для выбора и удаления
$sql = "SELECT * FROM gallery";
$result = $conn->query($sql);

// Закрытие соединения с базой данных
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Удаление фотографии</title>
</head>

<body>
    <h1>Удаление фотографии</h1>

    <?php if ($result->num_rows > 0): ?>
        <form action="delete_photo.php" method="POST">
            <select name="photo_id">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['filename']; ?></option>
                <?php endwhile; ?>
            </select>
            <br>
            <input type="submit" value="Удалить">
        </form>
    <?php else: ?>
        <p>Нет доступных фотографий для удаления.</p>
    <?php endif; ?>
</body>

</html>