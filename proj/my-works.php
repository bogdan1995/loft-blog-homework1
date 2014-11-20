<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Пономаренко Богдан | Frontend Developer</title>
        <meta name="description" content="">

        <link href="css/style.css" media="screen" rel="stylesheet">
        <link href="css/animate.css" media="screen" rel="stylesheet">
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" >

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Всплывающий попап -->
        <div class="popup">
            <div class="popup-inner animated">
                <div class="popup-name">
                    Добавление проекта
                    <div class="close"></div>
                </div>
                <div class="popup-content">
                    <form action="">
                        <div class="form-group">
                            <label for="project-name">Название проекта</label><br>
                            <input type="text" name="project-name" id="project-name" placeholder="Введите название">
                            <div class="tooltip">введите название</div>
                        </div>
                        <div class="form-group">
                            <label for="project-pic">Картинка проекта</label><br>
                            <!-- Hack -->
                            <div class="upload">
                                <p>Загрузите изображение</p>
                                <div class="upload-button"></div>
                                <input type="file" size="1" name="project-pic" id="project-pic" accept="image">
                                <div class="tooltip">добавьте изображение</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="project-url">URL проекта</label><br>
                            <input type="url" name="project-url" id="project-url" placeholder="Добавьте ссылку" >
                            <div class="tooltip">добавьте ссылку</div>
                        </div>
                        <div class="form-group">
                            <label for="project-text">Описание</label><br>
                            <textarea name="project-text" id="project-text" cols="0" rows="0" placeholder="Пару слов о Вашем проекте"></textarea>
                            <div class="tooltip">добавьте текст</div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Добавить">
                        </div>
                </div>
                </form>
            </div>
        </div>

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
                <div class="work">
                    <div class="work-name">
                        Мои работы
                    </div>
                    <div class="work-content">
                        <div class="row">
                            <div class="cols-4">
                                <div class="project">
                                    <a href="appleshop/index.html" target="_blank"><img src="img/appleshop.png" alt="Проект" title="Проект: Котик"></a>
                                    <div class="hover">
                                        <p><a href="appleshop/index.html" target="_blank">ЭпплShop</a></p>
                                    </div>
                                </div>
                                <p><a href="appleshop/index.html" target="_blank">appleshop.ru</a></p>
                                <p>Магазин продажи техники Apple.</p>
                            </div>
                            <div class="cols-4">
                                <div class="project">
                                    <a href="#"><img src="http://lorempixel.com/183/129/cats" alt="Проект" title="Проект: Котик"></a>
                                    <div class="hover">
                                        <p><a href="#">название</a></p>
                                    </div>
                                </div>
                                <p><a href="#">site.ru</a></p>
                                <p>Информация о проекте 1 превью 2 строки...</p>
                            </div>
                            <div class="cols-4">
                                <div class="project">
                                    <a href="#"><img src="http://lorempixel.com/183/129/cats" alt="Проект" title="Проект: Котик"></a>
                                    <div class="hover">
                                        <p><a href="#">название</a></p>
                                    </div>
                                </div>
                                <p><a href="#">site.ru</a></p>
                                <p>Информация о проекте 1 превью 2 строки...</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cols-4">
                                <div class="project">
                                    <a href="#"><img src="http://lorempixel.com/183/129/cats" alt="Проект" title="Проект: Котик"></a>
                                    <div class="hover">
                                        <p><a href="#">название</a></p>
                                    </div>
                                </div>
                                <p><a href="#">site.ru</a></p>
                                <p>Информация о проекте 1 превью 2 строки...</p>
                            </div>
                            <div class="cols-4">
                                <div class="project add">
                                    <p>Добавить проект</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Include footer.php -->

        <?php include("php/footer.php"); ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/prefixfree.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
