<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "vavadjan@gmail.com"; // Замените на ваш email
    $subject = "Новый запрос на консультацию от $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Отправляем ответ клиенту
    echo "Спасибо за ваш запрос. Мы свяжемся с вами в ближайшее время!";
}
?>

