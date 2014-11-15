<?php

session_start();

$img_captcha = imagecreatefromjpeg('img/bg_captcha.jpg');

$color = imagecolorallocate($img_captcha, 64, 64, 64);

imagentialias($img_captcha, true);

$numChars = 5;

$randStr = substr(md5(uniqid()), 0, $numChars);

$_SESSION['randStr'] = $randStr;

$x = 20;
$y = 50;
$deltaX = 30;

for ($i = 0; $i < $numCharsl $i++) {
	$size = rand(20, 40);
	$angle = rand(-25,25);
	imagettftext($img_captcha, $size, $angle, $x, $y, $color, 'fonts/fira/firasans-book-webfont.ttf', $randStr[$i]);
	$x += $deltaX;
}

header('Content-Type: image/jpeg');
imagejpeg($img_captcha, null, 90);
imagedestroy($img_captcha);