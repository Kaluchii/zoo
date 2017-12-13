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
                <li class="obyavlenie-control__item"><a href="" class="link obyavlenie-control__link obyavlenie-control__link--turbo">Рекламировать объявление</a></li>
            </ul>
        </div>
        <main class="obyavlenie">
            <div class="obyavlenie__main-content main-content">
                <div class="obyavlenie__title">
                    <span class="obyavlenie__urgently">Срочно, торг</span>
                    <h1 class="obyavlenie__name">Хаски, 12 месяцев, мальчик</h1>
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
                    {{--<p class="about-info__row">
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
                    </p>--}}
                </div>
                <div class="obyavlenie__description text-block">
                    <p>Для истинных ценителей!
                        Предлагаем к продаже редкого красавца хаски. Возраст 2,5 месяца. Потрясающий цвет шубки! Необыкновенно красивый цвет и разрез глаз! Привит. РКФ. Подробности только по телефону (вотс апп,вайбер) Находимся 100 км от Алматы по Кульджинскому шоссе.Доставим в Алмату и другие область.</p>
                </div>
                <div class="obyavlenie__comments comments">
                    <div class="comments__authorization">
                        <p class="comments__authorization-text">
                            Чтобы добавить комментарий, <span class="link">зарегистрируйтесь</span> или <span
                                    class="link">войдите</span>
                        </p>
                    </div>
                    <h2 class="comments__title">Комментарии <span class="comments__comment-count">3</span></h2>
                    <div class="comments__add-comment add-message">
                        <p class="add-message__title">Добавить комментарий</p>
                        <textarea name="" class="add-message__textarea textarea"></textarea>
                        <div class="add-message__bottom-wrap">
                            <p class="add-message__info-text">Комментарии модерируются и могут быть удалены,
                                если нарушают <a href="" class="link">правила общения на сайте</a>. Будьте вежливы.</p>
                            <div class="add-message__button-wrap">
                                <a href="" class="button">Добавить</a>
                            </div>
                        </div>
                    </div>
                    <ul class="comments__list">
                        <li class="comments__item comment">
                            <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                            <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                            <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                            <div class="comments__item comment comment--author comment--answer">
                                <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                                <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                                <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                            </div>
                            <div class="comments__item comment comment--author comment--answer">
                                <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                                <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                                <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                            </div>
                            <div class="comments__item comment comment--answer">
                                <div class="comment__top-wrap"><span class="comment__name">Евгений</span><span class="comment__date">27.06.17, 16:00</span></div>
                                <p class="comment__text">То есть формат свободного заголовка мы убираем, он формируется из показателей? Уточню с технологами возможность.</p>
                                <div class="comment__action-wrap"><span class="comment__answer"><span class="comment__action light-grey-link">Ответить</span></span><span class="comment__complain"><span class="comment__action light-grey-link">Пожаловаться</span></span></div>
                            </div>
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
                        <p class="contacts-block__action"><a href="#js_author_send_popup" class="js_author_send contacts-block__action-link light-grey-link">Написать автору</a></p>
                        <p class="contacts-block__action"><a href="" class="contacts-block__action-link light-grey-link">Все объявления автора</a></p>
                        <p class="contacts-block__action"><a href="#js_share_popup" class="js_share contacts-block__action-link light-grey-link">Поделиться по почте</a></p>
                        <p class="contacts-block__action"><a href="#js_claim_popup" class="js_claim contacts-block__action-link light-grey-link">Пожаловаться</a></p>
                    </div>
                </div>
                <div class="aside__rec-block rec-block">
                    <img src="/img/aside_rec.png" alt="" class="rec-block__img">
                </div>
                <div class="aside__like-declarations like-declarations">
                    <h4 class="like-declarations__title aside__title">Похожие объявления</h4>
                    <div class="like-declarations__list-wrap">
                        <ul class="like-declarations__list">
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <a href="" class="like-declaration__img-link"><img src="/img/like1.png" alt="" class="like-declaration__img"></a>
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Хаски, мальчик, 3 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">65 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <a href="" class="like-declaration__img-link"><img src="/img/like1.png" alt="" class="like-declaration__img"></a>
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Хаски, девочка, 6 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">40 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <a href="" class="like-declaration__img-link"><img src="/img/like1.png" alt="" class="like-declaration__img"></a>
                                </div>
                                <div class="like-declaration__inf-wrap">
                                    <p class="like-declaration__title"><a href="" class="like-declaration__link link">Хаски, девочка, 2 мес</a></p>
                                    <p class="like-declaration__price-city-wrap"><span class="like-declaration__price">55 000 тг</span><span class="like-declaration__city">Алматы</span></p>
                                </div>
                            </li>
                            <li class="like-declarations__list-item like-declaration">
                                <div class="like-declaration__img-wrap">
                                    <a href="" class="like-declaration__img-link"><img src="/img/like1.png" alt="" class="like-declaration__img"></a>
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

    <div id="js_author_send_popup" class="popup popup--send-popup mfp-hide zoom-anim-dialog">
        <p class="popup__title">Свяжитесь с автором объявления</p>
        <form action="">
            <div class="popup__form-rows form-rows form-rows--popup">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <input type="text" name="email" class="input" placeholder="Ваш email-адрес">
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <textarea class="textarea" name="comment" autocapitalize="off" placeholder="Текст вашего сообщения"></textarea>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <button type="submit" class="button j-submit">Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="js_share_popup" class="popup mfp-hide zoom-anim-dialog">
        <form action="">
            <div class="popup__form-rows form-rows">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap input-row__wrap--vertical">
                        <label for="email" class="input-row__label-above">E-mail получателя</label>
                        <input type="text" name="email" id="email" class="input" placeholder="">
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <button type="submit" class="button j-submit">Поделиться</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div id="js_claim_popup" class="popup mfp-hide zoom-anim-dialog">
        <p class="popup__title">Укажите причины, по которым вы считаете это объявление некорректным:</p>
        <form action="">
            <div class="popup__form-rows form-rows">
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="reason[]" value="1">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                                <span class="checkbox__text"> Неверная рубрика </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="reason[]" value="2">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                                <span class="checkbox__text"> Запрещенный товар/услуга </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="reason[]" value="4">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                                <span class="checkbox__text"> Объявление не актуально </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="reason[]" value="8">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                                <span class="checkbox__text"> Неверный адрес </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <label class="form__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="reason[]" value="1024">
                            <span class="checkbox__wrap">
                                <span class="checkbox__button"></span>
                                <span class="checkbox__text"> Другое </span>
                            </span>
                        </label>
                    </div>
                </div>
                <div class="form-rows__input-row input-row input-row--popup-comment">
                    <div class="input-row__wrap input-row__wrap--vertical">
                        <label for="claim_comment" class="input-row__label-above">Оставьте ваш комментарий</label>
                        <textarea class="textarea textarea--popup" name="comment" id="claim_comment" autocapitalize="off"></textarea>
                    </div>
                </div>
                <div class="form-rows__input-row input-row">
                    <div class="input-row__wrap">
                        <button type="submit" class="button j-submit">Отправить жалобу</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection