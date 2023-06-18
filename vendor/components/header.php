<header class="header">
            <div class="header__inside container">
                <div class="header__part header__part_left">
                    <a href="./index.php#main" class="header__logo">  
                        <img class="header__logo-item header__logo-item_first" src="./assets/img/logos/logo.svg" alt="logo">
                    </a>
                </div>
                <div class="header__part header__part_mid">
                    <nav class="header__nav">
                        <ul class="header__list">
                            <li class="header__list-item"><a href="#services" class="header__list-link">Услуги</a></li>
                            <li class="header__list-item"><a href="#about" class="header__list-link">О нас</a></li>
                            <li class="header__list-item"><a href="#reviews" class="header__list-link">Отзывы</a></li>
                            <li class="header__list-item"><a href="#works" class="header__list-link">Портфолио</a></li>
                            <li class="header__list-item"><a href="#contacts" class="header__list-link">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="header__part header__part_right">
                        <div class="header__theme">
                            <ul class="header__theme-list">
                                <li class="header__theme-item">
                                    <button class="header__theme-button">
                                        <div class="header__theme-circle header__theme-circle_green"></div>
                                    </button>
                                </li>
                                <li class="header__theme-item selected">
                                    <button class="header__theme-button selected">
                                        <div class="header__theme-circle header__theme-circle_purple selected"></div>
                                    </button>
                                </li>
                                <li class="header__theme-item">
                                    <button class="header__theme-button">
                                        <div class="header__theme-circle header__theme-circle_red"></div>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <?php if(isset($_SESSION['login']) != true) {?>
                        <div class="header__personal-area">
                            <ul class="header__buttons">
                                <li class="header__buttons-item">
                                    <a href="./authentification.php" class="header__button-link">
                                        <button class="header__button header__button_sign-in intro__button_colorless">Войти</button>
                                    </a>
                                </li>
                                <li class="header__buttons-item">
                                    <a href="./registration.php" class="header__button-link">
                                        <button class="header__button header__button_sign-up intro__button_purple">Регистрация</button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <?php }?>
                        <?php if(isset($_SESSION['login'])) {?>
                            <div class="header__personal-area">
                            <ul class="header__buttons">
                                <li class="header__buttons-item">
                                <a href="<?php echo $_SESSION['user_photo']?>" class="header__userphoto reviews__user-photo" target="_blank">
                                    <img src='<?php echo $_SESSION['user_photo']?>' alt="" class="header__userphoto-item reviews__user-photo-item">
                                </a>
                                <span class="header__username"><?php echo $_SESSION['nickname']?></span>
                                    <a href="./vendor/components/logout.php" class="header__button-link">
                                        <button class="header__button header__button_sign-in intro__button_purple"><span>Выйти</span></button>
                                    </a>
                                </li>
                            </ul>
                            <?php }?>
                    </div>
                </div>
            </div>
            <div class="header__burger">
                    <span></span>
                </div>
        </header>