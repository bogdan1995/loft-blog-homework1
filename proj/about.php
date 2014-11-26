<?php include("php/head.php"); ?>
<?php $active = 3; ?>

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
                    <li class="contacts-items"><a href="mailto:ponomarenko.bogdan@ya.ru">ponomarenko.bogdan@ya.ru</a>
                    </li>
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
                <form>
                    <div class="form-group name">
                        <label for="name">Имя</label><br>
                        <input type="text" id="name" name="name" placeholder="Как мне к Вам обращаться"
                               data-target="right center" data-class="left center">
                    </div>
                    <div class="form-group email">
                        <label for="email">Email</label><br>
                        <input type="email" id="email" name="email" placeholder="Куда мне писать"
                               data-class="right center" data-target="left center">
                    </div>
                    <div class="form-group text">
                        <label for="about">Сообщение</label><br>
                        <textarea name="about" id="about" cols="0" rows="0" placeholder="Кратко в чем суть"
                                  data-class="right center" data-target="left center"></textarea>
                    </div>
                    <div class="captcha form-group">
                        <label for="captcha">Введите код, указанный на картинке</label>

                        <div class="innerblock">
                            <div class="for-captcha">
                              <img src='captcha.php' alt="captcha">
                            </div>
                            <input type="text" name="captcha" id="captcha" placeholder="Введите код"
                                   data-class="right center" data-target="left center">
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

