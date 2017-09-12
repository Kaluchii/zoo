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
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link is-active">Сообщения</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Настройки</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Баланс <span class="lk-header__nav-balance">19 540 ед.</span></a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <main class="lk">
            <div class="lk__title-wrap">
                <h2 class="lk__title">Сообщения</h2>
            </div>
            <div class="lk__content-wrap dialog">
                <div class="dialog__top">
                    <div class="dialog__left">
                        <p class="dialog__opponent-name">Виктор</p>
                        <p class="dialog__opponent-all-declarations"><a href="" class="dialog__all-declarations-link light-grey-link">Все объявления пользователя</a></p>
                    </div>
                    <div class="dialog__right">
                        <p class="dialog__all-dialogs"><a href="" class="dialog__all-dialogs-link link">Вернуться к сообщениям</a></p>
                    </div>
                </div>
                <div class="dialog__chat-wrap">
                    <div class="dialog__chat chat">
                        <div class="chat__wrapper">
                            <div class="chat__message">
                                <p class="chat__date">2 июля 2017</p>
                                <div class="chat__text-wrap">
                                    <p class="chat__text">Скажите, а какую скидку дадите?<br>Очень хочется.<br>Но не могу.</p>
                                </div>
                                <div class="chat__complain"><a href="" class="chat__complain-link light-grey-link">Пожаловаться</a></div>
                            </div>
                            <div class="chat__message chat__message--me">
                                <p class="chat__date">3 июля 2017</p>
                                <div class="chat__text-wrap">
                                    <p class="chat__text">Скажите, а какую скидку дадите?</p>
                                </div>
                            </div>
                            <div class="chat__message">
                                <p class="chat__date">2 июля 2017</p>
                                <div class="chat__text-wrap">
                                    <p class="chat__text">Скажите, а какую скидку дадите?<br>Очень хочется.<br>Но не могу.</p>
                                </div>
                                <div class="chat__complain"><a href="" class="chat__complain-link light-grey-link">Пожаловаться</a></div>
                            </div>
                            <div class="chat__message chat__message--me">
                                <p class="chat__date">3 июля 2017</p>
                                <div class="chat__text-wrap">
                                    <p class="chat__text">Скажите, а какую скидку дадите?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dialog__write-message add-message add-message--dialog">
                        <p class="add-message__title">Ваше сообщение</p>
                        <textarea name="" class="add-message__textarea textarea"></textarea>
                        <div class="add-message__bottom-wrap">
                            <p class="add-message__info-text">Отправляя сообщения, вы соглашаетесь с
                                <a href="" class="link">правилами общения на сайте</a>. Будьте вежливы.</p>
                            <div class="add-message__button-wrap">
                                <a href="" class="button">Отправить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
