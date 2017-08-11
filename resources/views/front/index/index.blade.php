@extends('front.layout')
@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="input-row">
                <div class="input-row__wrap">
                    <label for="classic" class="input-row__label"><span class="input-row__name">Возраст, в месяцах<i class="sym-necessary">&nbsp;*</i></span></label>
                    <input type="text" id="classic" class="input" placeholder="Укажите возраст">
                </div>
            </div>
            <div class="input-row">
                <div class="input-row__wrap">
                    <label for="readonly" class="input-row__label"><span class="input-row__name">Эл. почта<i class="sym-necessary">&nbsp;*</i></span></label>
                    <input readonly type="text" id="readonly" class="input input--readonly" value="vitrety@yandex.ru">
                    <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">Имя будет отображаться на сайте</span></p>
                </div>
            </div>
            <div class="input-row">
                <div class="input-row__wrap">
                    <label class="input-row__label"><span class="input-row__name">Размер</span></label>
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
                </div>
            </div>
            <div class="input-row">
                <div class="input-row__wrap">
                    <label for="textarea" class="input-row__label"><span class="input-row__name">Описание<i class="sym-necessary">&nbsp;*</i></span>
                        <span class="input-row__description">Расскажите о характере и особенностях питомца<br>до 4000 знаков</span></label>
                    <textarea name="textarea" id="textarea" class="textarea" placeholder="Введите текст ..."></textarea>
                </div>
            </div>
            <div class="input-row">
                <div class="input-row__wrap">
                    <label for="readonly" class="input-row__label"><span class="input-row__name">Цена в тенге<i class="sym-necessary">&nbsp;*</i></span></label>
                    <input readonly type="text" id="readonly" class="input input--readonly">
                    <label class="form__checkbox-btn checkbox-btn">
                        <input class="checkbox-btn__input" type="checkbox" value="1">
                        <span class="checkbox-btn__button">Бесплатно</span>
                    </label>
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
                        <ul class="image-download-box__list image-download-list">
                            <li class="image-download-list__item"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
