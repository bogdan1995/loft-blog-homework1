<?php include("php/head.php"); ?>

        <?php $active = 1; ?>

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
                            <li class="contacts-items"><a href="mailto:ponomarenko.bogdan@ya.ru">ponomarenko.bogdan@ya.ru</a></li>
                            <li class="contacts-items"><a href="tel:+79818609215">+79818609215</a></li>
                            <li class="contacts-items"><a href="skype:bogdasha1995">bogdasha1995</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="right-column">
                <div class="content">
                    <div class="content-name">
                        Основная информация
                    </div>
                    <div class="main-content">
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
                <div class="content">
                    <div class="content-name">
                        Опыт работы
                    </div>
                    <div class="main-content">
                        <ul class="content-list">
                            <li class="content-items job">
                                <p>ООО "Рема" - Продавец дисков</p>
                                <p class="content-inner">Сентябрь 2009 - Май 2010</p>
                            </li>
                            <li class="content-items job">
                                <p>ООО "СТС" - Упаковщик</p>
                                <p class="content-inner">Июнь 2014 - Июль 2014</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="content">
                    <div class="content-name">
                        Образование
                    </div>
                    <div class="main-content">
                        <ul class="content-list">
                            <li class="content-items">
                                <p>Незаконченное высшее. СПбГПУ</p>
                                <p class="content-inner">Сентябрь 2013 - по настоящее время</p>
                            </li>
                            <li class="content-items">
                                <p>Курсы <a href="http://loftschool.ru" target="_blink">Loftschool.ru</a></p>
                                <p class="content-inner">Ноябрь 2014 - по настоящее время</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Include footer.php -->

        <?php include("php/footer.php"); ?>

