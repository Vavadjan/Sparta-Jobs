<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $message = $_POST["message"];

//     $to = "vavadjan@gmail.com"; // Замените на ваш email
//     $subject = "Новый запрос на консультацию от $name";
//     $headers = "From: $email";

//     mail($to, $subject, $message, $headers);

//     // Отправляем ответ клиенту
//     echo "Спасибо за ваш запрос. Мы свяжемся с вами в ближайшее время!";
// }

// Получим данные с элементов формы

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


// Обработаем полученные данные

$name = htmlspecialchars($name);    //преобразование в сущности (мнемоники)
$email = htmlspecialchars($email);
$messasge = htmlspecialchars($message);

$name = urldecode($name);   //декодирование URL
$email = urldecode($email);
$messasge = urldecode($message);

$name = trim($name);    //удаление пробельных символов с обоих сторон
$email = trim($email);
$messasge = trim($message);


//отправляем данные на почту

if (mail("vavadjan@gmail.com",
        "Новое письмо с сайта Sparta Jobs", 
        "Имя: ".$name."\n". 
        "E-mail: ".$email."\n". 
        "Сообщение : ".$message, 
        "From: vavadjan@gmail.com \r\n" )
){
    echo ('Письмо успешно отправлено!');
}
else {
    echo ('Есть ошибки! Проверьте вводимые данные...');
}

?>

