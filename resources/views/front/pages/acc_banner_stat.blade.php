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
            <div class="lk__title-wrap">
                <h2 class="lk__title">Статистика по баннеру</h2>
            </div>
            <div class="lk__content-wrap banner-stat">
                <div class="banner-stat__info">
                    <p class="banner-stat__row">Лимит показов: <span class="banner-stat__val">нет</span></p>
                    <p class="banner-stat__row">Позиция: <span class="banner-stat__val">Главная: Перед блоком последние (100% х 100)</span></p>
                    <p class="banner-stat__row">Период показа: <span class="banner-stat__val">21 сентября 2017 - 21 ноября 2017</span></p>
                </div>
                <table class="banner-stat__table">
                    <thead class="banner-stat__thead">
                    <tr class="banner-stat__tr">
                        <th class="banner-stat__th banner-stat__th--item-date">Дата</th>
                        <th class="banner-stat__th banner-stat__th--view-count">Показы</th>
                        <th class="banner-stat__th banner-stat__th--clicks-count">Клики</th>
                        <th class="banner-stat__th banner-stat__th--ctr">CTR %</th>
                    </tr>
                    </thead>
                    <tbody class="banner-stat__tbody">
                    <tr class="banner-stat__tr">
                        <td class="banner-stat__td banner-stat__td--item-date">13 ноября 2017</td>
                        <td class="banner-stat__td banner-stat__td--view-count">155</td>
                        <td class="banner-stat__td banner-stat__td--clicks-count">15</td>
                        <td class="banner-stat__td banner-stat__td--ctr">0,15</td>
                    </tr>
                    <tr class="banner-stat__tr">
                        <td class="banner-stat__td banner-stat__td--item-date">13 ноября 2017</td>
                        <td class="banner-stat__td banner-stat__td--view-count">252</td>
                        <td class="banner-stat__td banner-stat__td--clicks-count">25</td>
                        <td class="banner-stat__td banner-stat__td--ctr">0,25</td>
                    </tr>
                    <tr class="banner-stat__tr">
                        <td class="banner-stat__td banner-stat__td--item-date">13 ноября 2017</td>
                        <td class="banner-stat__td banner-stat__td--view-count">16</td>
                        <td class="banner-stat__td banner-stat__td--clicks-count">2</td>
                        <td class="banner-stat__td banner-stat__td--ctr">3,2</td>
                    </tr>
                    <tr class="banner-stat__tr">
                        <td class="banner-stat__td banner-stat__td--item-date">13 ноября 2017</td>
                        <td class="banner-stat__td banner-stat__td--view-count">57</td>
                        <td class="banner-stat__td banner-stat__td--clicks-count">5</td>
                        <td class="banner-stat__td banner-stat__td--ctr">0,5</td>
                    </tr>
                    <tr class="banner-stat__tr">
                        <td class="banner-stat__td banner-stat__td--item-date">13 ноября 2017</td>
                        <td class="banner-stat__td banner-stat__td--view-count">10 00</td>
                        <td class="banner-stat__td banner-stat__td--clicks-count">132</td>
                        <td class="banner-stat__td banner-stat__td--ctr">1</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
