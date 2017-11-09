@extends('front.layout')
@section('content')
    <div class="content">
        <main class="add-advert">
            <h1 class="add-advert__title biggest-title">Регистрация пользователя</h1>

            <div class="add-advert__form form-rows">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="contact" class="input-row__label"><span class="input-row__name">Контактное лицо<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="text" id="contact" class="input" placeholder="">
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="readonly" class="input-row__label"><span class="input-row__name">Эл. почта<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="email" id="readonly" class="input">
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text"><a
                                        href="#" class="link">Войти в кабинет</a></span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="tel" class="input-row__label"><span class="input-row__name">Номер телефона<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="tel" id="tel" class="input" placeholder="+7">
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="tel" class="input-row__label"><span class="input-row__name">Пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="password" id="tel" class="input">
                        <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">8 символов и букв</span></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label for="tel" class="input-row__label"><span class="input-row__name">Повторите пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                        <input type="password" id="tel" class="input">
                        <p class="input-row__clarification"><i class="suc-input"></i></p>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" value="1">
                            <span class="checkbox__wrap">
                            <span class="checkbox__button"></span>
                            <span class="checkbox__text">Я согласен с <a href="#" class="dotted-link">пользовательским соглашением</a></span>
                        </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row input-row--btn-right-flag">
                    <button class="button">Зарегистрироваться</button>
                </div>
            </div>
            <div class="add-advert__social-authorization-row">
                <p class="add-advert__social-authorization-title">Регистрация через социальные сети</p>
                <div class="add-advert__social-authorization-wrap social-btns social-btns--center">
                    <a href="" class="social-btns__item social-btns__item--vk"></a>
                    <a href="" class="social-btns__item social-btns__item--od"></a>
                    <a href="" class="social-btns__item social-btns__item--fb"></a>
                    <a href="" class="social-btns__item social-btns__item--mm"></a>
                    <a href="" class="social-btns__item social-btns__item--gg"></a>
                </div>
            </div>
        </main>
    </div>
@endsection