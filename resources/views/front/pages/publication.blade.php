@extends('front.layout')
@section('content')
    <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Главная</a></span>
            <span class="breadcrumbs__delimiter">/</span>
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Почитать</a></span>
            <span class="breadcrumbs__delimiter">/</span>
            <span class="breadcrumbs__level"><a href="#" class="breadcrumbs__link light-grey-link">Кошки</a></span>
        </div>
    </section>
    <div class="content">
        <main class="publication">
            <div class="publication__main-content main-content">
                <h1 class="publication__title">Взрослые песчанные коты выглядят как котята всю жизнь</h1>
                <p class="publication__info-row"><span class="publication__date">12.05.15, 16:00</span><span class="publication__rubric">Рубрика: <a
                                href="" class="publication__rubric-link light-grey-link">Кошки</a></span></p>
                <div class="publication__text text-block">
                    <img src="/img/publication_pl.png" alt="" class=""><br><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur cumque cupiditate deserunt dolor eos esse est excepturi fuga harum magnam magni obcaecati omnis quia quibusdam quisquam ratione reprehenderit, tempora voluptates voluptatibus? Beatae dignissimos error officia perspiciatis quas voluptates? Ab animi at, blanditiis corporis dolores ea eaque enim fugiat hic, incidunt ipsam natus nostrum possimus quam quasi reiciendis sunt? Consequatur hic impedit itaque tempore. Architecto, asperiores cupiditate distinctio ea eaque error expedita illo ipsum iusto laborum numquam obcaecati pariatur repudiandae soluta temporibus? Doloremque laboriosam nobis obcaecati sit tempore? Adipisci earum modi nulla numquam obcaecati sequi ullam! Consequuntur culpa esse minima?</p>
                    <br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur cumque cupiditate deserunt dolor eos esse est excepturi fuga harum magnam magni obcaecati omnis quia quibusdam quisquam ratione reprehenderit, tempora voluptates voluptatibus? Beatae dignissimos error officia perspiciatis quas voluptates? Ab animi at, blanditiis corporis dolores ea eaque enim fugiat hic, incidunt ipsam natus nostrum possimus quam quasi reiciendis sunt? Consequatur hic impedit itaque tempore. Architecto, asperiores cupiditate distinctio ea eaque error expedita illo ipsum iusto laborum numquam obcaecati pariatur repudiandae soluta temporibus? Doloremque laboriosam nobis obcaecati sit tempore? Adipisci earum modi nulla numquam obcaecati sequi ullam! Consequuntur culpa esse minima?</p>
                    <br><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab animi culpa debitis doloribus ea fuga fugit illum impedit iste iusto laborum minima molestiae natus neque non optio perspiciatis porro quae quidem quos ratione repellat repudiandae saepe, suscipit tempora ullam?</p>
                </div>
                <div class="publication__tags-row tags">
                    <ul class="tags__list">
                        <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                        <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                        <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                    </ul>
                </div>
                <div class="publication__social-row">
                    <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                    <script src="//yastatic.net/share2/share.js"></script>
                    <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,whatsapp,telegram" data-counter=""></div>
                </div>


                <div class="publication__comments comments">
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



            <aside class="publication__aside aside">
                <div class="aside__search search">
                    <input type="text" class="search__input input" placeholder="Поиск по статьям">
                    <button class="search__btn"></button>
                </div>
                <div class="aside__links-list links-list links-list--rubrics">
                    <h4 class="links-list__title aside__title">Рубрики</h4>
                    <ul class="links-list__list">
                        <li class="links-list__item"><a href="" class="links-list__link link">Собаки</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Кошки</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Болезни и лечение</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Воспитание</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Питание и корма</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Мероприятия и выставки</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link links-list__link--bold link">Все статьи</a></li>
                    </ul>
                </div>
                <div class="aside__tag-search tag-search">
                    <h4 class="tag-search__title aside__title">Поиск по тегу</h4>
                    <ul class="tag-search__tag-list">
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Уход</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Кормление</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Паразиты</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Выставки</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Родословная</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Шерсть</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Паразиты</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Уход</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Уход</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Кормление</a></li>
                        <li class="tag-search__tag-item"><a href="" class="tag-search__tag-link">Паразиты</a></li>
                    </ul>
                </div>
                <div class="aside__rec-block rec-block">
                    <img src="/img/aside_rec.png" alt="" class="rec-block__img">
                </div>
                <div class="aside__links-list links-list links-list--popular">
                    <h4 class="links-list__title aside__title">Популярные статьи</h4>
                    <ul class="links-list__list">
                        <li class="links-list__item"><a href="" class="links-list__link link">Нужна ли стерилизация</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Профилактика паразитов</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Как выбрать щенка</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Выбор корма для котов</a></li>
                        <li class="links-list__item"><a href="" class="links-list__link link">Особенности корма котов</a></li>
                    </ul>
                </div>
                <div class="aside__like-declarations like-declarations">
                    <h4 class="like-declarations__title aside__title">Объявления</h4>
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


        <div class="like-publications">
            <p class="like-publications__title">Похожие публикации</p>
            <ul class="like-publications__list">
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                        </ul>
                    </div>
                </li>
                <li class="like-publications__item">
                    <div class="like-publications__img-wrap">
                        <a href="" class="like-publications__img-link"><img src="/img/like_pub.png" alt="" class="like-publications__img"></a>
                    </div>
                    <p class="like-publications__name"><a href="" class="like-publications__link link">Как правильно и быстро приучить котят к лотку</a></p>
                    <div class="like-publications__small-descr text-block"><p>Если соблюдать простые правила, животные привыкнут быстро и безболезненно.</p></div>
                    <div class="like-publications__tags-row tags">
                        <ul class="tags__list">
                            <li class="tags__item"><a href="" class="tags__link">Уход</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Кормление</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Паразиты</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Ветеринария</a></li>
                            <li class="tags__item"><a href="" class="tags__link">Лечение</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection