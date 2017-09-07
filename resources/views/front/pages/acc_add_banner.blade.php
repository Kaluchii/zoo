@extends('front.layout')
@section('content')
    <div class="lk-header">
        <div class="lk-header__info">
            <h1 class="lk-header__title">Кабинет пользователя <span class="lk-header__user-number">№123456789</span></h1>
            <div class="lk-header__balance-wrap">
                <p class="lk-header__balance-text">Ваш баланс <span class="lk-header__balance">19 540 ед.</span></p>
                <button class="lk-header__balance-up-btn button button--small">Пополнить</button>
            </div>
        </div>
        <div class="lk-header__nav">
            <ul class="lk-header__nav-list">
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Ваши объявления</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link is-active">Баннеры</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Избранные</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Сообщения</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Настройки</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Баланс <span class="lk-header__nav-balance">19 540 ед.</span></a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <main class="lk">
            <h2 class="lk__title">Добавить баннер</h2>
            <div class="lk__content-wrap">
                <div class="lk__form-rows form-rows">
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap input-row__success">
                            <label for="category" class="input-row__label"><span class="input-row__name">Категория<i class="sym-necessary">&nbsp;*</i></span></label>
                            <select name="category" id="category" class="select gr-h">
                                <option value="jquery">Главная страница</option>
                            </select>
                            <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">В каком разделе вы хотите разместить рекламный баннер?</span></p>
                        </div>
                    </div>
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap">
                            <label for="category" class="input-row__label"><span class="input-row__name">Позиция баннера<i class="sym-necessary">&nbsp;*</i></span></label>
                            <select name="category" id="category" class="select gr-h">
                                <option value="jquery">Растяжка сверху 1000×100 пикс.</option>
                            </select>
                            <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">Доступные позиции</span></p>
                        </div>
                    </div>
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap">
                            <div class="input-row__banner">
                                <div class="input-row__banner-size">1000×100 пикселей</div>
                                <div class="input-row__banner-position-wrap">
                                    <img src="/img/banner_position.png" alt="" class="input-row__banner-position">
                                </div>
                            </div>
                            <p class="input-row__clarification input-row__clarification--top-align"><i class="suc-input"></i><span class="input-row__clarification-text">Стоимость баннера — 500 ед.</span></p>
                        </div>
                    </div>
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap input-row__success">
                            <label for="category" class="input-row__label"><span class="input-row__name">Город<i class="sym-necessary">&nbsp;*</i></span></label>
                            <select name="category" id="category" class="select gr-h">
                                <option value="jquery">Алматы</option>
                            </select>
                            <p class="input-row__clarification"><i class="suc-input"></i></p>
                        </div>
                    </div>
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap">
                            <label for="" class="input-row__label"><span class="input-row__name">Изображение<i class="sym-necessary">&nbsp;*</i></span></label>
                            <label class="file-select">
                                <input type="file" id="file1" class="file-select__field">
                                <span class="file-select__button">Выберите файл...</span>
                            </label>
                            <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">В формате JPG, GIF, PNG</span></p>
                        </div>
                    </div>
                    {{--<div class="form-rows__input-row input-row">
                        <div class="input-row__wrap">
                        </div>
                    </div>--}}
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap">
                            <label for="contact" class="input-row__label"><span class="input-row__name">Ссылка<i class="sym-necessary">&nbsp;*</i></span></label>
                            <input type="text" id="link" class="input" placeholder="">
                            <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">Куда перейдет пользователь с вашего баннера</span></p>
                        </div>
                    </div>
                    <div class="form-rows__input-row input-row">
                        <div class="input-row__wrap input-row__success">
                            <label for="textarea" class="input-row__label"><span class="input-row__name">Ваш комментарий<i class="sym-necessary">&nbsp;*</i></span></label>
                            <textarea name="textarea" id="textarea" class="textarea textarea--small" placeholder="Введите текст ..."></textarea>
                            <p class="input-row__clarification input-row__clarification--top-align"><i class="suc-input"></i></p>
                        </div>
                    </div>
                    <p class="lk__moderate-info"><span class="lk__moderate-info-text">Модератор увидит ваш баннер в рабочее время — 9:00 до 18:00 в будние дни</span></p>
                </div>
                <hr class="lk__dashed-line dashed-line">
                <div class="lk__form-rows form-rows">
                    <div class="form-rows__input-row input-row">
                        <button class="button">Отправить на модерацию</button>
                    </div>
                    <p class="lk__rules-reminder">Отправляя на модерацию, вы соглашаетесь с <a href="" class="link">правилами подачи баннерной рекламы</a></p>
                </div>
            </div>
        </main>
    </div>
@endsection
