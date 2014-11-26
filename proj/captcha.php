<?php
session_start();
$img_captcha = imagecreatefromjpeg('img/bg_captcha.jpg');
$color = imagecolorallocate($img_captcha, 56, 72, 125);
imageantialias($img_captcha, true);
$numChars = 5;
$randStr = substr(md5(uniqid()), 0 , $numChars);
$_SESSION['randStrn'] = $randStr;
$x = 25;
$y = 50;
$deltax = 20;
for($i = 0; $i < $numChars; $i++)
{
    // получаем случайный размер текста
    $size = rand(20, 40);
    // получаем случайный угол поворота текста
    $angle = rand(-25, 25);
    // отрисовка картинки
    imagettftext($img_captcha, $size, $angle, $x, $y, $color, 'fonts/b52.TTF', $randStr[$i]);
    // сдвигаем курсор по координате X
    $x += $deltax;
}
// Выводим изображение на экран и удаляем его из памяти
header('Content-Type: image/jpeg');
imagejpeg($img_captcha, null, 90);
imagedestroy($img_captcha);




