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
                <h2 class="lk__title">История операций</h2>
            </div>
            <div class="lk__content-wrap balance">
                <div class="balance__row balance__row--top">
                    <div class="balance__title-wrap balance__title-wrap--desc">
                        <p class="balance__title">Описание</p>
                    </div>
                    <div class="balance__title-wrap balance__title-wrap--num">
                        <p class="balance__title">№ операции</p>
                    </div>
                    <div class="balance__title-wrap balance__title-wrap--sum">
                        <p class="balance__title">Сумма</p>
                    </div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
                <div class="balance__row">
                    <div class="balance__col balance__col--desc">
                        <p class="balance__date">24 октября</p>
                        <p class="balance__operation-name">Списание со счета</p>
                        <p class="balance__declaration"><a href="#" class="balance__dec-link link">Продам бензиновый генератор</a></p>
                    </div>
                    <div class="balance__col balance__col--num">1606</div>
                    <div class="balance__col balance__col--sum">200 ед.</div>
                </div>
            </div>
        </main>
    </div>
@endsection
