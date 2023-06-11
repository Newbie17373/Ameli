<div class="survey__update">
            <div class="order-inside">
                <a class="order__area"></a>
                <form action="" name="survey-form" class="order__form" method="post">
                    <a class="order__close registation__close">&#215;</a>
                    <h5 class="registration__subtitle about__title">Изменить отзыв</h5>
                    <p class="registration__text registration__text_first prices__description">Текст вашего отзыва</p>
                    <textarea id="text" class="order__input order__textarea registration__input order__textarea_edit" name="reviews_text" placeholder="Как вам услуги и товары этой компании?
                        Расскажите в деталях о качестве, обслуживании и других аспектах клиентского опыта.
                        Рекомендуете ли вы эту компанию?
                        Что заслуживает отдельного внимания?" required pattern="[А-я0-9_.-]{50,400}" minlength="50" maxlength="400"></textarea>
                        <p class="registration__text prices__description">Оказанная услуга</p>
                    <select name="user_service" id="" class="order__menu registration__input order__menu_edit">
                        <option value="Контекстная реклама" class="order__option registration__input">Контекстная реклама</option>
                        <option value="Создание сайтов" class="order__option registration__input" selected>Создание сайтов</option>
                        <option value="Комплексный аудит" class="order__option registration__input">Комплексный аудит</option>
                        <option value="Продвижение сайта" class="order__option registration__input">Продвижение сайта</option>
                    </select>
                    <input id="button" type="button" class="order__button registration__button order__button_edit" value="Обновить" onclick="">
                </form>
            </div>
        </div>