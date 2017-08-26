@extends('front.layout')
@section('content')
    <div class="content">
        <main class="main">
            <h1 class="main__title"><span class="main__title-first-letter">О</span>бъявления и услуги для животных</h1>
            <div class="main__category-nav category-nav">
                <div class="category-nav__row-wrapper">
                    <p class="category-nav__title">Животные</p>
                    <ul class="category-nav__list">
                        <li class="category-nav__item"><a href="" class="category-nav__link">Кошки</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Собаки</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Птицы</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Рептилии</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Земноводные</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Грызуны</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Насекомые</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Экзотические</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Аквариумные</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Членистоногие</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Сельхозживотные</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Прочие</a></li>
                    </ul>
                </div>
                <div class="category-nav__row-wrapper">
                    <p class="category-nav__title">Организации и услуги</p>
                    <ul class="category-nav__list category-nav__list--organizations">
                        <li class="category-nav__item"><a href="" class="category-nav__link">Питомники</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Зоомагазины</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Ветаптеки</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Ветклиники</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Зоотовары</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Услуги</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Клубы</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Вязка</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Бюро находок</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Помощь животным</a></li>
                        <li class="category-nav__item"><a href="" class="category-nav__link">Отдам в дар</a></li>
                    </ul>
                </div>
            </div>
            <div class="main__content-wrapper">
                <div class="main__main-content main-content">
                    <div class="main__news news">
                        <h2 class="news__title news__title--main-page">Что почитать на сайте</h2>
                        <ul class="news__list">
                            <li class="news__item">
                                <div class="news__img-wrapper">
                                    <img src="/img/news-pl.png" alt="" class="news__img">
                                </div>
                                <div class="news__info-wrapper">
                                    <div class="news__item-title"><a href="" class="news__link link">Как правильно и быстро приучть котят к лотку</a></div>
                                    <p class="news__text">Ветеринарный паспорт для собак и кошек - международный ветеринарный документ, содержащий информацию о самом животном и информацию владельца.</p>
                                    <p class="news__date-comment-wrapper"><span class="news__date">12.05.15, 16:00</span><span class="news__text-delimiter"> • </span><span class="news__comments">10 комментариев</span></p>
                                </div>
                            </li>
                            <li class="news__item">
                                <div class="news__img-wrapper">
                                    <img src="/img/news-pl.png" alt="" class="news__img">
                                </div>
                                <div class="news__info-wrapper">
                                    <div class="news__item-title"><a href="" class="news__link link">Как правильно и быстро приучть котят к лотку Как правильно и быстро приучть котят к лотку</a></div>
                                    <p class="news__text">Ветеринарный паспорт для собак и кошек - международный ветеринарный документ, содержащий информацию о самом животном и информацию владельца.</p>
                                    <p class="news__date-comment-wrapper"><span class="news__date">12.05.15, 16:00</span><span class="news__text-delimiter"> • </span><span class="news__comments">10 комментариев</span></p>
                                </div>
                            </li>
                            <li class="news__item">
                                <div class="news__img-wrapper">
                                    <img src="/img/news-pl.png" alt="" class="news__img">
                                </div>
                                <div class="news__info-wrapper">
                                    <div class="news__item-title"><a href="" class="news__link link">Знаменитые собаки медалисты и чемпионы</a></div>
                                    <p class="news__text">Ветеринарный паспорт для собак и кошек - международный ветеринарный документ, содержащий информацию о самом животном и информацию владельца.</p>
                                    <p class="news__date-comment-wrapper"><span class="news__date">12.05.15, 16:00</span><span class="news__text-delimiter"> • </span><span class="news__comments">10 комментариев</span></p>
                                </div>
                            </li>
                            <li class="news__item">
                                <div class="news__img-wrapper">
                                    <img src="/img/news-pl.png" alt="" class="news__img">
                                </div>
                                <div class="news__info-wrapper">
                                    <div class="news__item-title"><a href="" class="news__link link">Какие собаки лучше всего подходят ксли в доме дети</a></div>
                                    <p class="news__text">Ветеринарный паспорт для собак и кошек - международный ветеринарный документ, содержащий информацию о самом животном и информацию владельца.</p>
                                    <p class="news__date-comment-wrapper"><span class="news__date">12.05.15, 16:00</span><span class="news__text-delimiter"> • </span><span class="news__comments">10 комментариев</span></p>
                                </div>
                            </li>
                            <li class="news__item">
                                <div class="news__img-wrapper">
                                    <img src="/img/news-pl.png" alt="" class="news__img">
                                </div>
                                <div class="news__info-wrapper">
                                    <div class="news__item-title"><a href="" class="news__link link">Профилактика паразитов для кошек и собак</a></div>
                                    <p class="news__text">Ветеринарный паспорт для собак и кошек - международный ветеринарный документ, содержащий информацию о самом животном и информацию владельца.</p>
                                    <p class="news__date-comment-wrapper"><span class="news__date">12.05.15, 16:00</span><span class="news__text-delimiter"> • </span><span class="news__comments">10 комментариев</span></p>
                                </div>
                            </li>
                            <li class="news__item news__item--reclame">
                                <img src="/img/palceholder_rec.png" alt="" class="news__rec-img">
                            </li>
                        </ul>
                    </div>
                    <div class="main__declarations-division declarations-division">
                        <h3 class="declarations-division__main-title">Объявления по городам</h3>
                        <ul class="declarations-division__list">
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Актау</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Павлодар</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Алматы</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Жезказган</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Астана</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Атырау</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Караганда</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Семей</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Петропавловск</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Актау</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Костанай</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Кокшетау</a><span class="declarations-division__declar-count"> 00000</span></li>
                        </ul>
                    </div>
                    <div class="main__declarations-division declarations-division">
                        <h3 class="declarations-division__main-title">Объявления по категориям</h3>
                        <h4 class="declarations-division__title">Животные</h4>
                        <ul class="declarations-division__list">
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Кошки</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Собаки</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Птицы</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Рептилии</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Рыбы</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Земноводные</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Грызуны</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Насекомые</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Экзотические</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Аквариумные</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Членистоногие</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Сельхозживотные</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Отдам в дар</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Прочие</a><span class="declarations-division__declar-count"> 00000</span></li>
                        </ul>
                        <h4 class="declarations-division__title">Организации</h4>
                        <ul class="declarations-division__list">
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Зоомагазины</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Ветклиники</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Ветаптеки</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Питомники</a><span class="declarations-division__declar-count"> 00000</span></li>
                        </ul>
                        <h4 class="declarations-division__title">Услуги</h4>
                        <ul class="declarations-division__list">
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Вязка</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Бюро находок</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Помощь животным</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Зоогостиницы</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Хендлер</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">На заказ</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link declarations-division__link--main">Уход</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Грумер</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Дрессура</a><span class="declarations-division__declar-count"> 00000</span></li>
                            <li class="declarations-division__item"><a href="" class="declarations-division__link link">Кинолог</a><span class="declarations-division__declar-count"> 00000</span></li>
                        </ul>
                    </div>
                </div>
                <aside class="main__aside aside">
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
                    <div class="aside__rec-block rec-block">
                        <img src="/img/reec2.png" alt="" class="rec-block__img">
                    </div>
                    <div class="aside__forum-publication forum-publication">
                        <div class="forum-publication__wrapper">
                            <h4 class="forum-publication__title aside__title">Последнее на форуме</h4>
                            <ul class="forum-publication__list">
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <p class="forum-publication__name"><a href="" class="forum-publication__name-link link">Как правильно кормить новорожденных котят</a></p>
                                    <p class="forum-publication__item-info"><span class="forum-publication__date">12.03.17</span><span class="forum-publication__comments">10 комментариев</span></p>
                                </li>
                                <li class="forum-publication__item">
                                    <a href="" class="forum-publication__forum-go-link link">Перейти на форум</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </main>
    </div>
@endsection