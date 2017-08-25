@extends('front.layout')
@section('content')
    <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Главная</a></span>
            <span class="breadcrumbs__delimiter">/</span>
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Собаки</a></span>
            <span class="breadcrumbs__delimiter">/</span>
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Хаски</a></span>
        </div>
    </section>
    <div class="content">
        <div class="obyavlenie-control">
            <ul class="obyavlenie-control__list">
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--up">Поднять наверх</a></li>
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--color">Выделить цветом</a></li>
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--top">Закрепить в ТОП</a></li>
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--hot">В горячие</a></li>
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--urgently">Срочно, торг</a></li>
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--turbo">Турбо продажа</a></li>
            </ul>
        </div>
        <main class="obyavlenie">
            <div class="obyavlenie__main-content main-content">
                <div class="obyavlenie__title">
                    <span class="obyavlenie__urgently">Срочно, торг</span>
                    <span class="obyavlenie__name">Хаски, 12 месяцев, мальчик</span>
                    <span class="obyavlenie__favourite"></span>
                </div>
                <p class="obyavlenie__service-information">
                    <span class="obyavlenie__inf-city">Алматы</span>
                    <span class="obyavlenie__inf-delimiter">•</span>
                    <span class="obyavlenie__inf-date">Добавлено: 31.06.17, 15:25</span>
                    <span class="obyavlenie__inf-delimiter">•</span>
                    <span class="obyavlenie__inf-num">Номер: 123</span>
                    <span class="obyavlenie__inf-delimiter">•</span>
                    <span class="obyavlenie__inf-views">402 просмотра</span>
                    <span class="obyavlenie__inf-delimiter">•</span>
                    <span class="obyavlenie__inf-views-today">1 из них сегодня</span>
                </p>
                <div class="obyavlenie__slider-wrap">
                    {{--<img src="/img/decpl.png" alt="" style="display: block;" class="img-img">--}}
                    <div class="fotorama js_gallery_fotorama" data-auto="false"
                         data-nav="thumbs"
                         data-thumbmargin="2" data-loop="true"
                         data-thumbwidth="64" data-thumbheight="64" data-transition="crossfade">
                        <img src="/img/decpl.png" alt="" class="img-img">
                        <img src="/img/decpl.png" alt="" class="img-img">
                        <img src="/img/decpl.png" alt="" class="img-img">
                        <img src="/img/decpl.png" alt="" class="img-img">
                        <img src="/img/decpl.png" alt="" class="img-img">
                    </div>
                </div>
                <div class="obyavlenie__about-info about-info">
                    <ul class="about-info__list">
                        <li class="about-info__item">
                            <p class="about-info__item-name">Размер</p>
                            <p class="about-info__value">Средний</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Окрас</p>
                            <p class="about-info__value">Смешанный</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Купирование</p>
                            <p class="about-info__value">Уши, хвост</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Тип шерсти</p>
                            <p class="about-info__value">Короткая</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Стерилизация</p>
                            <p class="about-info__value">Стерилизован</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Свойство подлиннее</p>
                            <p class="about-info__value">Значение свойства</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Короткое</p>
                            <p class="about-info__value">Длинное значение</p>
                        </li>
                        <li class="about-info__item">
                            <p class="about-info__item-name">Еще свойство</p>
                            <p class="about-info__value">Его значение</p>
                        </li>
                    </ul>
                    <p class="about-info__row">
                        <span class="about-info__data-item">Не привит</span>
                        <span class="about-info__delimiter"> • </span>
                        <span class="about-info__data-item">Стерилизован</span>
                        <span class="about-info__delimiter"> • </span>
                        <span class="about-info__data-item">Не привит</span>
                        <span class="about-info__delimiter"> • </span>
                        <span class="about-info__data-item">Стерилизован</span>
                        <span class="about-info__delimiter"> • </span>
                        <span class="about-info__data-item">Не привит</span>
                        <span class="about-info__delimiter"> • </span>
                        <span class="about-info__data-item">Стерилизован</span>
                    </p>
                </div>
                <p class="obyavlenie__description">Для истинных ценителей!
