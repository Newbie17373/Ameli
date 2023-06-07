<div class="order">
            <div class="order-inside">
                <a class="order__area"></a>
                <form action="./order.php" class="order__form" method="post">
                    <a class="order__close registation__close">&#215;</a>
                    <p class="registration__text registration__text_first prices__description">Ваше имя</p>
                    <input type="text" class="order__input registration__input" name="user_name" placeholder="Евгений" minlength="3" max-length="20" >
                    <p class="registration__text prices__description">Ваша почта</p>
                    <input type="email" class="order__input registration__input" name="user_email" placeholder="example@gmail.com" required minlength="9" max-length="60">
                    <p class="registration__text prices__description">Запрашиваемя услуга</p>
                    <select name="user_service" id="" class="order__menu registration__input">
                        <option value="Контекстная реклама" class="order__option registration__input">Контекстная реклама</option>
                        <option value="Создание сайтов" class="order__option registration__input" selected>Создание сайтов</option>
                        <option value="Комплексный аудит" class="order__option registration__input">Комплексный аудит</option>
                        <option value="Продвижение сайта" class="order__option registration__input">Продвижение сайта</option>
                    </select>
                    <p class="registration__text prices__description">Ваш номер телефона</p>
                    <input type="tel" class="order__input registration__input" name="user_phone" placeholder="89136798698" required pattern="[0-9]{11}" minlength="11" max-length="11">
                    <input id="button" type="submit" class="order__button registration__button" value="Отправить">
                </form>
            </div>
        </div>