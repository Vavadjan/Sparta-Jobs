
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Создаем объект PHPMailer
$mail = new PHPMailer();

// Устанавливаем параметры SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Укажите адрес вашего SMTP-сервера
$mail->SMTPAuth = true;
$mail->Username = 'vavadjan.test@gmail.com'; // Укажите ваше имя пользователя
$mail->Password = 'sxcjoylhhlrgkfhb'; // Укажите ваш пароль
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Устанавливаем кодировку
$mail->CharSet = 'UTF-8';

// Отправитель и получатель
$mail->setFrom('vavadjan.test@gmail.com', 'Sparta Jobs Contact Form');
$mail->addAddress('vavadjan@gmail.com'); // Укажите адрес получателя

// Тема и текст письма
$mail->Subject = 'New Contact Form Submission';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$mail->Body = "Имя: " . $name . "\n"
    . "E-mail: " . $email . "\n"
    . "Сообщение: " . $message;

// Отправляем письмо
if ($mail->send()) {
    echo 'Message sent successfully!';
} else {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