Предлагаем к продаже редкого красавца хаски. Возраст 2,5 месяца. Потрясающий цвет шубки! Необыкновенно красивый цвет и разрез глаз! Привит. РКФ. Подробности только по телефону (вотс апп,вайбер) Находимся 100 км от Алматы по Кульджинскому шоссе.Доставим в Алмату и другие область.</p>
                <div class="obyavlenie__comments comments">
                    <div class="comments__authorization">
                        <p class="comments__authorization-text">
                            Чтобы добавить комментарий, <span class="link">зарегистрируйтесь</span> или <span
                                    class="link">войдите</span>
                        </p>
                    </div>
                    <h2 class="comments__title">Комментарии <span class="comments__comment-count">3</span></h2>
                    <div class="comments__add-comment add-comment">
                        <p class="add-comment__title">Добавить комментарий</p>
                        <textarea name="" class="add-comment__textarea textarea"></textarea>
                        <div class="add-comment__bottom-wrap">
                            <p class="add-comment__info-text">Комментарии модерируются и могут быть удалены,
                                если нарушают <span class="link">правила общения на сайте</span>. Будьте вежливы.</p>
                            <div class="add-comment__button-wrap">
                                <a href="" class="button">Добавить</a>
                            </div>
                        </div>
                    </div>
                    <ul class="comments__list">
                        <li class="comments__item comment">
                            <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                            <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                            <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                        </li>
                        <li class="comments__item comment comment--author">
                            <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                            <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                            <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                        </li>
                        <li class="comments__item comment">
                            <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                            <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                            <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                        </li>
                        <li class="comments__item comment">
                            <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                            <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                            <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                        </li>
                    </ul>
                </div>
            </div>
            <aside class="obyavlenie__aside aside">
                <div class="aside__obyavlenie-price obyavlenie-price">
                    <p class="obyavlenie-price__sum">25 000 тг</p>
                </div>
                <div class="aside__contacts-block contacts-block">
                    <div class="contacts-block__phones">
                        <div class="contacts-block__display-phones"><span class="contacts-block__display-phone-btn dotted-link">Показать телефоны</span></div>
                        <div class="contacts-block__phones-list">
                            <p class="contacts-block__phone-item">+7 7XX XXX-XX-XX</p>
                            <p class="contacts-block__phone-item">+7 7XX XXX-XX-XX</p>
                        </div>
                    </div>
                    <p class="contacts-block__warning-info">Никогда не отправляйте предоплату при покупке. Так действуют мошенники. <span class="link">Подробнее...</span></p>
                    <div class="contacts-block__action-list">
                        <p class="contacts-block__action"><a href="" class="contacts-block__action-link light-grey-link">Написать автору</a></p>
                        <p class="contacts-block__action"><a href="" class="contacts-block__action-link light-grey-link">Все объявления автора</a></p>
                        <p class="contacts-block__action"><a href="" class="contacts-block__action-link light-grey-link">Поделиться с другом</a></p>
                        <p class="contacts-block__action"><a href="" class="contacts-block__action-link light-grey-link">Пожаловаться</a></p>
                    </div>
                </div>
                <div class="aside__rec-block rec-block">
                    <img src="/img/aside_rec.png" alt="" class="rec-block__img">
                </div>
                <div class="aside__like-declarations like-declarations">
                    <h4 class="like-declarations__title">Похожие объявления</h4>
                    <div class="like-declarations__list-wrap">
                        <ul class="like-declarations__list">
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <img src="/img/like1.png" alt="" class="like-declaration__img">
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Хаски, мальчик, 3 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">65 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <img src="/img/like1.png" alt="" class="like-declaration__img">
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Хаски, девочка, 6 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">40 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <img src="/img/like1.png" alt="" class="like-declaration__img">
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Хаски, девочка, 2 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">55 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <img src="/img/like1.png" alt="" class="like-declaration__img">
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Немецкая овчарка, девочка, 16 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">25 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
        </main>
    </div>
@endsection