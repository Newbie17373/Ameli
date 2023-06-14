<div class="survey">
            <div class="order-inside">
                <a class="order__area"></a>
                <form action="./vendor/action/surveyes.php" name="survey-form" class="order__form" method="post">
                    <a class="order__close registation__close">&#215;</a>
                    <h5 class="registration__subtitle about__title">Добавить отзыв</h5>
                    <p class="registration__text registration__text_first prices__description">Текст вашего отзыва</p>
                    <textarea id="text" class="order__input order__textarea registration__input" name="reviews_text" placeholder="Как вам услуги и товары этой компании? Расскажите в деталях о качестве, обслуживании и других аспектах клиентского опыта. Рекомендуете ли вы эту компанию? Что заслуживает отдельного внимания?" required pattern="[А-я0-9_.-]{50,365}" minlength="50" maxlength="365"></textarea>
                        <p class="registration__text prices__description">Оказанная услуга</p>
                    <select name="user_service" id="" class="order__menu registration__input" required pattern="[А-я0-9]{19,19}" minlength="19" maxlength="19">
                        <option value="Контекстная реклама" class="order__option registration__input">Контекстная реклама</option>
                        <option value="Создание сайтов" class="order__option registration__input" selected>Создание сайтов</option>
                        <option value="Комплексный аудит" class="order__option registration__input">Комплексный аудит</option>
                        <option value="Продвижение сайта" class="order__option registration__input">Продвижение сайта</option>
                    </select>
                    <p class="registration__text prices__description">Ваша оценка</p>
                    <select name="user_mark" id="" class="order__menu registration__input" required pattern="[0-5]{1}" minlength="1" maxlength="1">
                    <option value="" class="order__option registration__input" selected>--Пожалуйста, выберите оценку--</option>
                        <option value="1" class="order__option registration__input">1</option>
                        <option value="2" class="order__option registration__input">2</option>
                        <option value="3" class="order__option registration__input">3</option>
                        <option value="4" class="order__option registration__input">4</option>
                        <option value="5" class="order__option registration__input">5</option>
                    </select>
                    <input id="button" type="submit" class="order__button registration__button" value="Отправить">
                </form>
            </div>
        </div>
        