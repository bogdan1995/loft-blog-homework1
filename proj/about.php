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
                <div class="form">
                    <div class="form-head">
                        У вас интересный проект? Напишите мне
                    </div>
                    <div class="form-content">
                        <form action="">
                            <div class="form-group name">
                                <label for="name">Имя</label><br>
                                <input type="text" id="name" name="name" placeholder="Как мне к Вам обращаться">
                                <div class="tooltip tooltip-right">введите имя</div>
                            </div>
                            <div class="form-group email">
                                <label for="email">Email</label><br>
                                <input type="email" id="email" name="email" placeholder="Куда мне писать">
                                <div class="tooltip">введите email</div>
                            </div>
                            <div class="form-group text">
                                <label for="about">Сообщение</label><br>
                                <textarea name="about" id="about" cols="0" rows="0" placeholder="Кратко в чем суть"></textarea>
                                <div class="tooltip">введите текст</div>
                            </div>
                            <div class="captcha form-group">
                                <label for="captcha">Введите код, указанный на картинке</label>
                                <div class="innerblock">
                                    <div class="for-captcha">
<!--                                        <img src="--><?php //echo $_SESSION['captcha']['image_src'];  ?><!--" alt="">-->
                                    </div>
                                    <input type="text" name="captcha" id="captcha" placeholder="Введите код">
                                    <div class="tooltip">введите код</div>
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

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/prefixfree.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
