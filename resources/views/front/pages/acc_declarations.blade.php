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
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link is-active">Ваши объявления</a></li>
                <li class="lk-header__nav-item"><a href="" class="lk-header__nav-link">Баннеры</a></li>
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
                <h2 class="lk__title">Ваши объявления</h2>
                <p class="lk__info-link-wrap"><a href="" class="lk__info-link link">Как продвигать объявления</a></p>
            </div>
            <div class="lk__content-wrap my-declarations">
                <div class="my-declarations__filter-wrap">
                    <div class="my-declarations__filter">
                        <div class="my-declarations__category-wrap">
                            <select name="" id="test2" class="criterion__select select">
                                <option value="jquery">Собаки</option>
                                <option value="jqueryui">Кошки</option>
                                <option value="somefile">Земноводные</option>
                            </select>
                        </div>
                        <div class="my-declarations__radio-buttons radio-buttons">
                            <label class="radio-buttons__item">
                                <input name="radio2" class="radio-buttons__input" type="radio" value="1">
                                <span class="radio-buttons__button radio-buttons__button--filter">Активные</span>
                            </label>
                            <label class="radio-buttons__item">
                                <input name="radio2" class="radio-buttons__input" type="radio" value="2">
                                <span class="radio-buttons__button radio-buttons__button--filter">На проверке</span>
                            </label>
                            <label class="radio-buttons__item">
                                <input name="radio2" class="radio-buttons__input" type="radio" value="3">
                                <span class="radio-buttons__button radio-buttons__button--filter">Не активные</span>
                            </label>
                        </div>
                    </div>
                    <div class="my-declarations__search">
                        <input type="text" class="my-declarations__search-input input" placeholder="Поиск по объявлениям">
                        <button class="my-declarations__search-btn button button--small">Найти</button>
                    </div>
                </div>
            </div>
            <div class="my-declarations__info-wrap my-declarations__info-wrap--renewal">
                <p class="my-declarations__select-count-wrap"><span class="my-declarations__select-count dotted-link">Выбрано 1 объявление</span></p>
                <p class="my-declarations__info-text">Продление объявлений на месяц:</p>
                <button class="my-declarations__button button button--small">до 5 об. — 25 ед.</button>
                <button class="my-declarations__button button button--small button--disable">до 10 об. — 35 ед.</button>
                <button class="my-declarations__button button button--small button--disable">до 15 об. — 45 ед.</button>
            </div>
            <div class="my-declarations__info-wrap my-declarations__info-wrap--renewal">
                <p class="my-declarations__select-count-wrap"><span class="my-declarations__select-count dotted-link">Выбрано 4 объявления</span></p>
                <p class="my-declarations__info-text">Продлить объявления на месяц за <span class="my-declarations__units-count">30 ед.</span></p>
                <button class="my-declarations__button button button--small button--disable">Оплатить</button>
                <p class="my-declarations__info-text">Недостаточно единиц, пополните <a href="" class="my-declarations__balance-link link">баланс</a></p>
            </div>
            <div class="my-declarations__info-wrap">
                <p class="my-declarations__info-advancement">Продвижение объявлений</p>
                <p class="my-declarations__info-text">Продлить объявления на месяц за <span class="my-declarations__units-count">30 ед.</span></p>
                <button class="my-declarations__button my-declarations__button--no-active button  button--small">Оплатить</button>
                <p class="my-declarations__info-text">Недостаточно единиц, пополните <a href="" class="my-declarations__balance-link link">баланс</a></p>
            </div>
            <ul class="my-declarations__list">
                <li class="my-declarations__list-item my-dec-item">
                    <div class="my-dec-item__check-col">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" value="1">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                            </span>
                        </label>
                    </div>
                    <div class="my-dec-item__info-col">
                        <div class="my-dec-item__row-top">
                            <div class="my-dec-item__left-col">
                                <div class="my-dec-item__img-wrap">
                                    <img src="/img/decl_list-pl.png" alt="" class="my-dec-item__img">
                                </div>
                                <div class="my-dec-item__data-wrap">
                                    <p class="my-dec-item__title-wrap"><a href="" class="my-dec-item__title link">Немецкая овчарка, девочка, 6 мес</a></p>
                                    <p class="my-dec-item__text-row"><span class="my-dec-item__category">Собаки / Овчарки</span><span class="my-dec-item__active-dates">с 25.06.17 до 02.07.17</span></p>
                                    <p class="my-dec-item__text-row"><span class="my-dec-item__stat">Просмотры: <span class="my-dec-item__stat-digit">200</span></span><span class="my-dec-item__stat">Контакты: <span class="my-dec-item__stat-digit">15</span></span><span class="my-dec-item__stat">Комментарии: <span class="my-dec-item__stat-digit">15</span></span></p>
                                    <p class="my-dec-item__active-services">В ТОП • Цвет • Срочно, торг • Турбо-продажа • В горячие</p>
                                </div>
                            </div>
                            <div class="my-dec-item__price-col">
                                <p class="my-dec-item__price">45 000 тг</p>
                            </div>
                        </div>
                        <div class="my-dec-item__row-actions">
                            <a href="" class="my-dec-item__action">Посмотреть</a>
                            <a href="" class="my-dec-item__action">Редактировать</a>
                            <a href="" class="my-dec-item__action">Деактивировать</a>
                            <a href="" class="my-dec-item__action">Автоподнятие</a>
                            <a href="" class="my-dec-item__action">Поделиться</a>
                        </div>
                    </div>
                    <div class="my-dec-item__services-col">
                        <ul class="my-dec-item__services-list">
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Поднять наверх <span class="my-dec-item__services-price">15 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Выделить цветом <span class="my-dec-item__services-price">25 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Закрепить в ТОП <span class="my-dec-item__services-price">35 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">В горячие <span class="my-dec-item__services-price">45 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Срочно, торг <span class="my-dec-item__services-price">55 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Турбо-продажа <span class="my-dec-item__services-price">65 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="my-declarations__list-item my-dec-item">
                    <div class="my-dec-item__check-col">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" value="1">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                            </span>
                        </label>
                    </div>
                    <div class="my-dec-item__info-col">
                        <div class="my-dec-item__row-top">
                            <div class="my-dec-item__left-col">
                                <div class="my-dec-item__img-wrap">
                                    <img src="/img/decl_list-pl.png" alt="" class="my-dec-item__img">
                                </div>
                                <div class="my-dec-item__data-wrap">
                                    <p class="my-dec-item__title-wrap"><a href="" class="my-dec-item__title link">Немецкая овчарка, девочка, 6 мес</a></p>
                                    <p class="my-dec-item__text-row"><span class="my-dec-item__category">Собаки / Овчарки</span><span class="my-dec-item__active-dates">с 25.06.17 до 02.07.17</span></p>
                                    <p class="my-dec-item__text-row"><span class="my-dec-item__stat">Просмотры: <span class="my-dec-item__stat-digit">200</span></span><span class="my-dec-item__stat">Контакты: <span class="my-dec-item__stat-digit">15</span></span><span class="my-dec-item__stat">Комментарии: <span class="my-dec-item__stat-digit">15</span></span></p>
                                    <p class="my-dec-item__active-services">В ТОП • Цвет • Срочно, торг • Турбо-продажа • В горячие</p>
                                </div>
                            </div>
                            <div class="my-dec-item__price-col">
                                <p class="my-dec-item__price">45 000 тг</p>
                            </div>
                        </div>
                        <div class="my-dec-item__row-actions">
                            <a href="" class="my-dec-item__action">Посмотреть</a>
                            <a href="" class="my-dec-item__action">Редактировать</a>
                            <a href="" class="my-dec-item__action">Деактивировать</a>
                            <a href="" class="my-dec-item__action">Автоподнятие</a>
                            <a href="" class="my-dec-item__action">Поделиться</a>
                        </div>
                    </div>
                    <div class="my-dec-item__services-col">
                        <ul class="my-dec-item__services-list">
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Поднять наверх <span class="my-dec-item__services-price">15 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Выделить цветом <span class="my-dec-item__services-price">25 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Закрепить в ТОП <span class="my-dec-item__services-price">35 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">В горячие <span class="my-dec-item__services-price">45 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Срочно, торг <span class="my-dec-item__services-price">55 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                            <li class="my-dec-item__services-item">
                                <label class="form__checkbox checkbox">
                                    <input class="checkbox__input" name="advert1" type="checkbox" value="1">
                                    <span class="checkbox__wrap">
                                        <span class="checkbox__button"></span>
                                        <span class="checkbox__text checkbox__text--service">Турбо-продажа <span class="my-dec-item__services-price">65 ед.</span></span>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </main>
    </div>


    <div class="hide"></div>
@endsection
