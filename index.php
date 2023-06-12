<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Официальный сайт Ameli Web Studio. Ameli WS.">
    <meta name="keywords" content="Ameli Web Studio, Официальный сайт Ameli Web Studio, Ameli WS, ameli, веб-студия амели, студия амели, веб-студия амели омск">
    <title>WS Амели</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <script src="./assets/js/burger.js" defer></script>
    <script src="./assets/js/popup.js" defer></script>
    <script src="./assets/js/scroll.js" defer></script>
    <?php if(isset($_SESSION['login'])) {?><script src="./assets/js/popupReviews.js" defer></script><?php }?>
    <?php if(isset($_SESSION['login'])) {?><script src="./assets/js/deleteReview.js" defer></script><?php }?>
    <?php if(isset($_SESSION['login'])) {?><script src="./assets/js/changeReview.js" defer></script><?php }?>
    
</head>
<body>
    <div class="wrapper" id="main">
        <?php 
        require './vendor/components/order.php';
        require './vendor/components/consult.php';
        require './vendor/components/survey.php';
        require './vendor/components/surveyUpdate.php';
        require './vendor/components/header.php';
        ?>
        <main class="main">
            <div class="main__inside">
                <div class="intro">
                    <div class="intro__inside container">
                        <h1 class="intro__heading">МЫ СОЗДАЛИ <span>921</span> САЙТ<br>ДЛЯ НАШИХ КЛИЕНТОВ<br>С <span>2006</span> ГОДА</h1>
                        <ul class="intro__buttons">
                            <li class="intro__buttons-item"><button class="intro__button intro__button_purple button-order">Заказать</button></li>
                            <li class="intro__buttons-item"><button class="intro__button intro__button_colorless button-consult">Консультация</button></li>
                        </ul>
                    </div>
                </div>
                <div class="prices" id="services">
                    <div class="prices__inside">
                        <div class="prices__head">
                            <h2 class="prices__heading">Услуги & Цены</h2>
                            <h3 class="prices__subtitle">4 услуги оказываемые веб-студией:</h3>
                        </div>
                        <ul class="prices__list">
                            <li class="prices__list-item button-order">
                                <h4 class="prices__title">Контекстная реклама</h4>
                                <p class="prices__description">от 15 000 Р</p>
                            </li>
                            <li class="prices__list-item button-order">
                                <h4 class="prices__title">Создание сайтов</h4>
                                <p class="prices__description">от 60 000 Р</p>
                            </li>
                            <li class="prices__list-item button-order">
                                <h4 class="prices__title">Комплексный аудит</h4>
                                <p class="prices__description">от 30 000 Р</p>
                            </li>
                            <li class="prices__list-item button-order">
                                <h4 class="prices__title">Продвижение сайта</h4>
                                <p class="prices__description">от 35 000 Р</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="technologies">
                    <div class="technologies__inside container">
                        <h4 class="technologies__heading">МЫ создаем приложения на базе</h4>
                        <ul class="technologies__list">
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/html5.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/css3.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/scss.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/php.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/laravel.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/mysql.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/notion.svg" alt="" class="technologies__image">
                            </li>
                            <li class="technologies__list-item">
                                <img src="./assets/img/logos/web3.svg" alt="" class="technologies__image">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="advertisement advertisement_first">
                    <div class="advertisement__inside container">
                        <div class="advertisement__part advertisement__part_first">
                            <h4 class="advertisement__heading technologies__heading">реклама в Google и Яндекс</h4>
                            <h3 class="advertisement__subtitle">Контекстная реклама.</h3>
                            <p class="advertisement__description prices__description">
                                Контекстная реклама Яндекс. Директ и Google <br> Adwords – это самый быстрый способ привести<br> потенциальных клиентов на Ваш сайт. <br> Контекстная реклама в Google и Яндекс позволит <br> Вам оплачивать только реальные переходы <br> целевых пользователей и отслеживать <br> эффективность расхода бюджета до копейки.
                            </p>
                            <button class="advertisement__button button-order">Заказать</button>
                        </div>
                        <div class="advertisement__part advertisement__part_second">
                           <div class="advertisement__frame">
                            <div class="advertisement__image">
                                <img src="./assets/img/wDVYK04l_4x.webp" alt="" class="advertisement__image-item">
                            </div>                    
                           </div>
                        </div>
                    </div>
                </div>
                <div class="advertisement advertisement_second">
                    <div class="advertisement__inside container">
                        <div class="advertisement__part advertisement__part_first">
                            <h4 class="advertisement__heading technologies__heading">разработка</h4>
                            <h3 class="advertisement__subtitle">Создание сайта.</h3>
                            <p class="advertisement__description prices__description">
                                Мы предлагаем не просто разработку сайта, а <br>создание полноценного канала продаж через <br>Интернет, который будет настроен под специфику <br> Вашего бизнеса, независимо от цены <br>разрабатываемого проекта. Создание сайтов для<br> нас - это не просто работа. Мы всегда стремимся <br> вложить максимум своего опыта и умений в <br> проекты наших клиентов, чтобы добиваться <br> внушительных результатов. 
                            </p>
                            <button class="advertisement__button button-order">Заказать</button>
                        </div>
                        <div class="advertisement__part advertisement__part_second">
                           <div class="advertisement__frame">
                            <div class="advertisement__image">
                                <img src="./assets/img/midjorney234151_illustration_of_create_websites_473a48ac-9f36-469b-8ee3-00153e30eb8c.webp" alt="" class="advertisement__image-item">
                            </div>                    
                           </div>
                        </div>
                    </div>
                </div>
                <div class="advertisement advertisement_third">
                    <div class="advertisement__inside container">
                        <div class="advertisement__part advertisement__part_first">
                            <h4 class="advertisement__heading technologies__heading">аудит</h4>
                            <h3 class="advertisement__subtitle">Комплексный аудит.</h3>
                            <p class="advertisement__description prices__description">
                                Если Ваш сайт не приносит прибыль, нет <br> посетителей и заказов, а на первой странице <br> поисковиков находятся Ваши конкуренты, у Вас <br> проблемы. Выявить и решить их поможет аудит <br> сайта. Заказав аудит сайта, Вы узнаете, что нужно <br> доработать на сайте, чтобы он начал помогать <br> Вашему бизнесу.
                            </p>
                            <button class="advertisement__button button-order">Заказать</button>
                        </div>
                        <div class="advertisement__part advertisement__part_second">
                           <div class="advertisement__frame">
                            <div class="advertisement__image">
                                <img src="./assets/img/image_processing20230108-15046-7ds03o.webp" alt="" class="advertisement__image-item">
                            </div>                    
                           </div>
                        </div>
                    </div>
                </div>
                <div class="advertisement advertisement_fourth">
                    <div class="advertisement__inside container">
                        <div class="advertisement__part advertisement__part_first">
                            <h4 class="advertisement__heading technologies__heading">продвижение</h4>
                            <h3 class="advertisement__subtitle">Продвижение сайта.</h3>
                            <p class="advertisement__description prices__description">
                                Продвинем ваш сайт в топ-10 Яндекса и Google. <br> Увеличим посещаемость. Увеличим количество <br> звонков и заявок.
                            </p>
                            <button class="advertisement__button button-order">Заказать</button>
                        </div>
                        <div class="advertisement__part advertisement__part_second">
                           <div class="advertisement__frame">
                            <div class="advertisement__image">
                                <img src="./assets/img/erhSZdfA_4x.webp" alt="" class="advertisement__image-item">
                            </div>                    
                           </div>
                        </div>
                    </div>
                </div>
                <div class="about" id="about">
                    <div class="about__inside">
                        <h4 class="about__heading technologies__heading">О нас</h4>
                        <h3 class="about__title"><span>Амели</span></h3>
                        <p class="about__info">это диджитал-компания с возможностями собственных it-разработок и <br> комплексного интернет-маркетинга. Мы помогаем бизнесу развиваться, <br> обеспечивая его цифровыми решениями и новыми клиентами. Мы <br> развиваем Web-разработку и инструменты SEO-оптимизации, контекста, <br> таргетинга и комплексной аналитики. За 16 лет мы пережили 3 <br> экономических кризиса в нашей стране и одну пандемию, и точно знаем, <br> что наш продукт будет востребован всегда! В нашем бэкграунде более 5000 <br> созданных и продвинутых сайтов для бизнеса различного масштаба и <br> профиля, более 600 постоянных клиентов и 180 сотрудников в команде <br> веб-студии Амели!</p>
                    <ul class="about__list">    
                        <li class="about__list-item">
                            <div class="about__image"><img src="./assets/img/logos/bigExpirience.svg" alt="" class="about__image-item"></div>
                            <div class="about__text">
                            <h4 class="about__subtitle">Большой опыт</h4>
                            <p class="about__description prices__description">Мы работаем по всей России, <br> начиная с 2006 года, и <br> разработали более 921 проекта.</p>    
                            </div>
                            </li>
                        <li class="about__list-item">
                            <div class="about__image"><img src="./assets/img/logos/complexApproach.svg" alt="" class="about__image-item"></div>
                            <div class="about__text">
                            <h4 class="about__subtitle">Комплексный полход</h4>
                            <p class="about__description prices__description">Мы не просто реализуем красивый <br> дизайн, но и подготавливаем сайт к <br> дальнейшему продвижению.</p>    
                            </div>
                            </li>
                        <li class="about__list-item">
                            <div class="about__image"><img src="./assets/img/logos/professionalTeam.svg" alt="" class="about__image-item"></div>
                            <div class="about__text">
                            <h4 class="about__subtitle">Профессиональная команда</h4>
                            <p class="about__description prices__description">Наши специалисты знают как <br> оправдать ожидания клиента.</p>    
                            </div>
                            </li>
                    </ul>
                    </div>
                </div>
                <div class="reviews" id="reviews">
                    <div class="reviews__inside container">
                        <h4 class="reviews__heading technologies__heading">Наши отзывы</h4>
                        <ul id = "example" class="reviews__list">
                            <li class="reviews__list-item">
                                <p class="reviews__text">Достаточно продолжительное время искали хорошую, ответственную компанию по аудиту нашего сайта и привлечения потока клиентов. Такую, чтобы там были специалисты по всем профилям. Хотелось, чтобы люди знали своё дело, но в то же время могли нам, простым обывателям, далеким от мира IT, объяснить простыми словами что, как и почему. </p>
                                <div class="reviews__border"></div>
                                <div class="reviews__user">
                                    <div class="reviews__user-photo">
                                        <img src="https://sun9-29.userapi.com/impg/jw0eZw1KzCz0-rozRvmQOWO5xtpcCZ6c2kDdsw/Xh7_OmZKwzQ.jpg?size=1000x1000&quality=95&sign=e65bfa52f31f0950fddd391455f043a0&type=album" alt="" class="reviews__user-photo-item">
                                    </div>
                                    <div class="reviews__userdata">
                                        <div class="reviews__username">asocility1over</div>
                                        <div class="reviews__userservice">Комплексный аудит</div>
                                    </div>
                                </div>
                            </li>
                            <li class="reviews__list-item">
                                <p class="reviews__text"> Компания отличная, а сотрудники просто сокровище. Это та сама компания, которых осталось совсем мало, где идеально реализовано сочетание человечности и профессионализма. Ребята работают быстро, чётко. Адаптируются под проект заказчика. Работаю с ребятами не первый раз.</p>
                                <div class="reviews__border"></div>
                                <div class="reviews__user">
                                    <div class="reviews__user-photo">
                                        <img src="https://static16.tgcnt.ru/posts/_0/6e/6e8ac49a9cf5a6194ae27059f5872635.jpg" alt="" class="reviews__user-photo-item">
                                    </div>
                                    <div class="reviews__userdata">
                                        <div class="reviews__username">Григорий Черемисов</div>
                                        <div class="reviews__userservice">Разработка сайта</div>
                                    </div>
                                </div>
                            </li>
                            <li class="reviews__list-item">
                            <p class="reviews__text">Продвигают сайт автозапчастей уже не первый год. Много работы уже было сделано. Претензии с нашей стороны тоже возникали, но всегда удавалось их решить мирно и быстро. </p>
                                <div class="reviews__border"></div>
                                <div class="reviews__user">
                                    <div class="reviews__user-photo">
                                        <img src="https://sun9-34.userapi.com/impg/IKjhsPK_cYnUnUK01efAyo2XpzVTkK8jyYitYQ/_2cWMlXMc8Y.jpg?size=917x1049&quality=95&sign=9b290702c3c33cc18611ee57e4398e22&type=album" alt="" class="reviews__user-photo-item">
                                    </div>
                                    <div class="reviews__userdata">
                                        <div class="reviews__username">Иван Першин</div>
                                        <div class="reviews__userservice">Продвижение сайта</div>
                                    </div>
                                </div>
                            </li>
                            <?php 
                            require "./vendor/components/connect.php";
                    
                            $sql = "SELECT * FROM reviews";
                            $result = mysqli_query($conn, $sql);
                    
                            // Цикл для отображения всех отзывов
                            foreach ($result as $row) {
                            echo "<li class='reviews__list-item'>";
                            echo "<p class='reviews__text'>" . $row['review'] . "</p>";
                            echo "<div class='reviews__border'></div>";
                            echo "<div class='reviews__user'>";
                            echo "<div class='reviews__user-photo'>";
                            echo "<img src='" . $row['image'] . "' alt='' class='reviews__user-photo-item'>";
                            echo "</div>";
                            echo "<div class='reviews__userdata'>";
                            echo "<div class='reviews__username'>" . $row['nickname'] . "</div>";
                            echo "<div class='reviews__userservice'>" . $row['service'] . "</div>";
                            if(isset($_SESSION['login'])) {
                                if ($_SESSION['login'] === $row['login']) {
                                    // Отзыв создан текущим пользователем
                                    // Ваш код для добавления кнопки удаления
                                    
                                    echo "<button class='reviews__delete-btn registation__close' onclick='deleteReview(" . $row['index'] . ")'>&#10060;</button>";
                                    echo "<button class='reviews__edit-btn edit-form' onclick='setId(" . $row['index'] . ")'><img class='reviews__edit-btn-item' src='https://cdn-icons-png.flaticon.com/512/1024/1024092.png' alt='' style='max-width: 100%;'></button>";
                                }
                            }
                            echo "</div>";
                            echo "</div>";
                            echo "</li>";
                    }?>
                        </ul>
                        <?php if(isset($_SESSION['login'])) {?><button class="reviews__button advertisement__button survey-button">Написать отзыв</button><?php }?>
                    </div>
                </div>
                <div class="works" id="works">
                    <div class="works__inside container">
                        <h4 class="work__header technologies__heading">Наши работы</h4>
                        <ul class="work__list">
                            <?php 
                            require "./vendor/components/connect.php";
                    
                            $sql2 = "SELECT * FROM works";
                            $result2 = mysqli_query($conn, $sql2);
                    
                            // Цикл для отображения всех отзывов
                            foreach ($result2 as $row2) {
                            echo "<li class='work__list-item'>";
                            echo "<a href='" . $row2['link'] . "' class='work__list-link' target='_blank'>";
                            echo "<div class='work__image'>";
                            echo "<img src='" . $row2['img'] . "' alt='' class='work__image-item'>";
                            echo "</div>";
                            echo "<div class='work__desc'>";
                            echo "<h5 class='work__subtitle'>" . $row2['type'] . "</h5>";
                            echo "<div class='work__border'></div>";
                            echo "<h4 class='work__title'>" . $row2['title'] . "</h4>";
                            echo "</div>";
                            echo "</a>";
                            echo "</li>";
                    }?>
                             <li class="work__list-item">
                                <a href="https://www.youtube.com/watch?v=mw1Yt4XL-5M" class="work__list-link" target="_blank">
                                    <div class="work__image">
                                        <img src="https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_Oblozhka.jpg" alt="" class="work__image-item">
                                    </div>
                                    <div class="work__desc">
                                        <h5 class="work__subtitle">Интернет-магазин</h5>
                                        <div class="work__border"></div>
                                        <h4 class="work__title">интернет-магазин "хлебодар"</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="work__list-item">
                                <a href="https://www.youtube.com/watch?v=mw1Yt4XL-5M" class="work__list-link" target="_blank">
                                    <div class="work__image">
                                        <img src="https://mahog.ru/cache/img/480x480_0_0_0/upload_image_2022_09_oblozhka_2.png" alt="" class="work__image-item">
                                    </div>
                                    <div class="work__desc">
                                        <h5 class="work__subtitle">Корпоративный сайт</h5>
                                        <div class="work__border"></div>
                                        <h4 class="work__title">Титан-смазочные материалы</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="contacts" id="contacts">
                    <div class="contacts__inside container">
                        <h4 class="contacts__header technologies__heading">Контакты</h4>
                        <div class="contacts__content">
                            <div class="contacts__info">
                                <div class="contacts__address">
                                    <h3 class="contacts__title">Адрес:</h3>
                                    <p class="contacts__description ad__description prices__description">644043, Омск, ул. Фрунзе, 1к4, ТОК "Миллениум", 3 этаж, офис 307</p>
                                </div>
                                <div class="contacts__telephone">
                                    <h3 class="contacts__title">Телефон:</h3>
                                    <p class="contacts__description ad__description prices__description">+7 (3812) 29-42-88, +7 (3812) 29-42-89</p>
                                </div>
                            </div>
                            <div class="contacts__map">
                                <iframe class="contacts__map-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1782.9541685429654!2d73.3552060322815!3d54.99373249896027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43ab01dfe6cb8a69%3A0x4537df3f63c31c6d!2z0JzQmNCb0JvQldCd0JjQo9CcLCDQsNCz0LXQvdGC0YHRgtCy0L4g0L3QtdC00LLQuNC20LjQvNC-0YHRgtC4!5e0!3m2!1sru!2sru!4v1670415369266!5m2!1sru!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="footer__inside container">
                <div class="footer__part footer__part_first">
                    <div class="footer__basic">
                        <a href="./index.php#main" class="footer__logo">  
                            <img class="footer__logo-item" src="./assets/img/logos/logo.svg" alt="logo">
                                </a>
                        <p class="footer__rights">® Амели 2023 - Все права защищены</p>
                        <ul class="footer___docs">
                            <li class="footer__docs-item"><a href="https://policies.google.com/privacy" class="footer__docs-link" target="_blank">Политика конфиденциальности</a></li>
                            <li class="footer__docs-item"><a href="https://policies.google.com/terms" class="footer__docs-link" target="_blank">Условия продажи</a></li>
                            <li class="footer__docs-item"><a href="https://policies.google.com/terms" class="footer__docs-link" target="_blank">Защита данных</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__part footer__part_second">
                    <ul class="footer__list">
                        <li class="footer__list-item"><a href="#services" class="footer__list-link">Услуги</a></li>
                        <li class="footer__list-item"><a href="#about" class="footer__list-link">О нас</a></li>   
                        <li class="footer__list-item"><a href="#reviews" class="footer__list-link">Отзывы</a></li>
                        <li class="footer__list-item"><a href="#works" class="footer__list-link">Портфолио</a></li>
                        <li class="footer__list-item">
                        <a href="#contacts" class="footer__list-link">Контакты</a>
                            <ul class="footer__socials">
                                <li class="footer__socials-item">
                                    <a href="https://t.me/hero2249" class="footer__socials-link" target="_blank">
                                        <div class="footer__image">
                                            <img src="./assets/img/logos/telegram.svg" alt="" class="footer__image-item">
                                        </div>
                                        <span>@ameli</span>
                                    </a>
                                </li>
                                <li class="footer__socials-item">
                                    <a href="https://github.com/Newbie17373" class="footer__socials-link" target="_blank">
                                        <div class="footer__image">
                                            <img src="./assets/img/logos/github.svg" alt="" class="footer__image-item">
                                        </div>
                                        <span>@Newbie17373</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </footer>
    </div>
</body>
</html>