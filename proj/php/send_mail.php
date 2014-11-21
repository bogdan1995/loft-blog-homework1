<?php

require_once 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail -> isSMTP();
$mail -> Host = 'mx1.hostinger.ru';
$mail -> SMTPAuth = true;
$mail -> Username = 'support@ponomarenko-bogdan.ru';
$mail -> Password = 'bogdan1995';
$mail -> Port = 2525;

$mail -> From = 'support@ponomarenko-bogdan.ru';
$mail -> FromName = stripslashes($_POST['name']);
$mail -> addAddress('ponomarenko.bogdan@yandex.ru', 'Богдан Пономаренко');
$mail -> CharSet = 'UTF-8';

$mail -> WordWrap = 50;
$mail -> isHTML(true);

$mail -> Subject = 'Сообщение с сайта ponomarenko-bogdan.ru';
$mail -> Body =
'<html>
    <head>
        <titile>Сообщение с сайта ponomarenko-bogdan.ru</title>
    </head>
    <body>
        <p><strong>Имя:</strong><br/>'.$mail -> FromName.'</p>
        <p><strong>Email:</strong><br/> '.($_POST['email']).'</p>
        <p><strong>Сообщение:</strong><br/> '.($_POST['about']).'</p>
    </body>
</html>';
$mail -> AltBody = 'Alternative text';

if(!$mail->send()) {
    echo 'Не отправлено';
    echo 'Error code: ' . $mail -> ErrorInfo;
} else {
    echo 'Отправлено';
}