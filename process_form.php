<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "vavadjan@gmail.com"; // Замените на ваш email
    $subject = "[SpartaJobs] Новое сообщение от $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
}
?>
