@extends('front.layout')
@section('content')
    <div class="wrapper">
        <div class="form">
            <div class="input-row">
                <label for="classic" class="input-row__label"><span class="input-row__name">Возраст, в месяцах<i class="sym-necessary">&nbsp;*</i></span></label>
                <input type="text" id="classic" class="input" placeholder="Укажите возраст">
            </div>
            <div class="input-row">
                <label for="readonly" class="input-row__label"><span class="input-row__name">Эл. почта<i class="sym-necessary">&nbsp;*</i></span></label>
                <input readonly type="text" id="readonly" class="input input--readonly" value="vitrety@yandex.ru">
            </div>
            <div class="input-row">
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
            <div class="input-row">
                <label for="textarea" class="input-row__label"><span class="input-row__name">Описание<i class="sym-necessary">&nbsp;*</i></span>
                <span class="input-row__description">Расскажите о характере и особенностях питомца<br>до 4000 знаков</span></label>
                <textarea name="textarea" id="textarea" class="textarea"></textarea>
            </div>
        </div>
    </div>
@endsection
