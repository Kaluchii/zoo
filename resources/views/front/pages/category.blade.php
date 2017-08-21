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
            <div class="filter__row">
                <div class="filter__criterion-row criterion">
                    <p class="criterion__name">Город</p>
                    <div class="criterion__list-wrapper">
                        <ul class="criterion__list">
                            <li class="criterion__item"><div class="criterion__btn is-active">Алматы</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Астана</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Шымкент</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Караганда</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Актобе</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Актау</div></li>
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
                            <li class="criterion__item"><div class="criterion__btn is-active">Акита</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Бульдог</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Бассет</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Бельгийская овчарка</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Боксер</div></li>
                            <li class="criterion__item"><div class="criterion__btn">Болонка</div></li>
                        </ul>
                        <div class="criterion__other-variants">
                            <a href="" class="criterion__other-variants-btn dotted-link">Другая порода</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="filter__dashed-line dashed-line">

            <div class="filter__row filter__row--2col">
                <div class="filter__criterion-row filter__criterion-row--half criterion">
                    <p class="criterion__name">Размер</p>
                    <div class="criterion__list-wrapper">
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
                    <div class="criterion__list-wrapper">
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
                    <div class="criterion__list-wrapper">
                        <input type="text" class="criterion__number-input input" placeholder="От">
                        <input type="text" class="criterion__number-input input" placeholder="До">
                        <span class="criterion__label">месяцев</span>
                    </div>
                </div>
                <div class="filter__criterion-row filter__criterion-row--half criterion">
                    <p class="criterion__name">Цена, тг</p>
                    <div class="criterion__list-wrapper">
                        <input type="text" class="criterion__number-input input" placeholder="От">
                        <input type="text" class="criterion__number-input input" placeholder="До">
                    </div>
                </div>
            </div>

            <hr class="filter__dashed-line dashed-line">

            <div class="filter__footer">
                <div class="filter__extra-options">
                    <span class="filter__extra-options-btn dotted-link">Дополнительные параметры</span>
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
            <hr class="declarations-top__dashed-line dashed-line">
        </div>
        <main class="declarations">
            <div class="declarations__main-content main-content">
                <div class="declarations__display">
                    <div class="declarations__sort-wrap"></div>
                    <div class="declarations__display-view"></div>
                </div>
                <ul class="declarations__list declarations-list">
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--yellow">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/declaration_img.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><span class="declaration__urgently">Срочно, торг</span><a href="" class="declaration__name link">Пудель, девочка, 6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-city">Усть-Каменогорск</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <div class="declaration__favourite is-favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--reclame">
                            <img src="/img/palceholder_rec.png" alt="" class="declaration__reclame">
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/declaration_img.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка, 6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-city">Усть-Каменогорск</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--yellow">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/declaration_img.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><span class="declaration__urgently">Срочно, торг</span><a href="" class="declaration__name link">Пудель, девочка, 6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-city">Усть-Каменогорск</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <div class="declaration__favourite is-favourite"></div>
                            </div>
                        </div>
                    </li>
                    <li class="declarations-list__item declaration">
                        <div class="declaration__wrapper declaration__wrapper--blue">
                            <div class="declaration__img-wrap">
                                <a href="" class="declaration__link">
                                    <img src="/img/declaration_img.png" alt="" class="declaration__img">
                                </a>
                            </div>
                            <div class="declaration__info-wrap">
                                <p class="declaration__title"><a href="" class="declaration__name link">Пудель, девочка, 6 мес</a></p>
                                <p class="declaration__data-info"><span class="declaration__info-category">Собаки</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-city">Усть-Каменогорск</span><span class="declaration__info-delimiter"> • </span><span class="declaration__info-date">19 мая, 16:00</span></p>
                                <p class="declaration__stat"><span class="declaration__views">25 просмотров</span><span class="declaration__comments">15 комментариев</span></p>
                            </div>
                            <div class="declaration__price-wrap">
                                <p class="declaration__price">135 000 тг</p>
                                <div class="declaration__favourite"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <aside class="declarations__aside aside">
                <div class="aside__rec-block rec-block">
                    <img src="/img/aside_rec.png" alt="" class="rec-block__img">
                </div>
                <div class="aside__hot-declarations hot-declarations">
                    <h4 class="hot-declarations__title">Горячие объявления</h4>
                    <p class="hot-declarations__subtitle"><a href="" class="hot-declarations__how link">Как попасть в «Горячие»</a></p>
                    <div class="hot-declarations__list-wrap">
                        <ul class="hot-declarations__list">
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <img src="/img/hot_rec.png" alt="" class="hot-declaration__img">
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Немецкая овчарка, девочка, 6 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <img src="/img/hot_rec.png" alt="" class="hot-declaration__img">
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски, мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <img src="/img/hot_rec.png" alt="" class="hot-declaration__img">
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски, мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                            <li class="hot-declarations__list-item hot-declaration">
                                <div class="hot-declaration__img-wrap">
                                    <img src="/img/hot_rec.png" alt="" class="hot-declaration__img">
                                </div>
                                <p class="hot-declaration__title"><a href="" class="hot-declaration__link link">Хаски, мальчик, 12 мес</a></p>
                                <p class="hot-declaration__price">35 000 тг</p>
                                <p class="hot-declaration__city">Алматы</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="aside__rec-block rec-block">
                    <img src="/img/aside_rec.png" alt="" class="rec-block__img">
                </div>
            </aside>
        </main>
    </div>
@endsection