<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link href="css/style.min.css" media="screen" rel="stylesheet">
	<link rel="icon" href="favicon.ico" type="image/x-icon" > 
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >
</head>
<body>
	<!-- Include header.php -->

	<?php include("php/header.php"); ?>

	<div class="container">
		<div class="left-column">

			<!-- Include nav.php -->
			
			<?php include("php/nav.php"); ?>

			<div class="contacts">
				<div class="contacts-name">
					<p>Контакты</p>
				</div>
				<div class="contacts-block">
					<ul class="contacts-list">
						<li class="contacts-items">ponomarenko.bogdan@ya.ru</li>
						<li class="contacts-items">+79818609215</li>
						<li class="contacts-items">bogdasha1995</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="right-column">
			<div class="form">
				<div class="form-head">
					У вас интересный проект? Напишите мне
				</div>
				<div class="form-content">
					<form action="">
						<div class="form-group name">
							<label for="name">Имя</label><br>
							<input type="text" id="name" name="name" placeholder="Как мне к Вам обращаться"></div>
						<div class="form-group email">
							<label for="email">Email</label><br>
							<input type="email" id="email" name="email" placeholder="Куда мне писать">
						</div>
						<div class="form-group text">
							<label for="about">Сообщение</label><br>
							<textarea name="about" id="about" cols="0" rows="0" placeholder="Кратко в чем суть"></textarea>
						</div>
						<div class="captcha form-group">
							<label for="captcha">Введите код, указанный на картинке</label>
							<div class="innerblock">
								<div class="for-captcha"></div>
								<input type="text" name="captcha" id="captcha" placeholder="Введите код">
							</div>
						</div>
						<div class="buttons form-group">
							<input type="submit" value="Отправить">
							<input type="reset" value="Отменить">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Include footer.php -->

	<?php include("php/footer.php"); ?>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/prefixfree.min.js"></script>
	<script src="js/main.min.js"></script>
</body>