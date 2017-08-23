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
                    <span class="obyavlenie__favourite is-favourite"></span>
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