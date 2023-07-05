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

// Логика добавления фотографии в базу данных
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получение данных из формы загрузки фотографии
    $description = $_POST['description'];
    $file = $_FILES['photo'];

    // Проверка наличия загруженного файла
    if ($file['name']) {
        // Перемещение файла в папку на сервере
        $targetDir = "gallery/";
        $fileName = basename($file["name"]);
        $targetFilePath = $targetDir . $fileName;
        move_uploaded_file($file["tmp_name"], $targetFilePath);

        // Сохранение информации о фотографии в базе данных
        $sql = "INSERT INTO gallery (filename, description) VALUES ('$fileName', '$description')";
        if ($conn->query($sql) === TRUE) {
            // Фотография успешно добавлена в базу данных
            // Выполнить перенаправление на страницу админ панели
            header("Location: admin_profile.php");
            exit; // Важно добавить exit после перенаправления
        } else {
            echo "Ошибка при добавлении фотографии в базу данных: " . $conn->error;
        }
    } else {
        echo "Вы не выбрали файл для загрузки.";
    }
}
?>

<!-- Форма загрузки фотографии -->
<form method="POST" action="" enctype="multipart/form-data">
    <div>
        <label for="photo">Выберите фотографию:</label>
        <input type="file" name="photo" id="photo" required>
    </div>
    <div>
        <label for="description">Описание:</label>
        <input type="text" name="description" id="description" required>
    </div>
    <div>
        <button type="submit">Добавить фотографию</button>
    </div>
</form>

<?php
// Закрытие соединения с базой данных
$conn->close();
?>