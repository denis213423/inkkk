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

// Проверка, был ли отправлен запрос на обновление фотографии или описания
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $photoId = $_POST["photo_id"];

    // Обновление фотографии, если выбран новый файл
    if (!empty($_FILES["photo"]["name"])) {
        $imageFileType = strtolower(pathinfo($_FILES["photo"]["name"], PATHINFO_EXTENSION));
        $targetFile = "gallery/" . $_FILES["photo"]["name"];
        $uploadOk = 1;

        // Проверка, является ли файл изображением
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if ($check === false) {
            echo "Ошибка: Выбранный файл не является изображением.";
            $uploadOk = 0;
        }

        // Проверка размера файла
        if ($_FILES["photo"]["size"] > 500000) {
            echo "Ошибка: Размер файла превышает допустимый.";
            $uploadOk = 0;
        }

        // Проверка разрешенных форматов файлов
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        if (!in_array($imageFileType, $allowedExtensions)) {
            echo "Ошибка: Разрешены только JPG, JPEG, PNG и GIF форматы файлов.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Ошибка: Файл не был загружен.";
        } else {
            // Загрузка файла в указанную директорию
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
                // Обновление пути к фотографии и оригинального имени файла в базе данных
                $sql = "UPDATE gallery SET filename='$targetFile', original_filename='{$_FILES["photo"]["name"]}' WHERE id=$photoId";

                if ($conn->query($sql) === TRUE) {
                    echo "Фотография успешно обновлена.";
                } else {
                    echo "Ошибка при обновлении фотографии: " . $conn->error;
                }
            } else {
                echo "Ошибка: Произошла ошибка при загрузке файла.";
            }
        }
    }

    // Обновление описания фотографии
    $description = $_POST["description"];
    $sql = "UPDATE gallery SET description='$description' WHERE id=$photoId";

    if ($conn->query($sql) === TRUE) {
        echo "Описание фотографии успешно обновлено.";
    } else {
        echo "Ошибка при обновлении описания фотографии: " . $conn->error;
    }
}

// Получение всех фотографий для редактирования
$sql = "SELECT * FROM gallery";
$result = $conn->query($sql);

// Закрытие соединения с базой данных
$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Редактирование фотографии</title>
</head>

<body>
    <h1>Редактирование фотографии</h1>

    <?php if ($result->num_rows > 0): ?>
        <form action="edit_photo.php" method="POST" enctype="multipart/form-data">
            <select name="photo_id">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['filename']; ?></option>
                <?php endwhile; ?>
            </select>
            <br>
            <label for="photo">Выберите новую фотографию:</label>
            <input type="file" name="photo">
            <br>
            <label for="description">Описание:</label>
            <input type="text" name="description">
            <br>
            <input type="submit" value="Сохранить">
        </form>
    <?php else: ?>
        <p>Нет доступных фотографий для редактирования.</p>
    <?php endif; ?>
</body>

</html>