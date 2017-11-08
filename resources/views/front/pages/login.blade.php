@extends('front.layout')
@section('content')
    <div class="content">
        <main class="add-advert">
            <h1 class="add-advert__title biggest-title">Вход в личный кабинет</h1>

            <div class="add-advert__form form-rows">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="input-row__label"><span class="input-row__name">Эл. почта<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="email" class="input" value="vitrety@yandex.ru">
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text"><a
                                        href="#" class="link">Регистрация</a></span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="tel" class="input-row__label"><span class="input-row__name">Пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="password" id="tel" class="input">
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text"><a
                                        href="#" class="light-grey-link">Восстановить пароль</a></span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__wrap--between">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" value="1">
                            <span class="checkbox__wrap">
                            <span class="checkbox__button"></span>
                            <span class="checkbox__text">Запомнить меня</span>
                        </span>
                        </label>
                        <button class="button">Войти</button>
                    </div>
                </div>
            </div>
            <div class="add-advert__social-authorization-row">
                <p class="add-advert__social-authorization-title">Войти через социальные сети</p>
                <div class="add-advert__social-authorization-wrap">
                    <img src="/img/soc_img.png" alt="">
                </div>
            </div>
        </main>
    </div>
@endsection