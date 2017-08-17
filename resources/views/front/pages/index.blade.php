@extends('front.layout')
@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="input-row">
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
            <div class="input-row">
                <div class="input-row__wrap">
                    <label for="vid" class="input-row__label"><span class="input-row__name">Выберите породу<i class="sym-necessary">&nbsp;*</i></span></label>
                    <select name="vid" id="vid" class="select gr-h">
                        <option value="jquery">Такса</option>
                        <option value="jqueryui">Мопс</option>
                        <option value="somefile">Овчарка</option>
                    </select>
                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                </div>
            </div>
            <div class="input-row">
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
            <div class="input-row">
                <div class="input-row__wrap input-row__success">
                    <label for="classic" class="input-row__label"><span class="input-row__name">Возраст, в месяцах<i class="sym-necessary">&nbsp;*</i></span></label>
                    <input type="text" id="classic" class="input" placeholder="Укажите возраст">
                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                </div>
            </div>
            <div class="input-row">
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
            <div class="input-row">
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
            <div class="input-row">
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
            <div class="input-row">
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
            <div class="input-row">
                <div class="input-row__wrap input-row__error">
                    <label for="contact" class="input-row__label"><span class="input-row__name">Контактное лицо<i class="sym-necessary">&nbsp;*</i></span></label>
                    <input type="text" id="contact" class="input" placeholder="">
                    <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">Имя будет отображаться на сайте</span></p>
                </div>
            </div>
            <div class="input-row">
                <div class="input-row__wrap">
                    <label for="readonly" class="input-row__label"><span class="input-row__name">Эл. почта<i class="sym-necessary">&nbsp;*</i></span></label>
                    <input readonly type="text" id="readonly" class="input input--readonly" value="vitrety@yandex.ru">
                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                </div>
            </div>
            <div class="input-row">
                <div class="input-row__wrap input-row__success">
                    <label for="textarea" class="input-row__label"><span class="input-row__name">Описание<i class="sym-necessary">&nbsp;*</i></span>
                        <span class="input-row__description">Расскажите о характере и особенностях питомца<br>до 4000 знаков</span></label>
                    <textarea name="textarea" id="textarea" class="textarea" placeholder="Введите текст ..."></textarea>
                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                </div>
            </div>
            <div class="input-row">
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
            <div class="input-row">
                <div class="input-row__wrap">
                    <label class="form__checkbox checkbox">
                        <input class="checkbox__input" type="checkbox" value="1">
                        <span class="checkbox__wrap">
                            <span class="checkbox__button"></span>
                            <span class="checkbox__text">Я соглашаюсь с правилами подачи объявлений</span>
                        </span>
                    </label>
                </div>
            </div>
            <div class="input-row">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
