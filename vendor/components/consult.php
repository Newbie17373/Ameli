<div class="consult">
            <div class="order-inside">
                <a class="order__area"></a>
                <form action="/vendor/action/consult.php" class="order__form" method="post">
                    <a class="order__close registation__close">&#215;</a>
                    <h5 class="registration__subtitle about__title">Консультация</h5>
                    <p class="registration__text registration__text_first prices__description">Ваше имя</p>
                    <input type="text" class="order__input registration__input" name="user_name" placeholder="Евгений" required pattern="[А-Яа-я]{3,40}" minlength="3" maxlength="40" value="<?php if(isset($_SESSION['name'])) {echo $_SESSION['name'];}?>">
                    <p class="registration__text prices__description">Ваша почта</p>
                    <input type="email" class="order__input registration__input" name="user_email" placeholder="example@gmail.com" required pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" minlength="9" maxlength="60" value="<?php if(isset($_SESSION['email'])) {echo $_SESSION['email'];}?>">
                    <p class="registration__text prices__description">Ваш номер телефона</p>
                    <input type="tel" class="order__input registration__input" name="user_phone" placeholder="89136798698" required pattern="[0-9]{11}" minlength="11" maxlength="11" value="<?php if(isset($_SESSION['user_phone'])) {echo $_SESSION['user_phone'];}?>">
                    <input id="button" type="submit" class="order__button registration__button" value="Отправить">
                </form>
            </div>
        </div>