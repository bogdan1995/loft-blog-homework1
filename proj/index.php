﻿<!DOCTYPE html>
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
			<div class="information">
				<div class="information-name">
					Основная информация
				</div>
				<div class="main-information">
					<div class="avatar">
						<img src="img/avatar.jpg" alt="">
					</div>
					<div class="about">
						<ul>
							<li class="about-items"><strong>Меня зовут:</strong> Пономаренко Богдан Эдуардович</li>
							<li class="about-items"><strong>Мой возраст:</strong> 19 лет</li>
							<li class="about-items"><strong>Мой город:</strong> Санкт-Петербург, Россия</li>
							<li class="about-items"><strong>Моя специализация:</strong> FRONTEND разработчик</li>
							<li class="about-items"><strong>Ключевые навыки:</strong>
								<ul class="skills">				
									<li id="html"><span>html</span></li>
									<li id="css"><span>css</span></li>
									<li id="js"><span>javascript</span></li>
									<li id="gulp"><span>gulp</span></li>
									<li id="git"><span>git</span></li>
								</ul>								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="job">
				<div class="job-name">
					Опыт работы
				</div>
				<div class="job-information">
					<ul class="job-list">
						<li class="job-items">
							<p>ООО "Рема" - Продавец дисков</p>
							<p class="job-inner">Сентябрь 2009 - Май 2010</p>
						</li>
						<li class="job-items">
							<p>ООО "СТС" - Упаковщик</p>
							<p class="job-inner">Июнь 2014 - Июль 2014</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="education">
				<div class="education-name">
					Образование
				</div>
				<div class="education-informaion">
					<ul class="education-list">
						<li class="education-items">
							<p>Незаконченное высшее. СПбГПУ</p>
							<p class="education-inner">Сентябрь 2013 - по настоящее время</p>
						</li>
						<li class="education-items">
							<p>Курсы <a href="http://loftschool.ru" target="_blink">Loftschool.ru</a></p>
							<p class="education-inner">Ноябрь 2014 - по настоящее время</p>
						</li>
					</ul>
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
</html>