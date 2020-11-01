<?php

use PHPMailer\PHPMailer\PHPMailer;

$firstName = $_POST['firstName'];
$tel = $_POST['tel'];

require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/SMTP.php";
require_once "PHPMailer/Expection.php";

$mail = new PHPMailer();

try {
    $mail -> isSMTP();
    $mail -> Host = "smtp.gmail.com";
    $mail -> SMTPAuth = true;
    $mail -> Username = "ex@mail.ru"; //пример
    $mail -> Password = "pass";  //пример
    $mail -> SMTPSecure = "ssl";
    $mail -> Port = 465;

    $mail -> setForm('ex@mail.ru', 'Builder');
    $mail -> addAddress('ex2@mail.ru', 'user');


    $mail ->isHTML(true);
    $mail ->Subject = 'Тема';
    $mail ->Body = 'Имя: ' . $firstName . '<br>телефон: ' . $tel;
    $mail ->altBody = 'this is the body in plain for non-HTML mail clients';

    $mail -> send();

    header('location: ../cake');

    
} catch (Expection $e) {
    echo "Message could not be sent. Mailer Error: {$mail ->ErrorInfo}";
}

?>