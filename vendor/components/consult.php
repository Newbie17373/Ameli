<div class="consult">
            <div class="order-inside">
                <a class="order__area"></a>
                <form action="./consult.php" class="order__form" method="post">
                    <a class="order__close registation__close">&#215;</a>
                    <h5 class="registration__subtitle about__title">Консультация</h5>
                    <p class="registration__text registration__text_first prices__description">Ваше имя</p>
                    <input type="text" class="order__input registration__input" name="user_name" placeholder="Евгений" minlength="3" maxlength="20" >
                    <p class="registration__text prices__description">Ваша почта</p>
                    <input type="email" class="order__input registration__input" name="user_email" placeholder="example@gmail.com" required minlength="9" maxlength="60">
                    <p class="registration__text prices__description">Ваш номер телефона</p>
                    <input type="tel" class="order__input registration__input" name="user_phone" placeholder="89136798698" required pattern="[0-9]{11}" minlength="11" maxlength="11">
                    <input id="button" type="submit" class="order__button registration__button" value="Отправить">
                </form>
            </div>
        </div>