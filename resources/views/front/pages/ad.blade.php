@extends('front.layout')
@section('content')
    <div class="content">
        <main class="add-advert">
            <h1 class="add-advert__title biggest-title">Подать объявление</h1>
            <p class="add-advert__clarification">Объявление размещается сроком на <span class="bold">7 дней.</span><br>
            Продлить объявление можно воспользовавшись платными услугами. <br>Обязательные поля помечены<i class="sym-necessary">&nbsp;*</i>
            </p>
            <div class="add-advert__form form-rows">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__success">
                        <label for="category" class="input-row__label"><span class="input-row__name">Категория<i class="sym-necessary">&nbsp;*</i></span></label>
                        <select name="category" id="category" class="select gr-h">
                            <option value="jquery">Собаки</option>
                            <option value="jqueryui">Кошки</option>
                            <option value="somefile">Рептилии</option>
                        </select>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="vid" class="input-row__label"><span class="input-row__name">Выберите породу<i class="sym-necessary">&nbsp;*</i></span></label>
                        <select name="vid" id="vid" class="select gr-h">
                            <option value="jquery">Такса</option>
                            <option value="jqueryui">Мопс</option>
                            <option value="somefile">Овчарка</option>
                        </select>
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__warning-text">Модератор отклонит объявление, если порода не соответствует заявленной.
                        Если породы нет в списке, выберите прочие и опишите в комментарии.</span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__success">
                        <label class="input-row__label"><span class="input-row__name">Пол<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="pol" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Мальчик</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="pol" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Девочка</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__success">
                        <label for="classic" class="input-row__label"><span class="input-row__name">Возраст, в месяцах<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="text" id="classic" class="input" placeholder="Укажите возраст">
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Размер<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="radio" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Малый</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="radio" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Средний</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="radio" class="radio-switchers__input" type="radio" value="3">
                                <span class="radio-switchers__button">Крупный</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Длина шерсти<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="wool" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Короткая</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="wool" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Длинная</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="wool" class="radio-switchers__input" type="radio" value="3">
                                <span class="radio-switchers__button">Без шерсти</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__success">
                        <label for="select" class="input-row__label"><span class="input-row__name">Окрас<i class="sym-necessary">&nbsp;*</i></span></label>
                        <select name="select" id="select" class="select gr-h">
                            <option value="jquery">Черный</option>
                            <option value="jqueryui">Белый</option>
                            <option value="somefile">Пятнистый</option>
                            <option value="someotherfile">Достаточно длинное название чтобы не поместиться</option>
                        </select>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Прививки<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Привит</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Не привит</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Стерилизация<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Стерилизован</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Не стерилизован</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Кастрация<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Кастрирован</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Не кастрирован</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Купирование<i class="sym-necessary">&nbsp;*</i></span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Купирован</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Не купирован</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="readonly" class="input-row__label"><span class="input-row__name">Цена в тенге<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input readonly type="text" id="readonly" class="input input--readonly">
                        <label class="checkbox-btn">
                            <input class="checkbox-btn__input" type="checkbox" value="1">
                            <span class="checkbox-btn__button">Бесплатно</span>
                        </label>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__success">
                        <label for="textarea" class="input-row__label"><span class="input-row__name">Описание<i class="sym-necessary">&nbsp;*</i></span>
                            <span class="input-row__description">Расскажите о характере и особенностях питомца<br>до 4000 знаков</span></label>
                        <textarea name="textarea" id="textarea" class="textarea" placeholder="Введите текст ..."></textarea>
                        <p class="input-row__clarification input-row__clarification--top-align"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Фотографии</span>
                            <span class="input-row__description">Вы можете загрузить до 8 фотографий размером до 1 Мб</span></label>
                        <div class="image-download-box">
                            <ul class="image-download-box__list">
                                <li class="image-download-box__list-item img-download">
                                    <div class="img-download__button-wrap">
                                        <input type="file" id="file1" class="img-download__input">
                                        <span class="img-download__rotate"></span>
                                        <span class="img-download__del"></span>
                                        <label for="file1" class="img-download__button">
                                            <img src="/img/placeholde.png" alt="" class="img-download__preview">
                                            <span class="img-download__caption">Главное фото</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="image-download-box__list-item img-download">
                                    <div class="img-download__button-wrap">
                                        <input type="file" id="file1" class="img-download__input">
                                        <label for="file1" class="img-download__button">
                                            <img src="" alt="" class="img-download__preview">
                                        </label>
                                    </div>
                                </li>
                                <li class="image-download-box__list-item img-download">
                                    <div class="img-download__button-wrap">
                                        <input type="file" id="file1" class="img-download__input">
                                        <label for="file1" class="img-download__button">
                                            <img src="" alt="" class="img-download__preview">
                                        </label>
                                    </div>
                                </li>
                                <li class="image-download-box__list-item img-download">
                                    <div class="img-download__button-wrap">
                                        <input type="file" id="file1" class="img-download__input">
                                        <label for="file1" class="img-download__button">
                                            <img src="" alt="" class="img-download__preview">
                                        </label>
                                    </div>
                                </li>
                                <li class="image-download-box__list-item img-download">
                                    <div class="img-download__button-wrap">
                                        <input type="file" id="file1" class="img-download__input">
                                        <label for="file1" class="img-download__button">
                                            <img src="" alt="" class="img-download__preview">
                                        </label>
                                    </div>
                                </li>
                                <li class="image-download-box__list-item img-download">
                                    <div class="img-download__button-wrap">
                                        <input type="file" id="file1" class="img-download__input">
                                        <label for="file1" class="img-download__button">
                                            <img src="" alt="" class="img-download__preview">
                                        </label>
                                    </div>
                                </li>
                            </ul>
                            <p class="image-download-box__proposal-alternative">Если возникли проблемы с загрузкой фотографий,
                                воспользуйтесь <a href="#" class="dotted-link">альтернативной формой</a></p>
                        </div>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Комментарии к объявлению</span></label>
                        <div class="radio-switchers">
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="1">
                                <span class="radio-switchers__button">Включены</span>
                            </label>
                            <label class="radio-switchers__item">
                                <input name="priv" class="radio-switchers__input" type="radio" value="2">
                                <span class="radio-switchers__button">Отключены</span>
                            </label>
                        </div>
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
            </div>

            <hr class="add-advert__dashed-line dashed-line">

            <h2 class="add-advert__section-title big-title">Ваши контакты</h2>

            <div class="add-advert__form form-rows">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__error">
                        <label for="contact" class="input-row__label"><span class="input-row__name">Контактное лицо<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="text" id="contact" class="input" placeholder="">
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">Имя будет отображаться на сайте</span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__error">
                        <label for="tel" class="input-row__label"><span class="input-row__name">Номер телефона<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="tel" id="tel" class="input" placeholder="" value="+7 777 123-45">
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="readonly" class="input-row__label"><span class="input-row__name">Эл. почта<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input readonly type="email" id="readonly" class="input input--readonly" value="vitrety@yandex.ru">
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="tel" class="input-row__label"><span class="input-row__name">Дополнительный телефон<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="tel" id="tel" class="input" placeholder="+7">
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text"><a
                                        href="#" class="dotted-link">Добавить номер</a></span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" value="1">
                            <span class="checkbox__wrap">
                            <span class="checkbox__button"></span>
                            <span class="checkbox__text">Я соглашаюсь с <a href="#" class="dotted-link">правилами подачи объявлений</a></span>
                        </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <button class="button">Подать объявление</button>
                </div>
            </div>
            <p class="add-advert__notice">Неверно заполнено поле <span class="add-advert__inputs-with-error">Эл. почта, Номер телефона</span></p>
        </main>
    </div>
@endsection
