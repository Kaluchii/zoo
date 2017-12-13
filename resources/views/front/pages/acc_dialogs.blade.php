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
            <div class="lk__content-wrap dialogs">
                <div class="dialogs__kind-btns">
                    <button class="dialogs__kind-btn is-active">Все сообщения</button>
                    <button class="dialogs__kind-btn">Избранные</button>
                    <button class="dialogs__kind-btn">Игнорируемые</button>
                    <div class="dialogs__select-wrap">
                        <select name="" id="messages" class="select cl-h">
                            <option value="1">Все сообщения</option>
                            <option value="2">Избранные</option>
                            <option value="3">Игнорируемые</option>
                        </select>
                    </div>
                </div>
                <ul class="dialogs__list">
                    <li class="dialogs__item dialogs-item dialogs-item--new-messages">
                        <div class="dialogs-item__left-col">
                            <p class="dialogs-item__name"><a href="" class="dialogs-item__link link">Виктор</a></p>
                            <p class="dialogs-item__title">Акита, девочка, 6 мес</p>
                            <p class="dialogs-item__date">Сегодня, 14:43</p>
                        </div>
                        <div class="dialogs-item__right-col">
                            <p class="dialogs-item__message-count">1 сообщение<span class="dialogs-item__new-message-count">1</span></p>
                            <div class="dialogs-item__ignore js-to-folder is-ignore" title="Игнорирую"></div>
                            <div class="dialogs-item__favourite js-to-folder" title="Избранные"></div>
                        </div>
                    </li>
                    <li class="dialogs__item dialogs-item">
                        <div class="dialogs-item__left-col">
                            <p class="dialogs-item__name"><a href="" class="dialogs-item__link link">Виктор</a></p>
                            <p class="dialogs-item__title">Немецкая овчарка, девочка, 6 мес</p>
                            <p class="dialogs-item__date">Сегодня, 14:43</p>
                        </div>
                        <div class="dialogs-item__right-col">
                            <p class="dialogs-item__message-count">23 сообщения<span class="dialogs-item__new-message-count"></span></p>
                            <div class="dialogs-item__ignore js-to-folder" title="Игнорирую"></div>
                            <div class="dialogs-item__favourite js-to-folder" title="Избранные"></div>
                        </div>
                    </li>
                    <li class="dialogs__item dialogs-item">
                        <div class="dialogs-item__left-col">
                            <p class="dialogs-item__name"><a href="" class="dialogs-item__link link">Лава Лагуна</a></p>
                            <p class="dialogs-item__title">Акита, девочка, 6 мес</p>
                            <p class="dialogs-item__date">Сегодня, 14:43</p>
                        </div>
                        <div class="dialogs-item__right-col">
                            <p class="dialogs-item__message-count">13 сообщений<span class="dialogs-item__new-message-count">1</span></p>
                            <div class="dialogs-item__ignore js-to-folder" title="Игнорирую"></div>
                            <div class="dialogs-item__favourite js-to-folder" title="Избранные"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </main>
    </div>
@endsection
