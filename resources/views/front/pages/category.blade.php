@extends('front.layout')
@section('content')
    <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Главная</a></span>
            <span class="breadcrumbs__delimiter">/</span>
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Собаки</a></span>
        </div>
    </section>
    <section class="filter">
        <div class="filter__wrapper">
            <h1 class="filter__title">Собаки в Казахстане</h1>
            <div class="filter__row filter__row--main">
                <div class="filter__criterion-row criterion criterion--main">
                    <p class="criterion__name">Город</p>
                    <div class="criterion__list-wrapper">
                        <ul class="criterion__list">
                            <li class="criterion__item radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="region" class="radio-switchers__input js-city-checkbox" type="radio" value="">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Алматы</span>
                                </label>
                            </li>
                            <li class="criterion__item radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="region" class="radio-switchers__input js-city-checkbox" type="radio" value="">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Астана</span>
                                </label>
                            </li>
                            <li class="criterion__item radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="region" class="radio-switchers__input js-city-checkbox" type="radio" value="">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Шымкент</span>
                                </label>
                            </li>
                            <li class="criterion__item radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="region" class="radio-switchers__input js-city-checkbox" type="radio" value="">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Караганда</span>
                                </label>
                            </li>
                            <li class="criterion__item radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="region" class="radio-switchers__input js-city-checkbox" type="radio" value="">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Актобе</span>
                                </label>
                            </li>
                            <li class="criterion__item radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="region" class="radio-switchers__input js-city-checkbox" type="radio" value="">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Актау</span>
                                </label>
                            </li>
                        </ul>
                        <div class="criterion__other-variants">
                            <a href="" class="criterion__other-variants-btn dotted-link">Другой город</a>
                        </div>
                    </div>
                </div>
                <div class="filter__criterion-row criterion">
                    <p class="criterion__name">Порода</p>
                    <div class="criterion__list-wrapper">
                        <ul class="criterion__list">
                            <li class="criterion__item">
                                <div class="criterion__btn is-active">Акита</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бульдог</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бассет</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бельгийская овчарка</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Боксер</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Болонка</div>
                            </li>
                            <li class="criterion__item criterion__item--for-wrap"></li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бельгийская овчарка</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бульдог</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бассет</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Бельгийская овчарка</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Боксер</div>
                            </li>
                            <li class="criterion__item">
                                <div class="criterion__btn">Болонка</div>
                            </li>
                        </ul>
                        <div class="criterion__other-variants">
                            <a href="" class="criterion__other-variants-btn dotted-link">Другая порода</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter__row">
                <div class="filter__criterion-row-wrapper filter__criterion-row-wrapper--2col">
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Размер</p>
                        <div class="criterion__list-wrapper criterion__list-wrapper--half">
                            <div class="criterion__radio-switchers radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="radio" class="radio-switchers__input" type="radio" value="1">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Малый</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="radio" class="radio-switchers__input" type="radio" value="2">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Средний</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="radio" class="radio-switchers__input" type="radio" value="3">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Крупный</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Пол</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <div class="criterion__radio-switchers radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="pol" class="radio-switchers__input" type="radio" value="1">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Мальчик</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="pol" class="radio-switchers__input" type="radio" value="2">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Девочка</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Возраст</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <input type="text" class="criterion__number-input input" placeholder="От">
                            <input type="text" class="criterion__number-input input" placeholder="До">
                            <span class="criterion__label">месяцев</span>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Цена, тг</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <input type="text" class="criterion__number-input input" placeholder="От">
                            <input type="text" class="criterion__number-input input" placeholder="До">
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter__row js_extra_options filter__row--expand">
                <div class="filter__criterion-row-wrapper filter__criterion-row-wrapper--2col">
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Купирование</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <div class="criterion__radio-switchers radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="radio4" class="radio-switchers__input" type="radio" value="1">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Уши</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="radio4" class="radio-switchers__input" type="radio" value="2">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Хвост</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="radio4" class="radio-switchers__input" type="radio" value="3">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Уши и хвост</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Стерилизация</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <div class="criterion__radio-switchers radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="pol3" class="radio-switchers__input" type="radio" value="1">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Стерилизован</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="pol3" class="radio-switchers__input" type="radio" value="2">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Не стерилизован</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Кастрация</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <div class="criterion__radio-switchers radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="pol1" class="radio-switchers__input" type="radio" value="1">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Кастрирован</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="pol1" class="radio-switchers__input" type="radio" value="2">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Не кастрирован</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Шерсть</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <div class="criterion__radio-switchers radio-switchers">
                                <label class="radio-switchers__item">
                                    <input name="radio2" class="radio-switchers__input" type="radio" value="1">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Короткая</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="radio2" class="radio-switchers__input" type="radio" value="2">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Длинная</span>
                                </label>
                                <label class="radio-switchers__item">
                                    <input name="radio2" class="radio-switchers__input" type="radio" value="3">
                                    <span class="radio-switchers__button radio-switchers__button--filter">Без шерсти</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="filter__criterion-row filter__criterion-row--half criterion">
                        <p class="criterion__name">Окрас</p>
                        <div class="criterion__list-wrapper  criterion__list-wrapper--half">
                            <select name="" id="test2" class="criterion__select select">
                                <option value="jquery">Черный</option>
                                <option value="jqueryui">Белый</option>
                                <option value="somefile">Пятнистый</option>
                                <option value="someotherfile">Достаточно длинное название чтобы не поместиться</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter__footer">
                <div class="filter__extra-options">
                    <span class="filter__extra-options-btn js_toggle_extra dotted-link">Дополнительные параметры</span>
                </div>
                <button class="filter__search-btn button">Найти объявления</button>
            </div>

        </div>
    </section>
    <div class="content">
        <div class="declarations-top">
            <div class="declarations-top__wrapper">
                <h2 class="declarations-top__title">Собаки в Алматы</h2>
                <div class="declarations-top__subscriptions-wrap">
                    <a href="" class="declarations-top__subscriptions link">Подписаться на эти объявления</a>
                </div>
            </div>
        </div>
        <main class="declarations js_favs_decl">
            <div class="declarations__main-content main-content">
                <div class="declarations__hot-declarations hot-declarations">
                    <h4 class="hot-declarations__title aside__title">Горячие объявления</h4>
                    <p class="hot-declarations__subtitle"><a href="" class="hot-declarations__how link">Как попасть в
                            «Горячие»</a></p>
                    <div class="hot-declarations__list-wrap">
                        <ul class="hot-declarations__list">
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <a href="" class="hot-declaration__img-link"><img src="/img/hot_rec.png" alt="" class="hot-declaration__img"></a>
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Немецкая
                                        овчарка, девочка, 6 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <a href="" class="hot-declaration__img-link"><img src="/img/cz5.png" alt="" class="hot-declaration__img"></a>
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски,
                                        мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <a href="" class="hot-declaration__img-link"><img src="/img/cz4.png" alt="" class="hot-declaration__img"></a>
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски,
                                        мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="declarations__display">
                    <div class="declarations__sort-wrap">
                        <p class="declarations__label">Сортировка</p>
                        <div class="declarations__select-wrap">
                            <select name="select" id="selecto" class="declarations__sort-select select gr-h">
                                <option value="jquery">Сначала дешевые</option>
                                <option value="jqueryui">Сначала дорогие</option>
                            </select>
                        </div>
                    </div>
                    <div class="declarations__display-view">
                        <p class="declarations__label">Выводить</p>
                        <div class="declarations__switchers-wrap">
                            <div class="declarations__radio-switchers radio-switchers">
                                <label class="radio-switchers__item js_how_to_display">
                                    <input name="pol11" class="radio-switchers__input" checked type="radio"
                                           value="list">
                                    <span class="radio-switchers__button radio-switchers__button--view">Списком<i
                                                class="radio-switchers__list-icon"></i></span>
                                </label>
                                <label class="radio-switchers__item js_how_to_display">
                                    <input name="pol11" class="radio-switchers__input" type="radio" value="tile">
                                    <span class="radio-switchers__button radio-switchers__button--view">Плиткой<i
                                                class="radio-switchers__plite-icon"></i></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="declarations__list declarations-list js_declarations">
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--yellow">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка,
                                        6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <p class="declaration__urgently">Срочно, торг</p>
                                <div class="declaration__favourite is-favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Немецкая
                                        овчарка, девочка, 6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">11 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">5 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--yellow">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Новозеландская
                                        овчарка, мальчик, 12 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">1 просмотр</span><span
                                            class="declaration__comments">0 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">40 000 тг</p>
                                <p class="declaration__urgently">Срочно, торг</p>
                                <div class="declaration__favourite is-favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--blue">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Акита, девочка,
                                        2 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">101 просмотр</span><span
                                            class="declaration__comments">7 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">25 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Немецкая
                                        овчарка, девочка, 4 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">15 просмотров</span><span
                                            class="declaration__comments">1 комментарий</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">65 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка,
                                        6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <p class="declaration__urgently">Срочно, торг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration declaration--reclame">
                        <div class="declaration__wrapper declaration__wrapper--reclame">
                            <img src="/img/palceholder_rec.png" alt="" class="declaration__reclame">
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка,
                                        6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка,
                                        6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <p class="declaration__urgently">Срочно, торг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--blue">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Бульдог,
                                        мальчик, 3 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">15 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Акита, мальчик,
                                        16 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">5 просмотров</span><span
                                            class="declaration__comments">2 комментария</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">35 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--blue">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Бульдог,
                                        мальчик, 3 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">15 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/dec_pl.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка,
                                        6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-city">Усть-Каменогорск</span><span
                                            class="declaration__info-delimiter"> • </span><span
                                            class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span
                                            class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration declaration--reclame">
                        <div class="declaration__wrapper declaration__wrapper--reclame">
                            <img src="/img/palceholder_rec.png" alt="" class="declaration__reclame">
                        </div>
                    </li>
                </ul>
                <div class="declarations__add-declaration">
                    <a href="" class="declarations__add-declaration-link grey-link">Подать объявление в эту
                        категорию</a>
                </div>
                <div class="declarations__pagination pagination">
                    <p class="pagination__label">Страницы</p>
                    <div class="pagination__nav">
                        <ul class="pagination__buttons-list">
                            <li class="pagination__buttons-item"><a href=""
                                                                    class="pagination__button-link is-active">1</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">2</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">3</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">4</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">5</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">6</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">7</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">...</a></li>
                            <li class="pagination__buttons-item"><a href="" class="pagination__button-link">121</a></li>
                        </ul>
                        <div class="pagination__next-prev">
                            <div class="pagination__link-wrap"><a href="" class="pagination__link">Предыдущая</a></div>
                            <div class="pagination__link-delimiter">•</div>
                            <div class="pagination__link-wrap"><a href="" class="pagination__link">Следующая</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <aside class="declarations__aside aside">
                <div class="aside__rec-block rec-block">
                    <img src="/img/aside_rec.png" alt="" class="rec-block__img">
                </div>
                <div class="aside__hot-declarations hot-declarations">
                    <h4 class="hot-declarations__title aside__title">Горячие объявления</h4>
                    <p class="hot-declarations__subtitle"><a href="" class="hot-declarations__how link">Как попасть в
                            «Горячие»</a></p>
                    <div class="hot-declarations__list-wrap">
                        <ul class="hot-declarations__list">
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <a href="" class="hot-declaration__img-link"><img src="/img/hot_rec.png" alt="" class="hot-declaration__img"></a>
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Немецкая
                                        овчарка, девочка, 6 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <a href="" class="hot-declaration__img-link"><img src="/img/cz5.png" alt="" class="hot-declaration__img"></a>
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски,
                                        мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <a href="" class="hot-declaration__img-link"><img src="/img/cz4.png" alt="" class="hot-declaration__img"></a>
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски,
                                        мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="aside__rec-block rec-block">
                    <img src="/img/reec2.png" alt="" class="rec-block__img">
                </div>
            </aside>
        </main>
    </div>
@endsection