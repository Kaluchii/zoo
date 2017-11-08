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
            <div class="lk__title-wrap">
                <h2 class="lk__title">Ваши баннеры</h2>
            </div>
            <div class="lk__content-wrap banners">
                <div class="banners__top">
                    <p class="banners__rules"><a href="" class="banners__rules-link link">Правила размещения баннерной рекламы</a></p>
                    <div class="banners__btn-wrap"><a href="" class="banners__add-btn button button--small">Добавить баннер</a></div>
                </div>
                <table class="banners__table">
                    <thead class="banners__thead">
                        <tr class="banners__tr">
                            <th class="banners__th banners__item-num">Номер</th>
                            <th class="banners__th banners__item-name">Баннер</th>
                            <th class="banners__th banners__view-start">Начало показа</th>
                            <th class="banners__th banners__view-end">Конец показа</th>
                            <th class="banners__th banners__view-count banners__right-align">Показы</th>
                            <th class="banners__th banners__clicks-count banners__right-align">Клики</th>
                            <th class="banners__th banners__ctr banners__right-align">CTR %</th>
                            <th class="banners__th banners__stat banners__right-align">Статистика</th>
                        </tr>
                    </thead>
                    <tbody class="banners__tbody">
                        <tr class="banners__tr">
                            <td class="banners__td">231</td>
                            <td class="banners__td"><a href="" class="banners__link link">Объявления • Поиск • Справа</a></td>
                            <td class="banners__td">21.06.2017</td>
                            <td class="banners__td">28.06.2017</td>
                            <td class="banners__td banners__right-align">155</td>
                            <td class="banners__td banners__right-align">15</td>
                            <td class="banners__td banners__right-align">0,15</td>
                            <td class="banners__td banners__right-align"><a href="" class="banners__link link">Посмотреть</a></td>
                        </tr>
                        <tr class="banners__tr">
                            <td class="banners__td">245</td>
                            <td class="banners__td"><a href="" class="banners__link link">Объявления • Поиск • В списке</a></td>
                            <td class="banners__td">21.06.2017</td>
                            <td class="banners__td">28.06.2017</td>
                            <td class="banners__td banners__right-align">252</td>
                            <td class="banners__td banners__right-align">25</td>
                            <td class="banners__td banners__right-align">0,25</td>
                            <td class="banners__td banners__right-align"><a href="" class="banners__link link">Посмотреть</a></td>
                        </tr>
                        <tr class="banners__tr">
                            <td class="banners__td">251</td>
                            <td class="banners__td"><a href="" class="banners__link link">Объявления • Поиск • Справа</a></td>
                            <td class="banners__td">22.06.2017</td>
                            <td class="banners__td">29.06.2017</td>
                            <td class="banners__td banners__right-align">16</td>
                            <td class="banners__td banners__right-align">2</td>
                            <td class="banners__td banners__right-align">3,2</td>
                            <td class="banners__td banners__right-align"><a href="" class="banners__link link">Посмотреть</a></td>
                        </tr>
                        <tr class="banners__tr">
                            <td class="banners__td">356</td>
                            <td class="banners__td"><a href="" class="banners__link link">Растяжка сверху</a></td>
                            <td class="banners__td">22.06.2017</td>
                            <td class="banners__td">29.06.2017</td>
                            <td class="banners__td banners__right-align">57</td>
                            <td class="banners__td banners__right-align">5</td>
                            <td class="banners__td banners__right-align">0,5</td>
                            <td class="banners__td banners__right-align"><a href="" class="banners__link link">Посмотреть</a></td>
                        </tr>
                        <tr class="banners__tr">
                            <td class="banners__td">365</td>
                            <td class="banners__td"><a href="" class="banners__link link">Объявления • Поиск • Справа</a></td>
                            <td class="banners__td">23.06.2017</td>
                            <td class="banners__td">30.06.2017</td>
                            <td class="banners__td banners__right-align">10 00</td>
                            <td class="banners__td banners__right-align">132</td>
                            <td class="banners__td banners__right-align">1</td>
                            <td class="banners__td banners__right-align"><a href="" class="banners__link link">Посмотреть</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection
