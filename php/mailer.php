<?php 


// Подключаем PHP Mailer
require 'C:\ospanel\domains\inkk\PHPMailer\src\Exception.php';
require 'C:\ospanel\domains\inkk\PHPMailer\src\PHPMailer.php';
require 'C:\ospanel\domains\inkk\PHPMailer\src\SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    // Создаем новый объект PHPMailer
    $mail = new PHPMailer(true);

    // Настройки сервера
    $mail->SMTPDebug = 0; // 0 - отключает вывод отладочной информации, 2 - включает вывод отладочной информации
    $mail->isSMTP(); // Устанавливаем режим работы SMTP
    $mail->Host = 'smtp.mail.ru'; // SMTP сервер для отправки почты
    $mail->SMTPAuth = true; // Включаем аутентификацию SMTP
    $mail->Username = 'zilibobka7@mail.ru'; // Ваш логин от почтового ящика
    $mail->Password = 'zzeRLkGNjNsMkwDLr3Sg'; // Ваш пароль от почтового ящика
    $mail->SMTPSecure = 'ssl'; // Указываем тип шифрования (tls или ssl), если необходимо
    $mail->Port = 465; // Порт сервера SMTP

    // От кого
    $mail->setFrom('zilibobka7@mail.ru', 'inkharmony'); // Ваш адрес электронной почты и имя отправителя

    // Кому
    $mail->addAddress('luntik_123d@mail.ru', 'denis'); // Адрес электронной почты и имя получателя

    // Тема письма
    $mail->Subject = 'Ваш пароль!';

    // Текст письма (может содержать HTML теги)
    $mail->Body = '<h1>Привет!</h1><p>Ваш пароль  </p>';

    // Отправляем письмо
    $mail->send();
    echo 'Письмо успешно отправлено.';
} catch (Exception $e) {
    echo 'Письмо не удалось отправить. Ошибка: ', $mail->ErrorInfo;
}
?>