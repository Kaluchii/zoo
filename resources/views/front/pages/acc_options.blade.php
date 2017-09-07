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
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Баннеры</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Избранные</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Сообщения</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link is-active">Настройки</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Баланс <span class="lk-header__nav-balance">19 540 ед.</span></a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <main class="lk">
            <h2 class="lk__title">Настройки профиля</h2>
            <div class="lk__content-wrap settings">
                <ul class="settings__nav">
                    <li class="settings__nav-item"><span class="settings__nav-link dotted-link is-active" data-tab-id="contacts">Контакты</span></li>
                    <li class="settings__nav-item"><span class="settings__nav-link dotted-link" data-tab-id="">Уведомления</span></li>
                    <li class="settings__nav-item"><span class="settings__nav-link dotted-link" data-tab-id="">Изменить пароль</span></li>
                    <li class="settings__nav-item"><span class="settings__nav-link dotted-link" data-tab-id="">Изменить почту</span></li>
                    <li class="settings__nav-item"><span class="settings__nav-link dotted-link" data-tab-id="">Подключить соцсети</span></li>
                </ul>
                <div class="settings__tabs">
                    <div class="settings__tab"  id="contacts" style="display: none;">
                        <div class="settings__form-rows form-rows">
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="contact" class="input-row__label"><span class="input-row__name">Контактное лицо<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input type="text" id="contact" class="input" placeholder="">
                                    <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">Имя будет отображаться на сайте</span></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="tel" class="input-row__label"><span class="input-row__name">Номер телефона<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input readonly type="tel" id="tel" class="input input--readonly" placeholder="" value="+7 777 123-45-67">
                                    <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text"><a
                                                    href="#" class="dotted-link">Изменить</a></span></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="tel" class="input-row__label"><span class="input-row__name">Дополнительный телефон</span></label>
                                    <input type="tel" id="tel" class="input" placeholder="+7">
                                    <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text"><a
                                                    href="#" class="dotted-link">Добавить номер</a></span></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="contact" class="input-row__label"><span class="input-row__name">Город</span></label>
                                    <input type="text" id="contact" class="input" placeholder="">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="contact" class="input-row__label"><span class="input-row__name">Адрес</span></label>
                                    <input type="text" id="contact" class="input" placeholder="">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                        </div>
                        <hr class="settings__dashed-line dashed-line">
                        <div class="settings__form-rows form-rows">
                            <button class="button">Сохранить</button>
                        </div>
                    </div>

                    <div class="settings__tab"  id="uved">
                        <div class="settings__form-rows form-rows">
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label class="form__checkbox checkbox">
                                        <input class="checkbox__input" type="checkbox" value="1">
                                        <span class="checkbox__wrap"><span class="checkbox__button"></span><span class="checkbox__text">Получать уведомления о новых сообщениях</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label class="form__checkbox checkbox">
                                        <input class="checkbox__input" type="checkbox" value="1">
                                        <span class="checkbox__wrap"><span class="checkbox__button"></span><span class="checkbox__text">Получать уведомления о новых комментариях на объявления</span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label class="form__checkbox checkbox">
                                        <input class="checkbox__input" type="checkbox" value="1">
                                        <span class="checkbox__wrap"><span class="checkbox__button"></span><span class="checkbox__text">Получать рассылку о новостях Зоомира</span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="settings__dashed-line dashed-line">
                        <div class="settings__form-rows form-rows">
                            <button class="button">Сохранить</button>
                        </div>
                    </div>

                    <div class="settings__tab"  id="changepass">
                        <div class="settings__form-rows form-rows">
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="tel" class="input-row__label"><span class="input-row__name">Текущий пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input type="password" id="tel" class="input">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="tel" class="input-row__label"><span class="input-row__name">Новый пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input type="password" id="tel" class="input">
                                    <p class="input-row__clarification"><i class="suc-input"></i><span class="input-row__clarification-text">8 символов и букв</span></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="tel" class="input-row__label"><span class="input-row__name">Повторите новый пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input type="password" id="tel" class="input">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                        </div>
                        <hr class="settings__dashed-line dashed-line">
                        <div class="settings__form-rows form-rows">
                            <button class="button">Сохранить</button>
                        </div>
                    </div>

                    <div class="settings__tab"  id="changemail">
                        <div class="settings__form-rows form-rows">
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="readonly" class="input-row__label"><span class="input-row__name">Ваша текущая почта<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input readonly type="email" id="readonly" class="input input--readonly" value="info@interpro.kz">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="" class="input-row__label"><span class="input-row__name">Новая почта<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input type="email" id="" class="input" value="">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                            <div class="form-rows__input-row input-row">
                                <div class="input-row__wrap">
                                    <label for="tel" class="input-row__label"><span class="input-row__name">Текущий пароль<i class="sym-necessary">&nbsp;*</i></span></label>
                                    <input type="password" id="tel" class="input">
                                    <p class="input-row__clarification"><i class="suc-input"></i></p>
                                </div>
                            </div>
                        </div>
                        <hr class="settings__dashed-line dashed-line">
                        <div class="settings__form-rows form-rows">
                            <button class="button">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
