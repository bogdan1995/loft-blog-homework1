<?php include("php/head.php"); ?>

    <?php $active = 2; ?>

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
                    </div>
                    <div class="form-group">
                        <label for="project-pic">Изображение проекта</label><br>
                        <!-- Hack -->
                        <div class="upload">
                            <p>Загрузите изображение</p>

                            <div class="upload-button"></div>
                            <input type="file" size="1" name="project-pic" id="project-pic" accept="image">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="project-url">URL проекта</label><br>
                        <input type="url" name="project-url" id="project-url" placeholder="Добавьте ссылку">
                    </div>
                    <div class="form-group">
                        <label for="project-text">Описание</label><br>
                        <textarea name="project-text" id="project-text" cols="0" rows="0"
                                  placeholder="Пару слов о Вашем проекте"></textarea>
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
                        <li class="contacts-items"><a
                                href="mailto:ponomarenko.bogdan@ya.ru">ponomarenko.bogdan@ya.ru</a>
                        </li>
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
                    <ul class="row">
                        <li class="cols-4">
                            <div class="project">
                                <a href="appleshop/index.html" target="_blank"><img src="img/appleshop.png"
                                                                                    alt="Проект"
                                                                                    title="Проект: Котик"></a>

                                <div class="hover">
                                    <a href="appleshop/index.html" target="_blank">ЭпплShop</a>
                                </div>
                            </div>
                            <p><a href="appleshop/index.html" target="_blank">appleshop.ru</a></p>

                            <p>Магазин продажи техники Apple.</p>
                        </li>
                        <li class="cols-4">
                            <div class="project">
                                <a href="#"><img src="http://lorempixel.com/183/129/cats" alt="Проект"
                                                 title="Проект: Котик"></a>

                                <div class="hover">
                                    <a href="#">название</a>
                                </div>
                            </div>
                            <p><a href="#">site.ru</a></p>

                            <p>Информация о проекте 1 превью 2 строки...</p>
                        </li>
                        <li class="cols-4">
                            <div class="project">
                                <a href="#"><img src="http://lorempixel.com/183/129/cats" alt="Проект"
                                                 title="Проект: Котик"></a>

                                <div class="hover">
                                    <a href="#">название</a>
                                </div>
                            </div>
                            <p><a href="#">site.ru</a></p>

                            <p>Информация о проекте 1 превью 2 строки...</p>
                        </li>
                        <li class="cols-4">
                            <div class="project">
                                <a href="#"><img src="http://lorempixel.com/183/129/cats" alt="Проект"
                                                 title="Проект: Котик"></a>

                                <div class="hover">
                                    <a href="#">название</a>
                                </div>
                            </div>
                            <p><a href="#">site.ru</a></p>

                            <p>Информация о проекте 1 превью 2 строки...</p>
                        </li>
                        <li class="cols-4">
                            <div class="project add">
                                <a href="#">Добавить проект</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include footer.php -->

<?php include("php/footer.php"); ?></div>
