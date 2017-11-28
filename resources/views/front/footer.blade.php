@section('footer')
    <footer class="footer">
        <div class="footer__wrapper">
            <div class="footer__soc">
                <p class="footer__copy">© Все права защищены,<br>«ЗооМир», 2017</p>
                <div class="footer__soc-wrap">
                    <p class="footer__soc-text">Мы в социальных сетях</p>
                    <ul class="footer__soc-list">
                        <li class="footer__soc-item"><a href="#" class="footer__soc-link"><img src="/img/social_vk.png" alt="" class="footer__soc-img"></a></li>
                        <li class="footer__soc-item"><a href="#" class="footer__soc-link"><img src="/img/social_fb.png" alt="" class="footer__soc-img"></a></li>
                        <li class="footer__soc-item"><a href="#" class="footer__soc-link"><img src="/img/social_tw.png" alt="" class="footer__soc-img"></a></li>
                    </ul>
                </div>
            </div>
            <ul class="footer__sub-nav sub-nav">
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">Пользовательское соглашение</a></li>
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">Правила подачи объявления</a></li>
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">Правила общения на сайте</a></li>
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">О проекте</a></li>
            </ul>
            <ul class="footer__sub-nav sub-nav">
                <li class="sub-nav__item sub-nav__item--reclame"><a href="#" class="sub-nav__link link">Реклама на сайте</a></li>
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">Как продвигать объявление</a></li>
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">Карта сайта</a></li>
                <li class="sub-nav__item"><a href="#" class="sub-nav__link link">Обратная связь</a></li>
            </ul>
            <div class="footer__rating-col">
                <div class="footer__rating rating">
                    <p class="rating__text">Пожалуйста, оцените страницу<br>
                        <span class="rating__numbers" itemprop="aggregateRating" itemscope="itemscope" itemtype="http://schema.org/AggregateRating">
                            <meta itemprop="ratingValue" content="4.5">Рейтинг — 4.5
                            <meta itemprop="bestRating" content="5">
                            <meta itemprop="ratingCount" content="145">(250 человек)
                        </span>
                    </p>
                    <div class="rating__stars">
                        <ul class="rating__stars-list" style="width:125px">
                            <li class="rating__current" style="width:70%;">4.5</li>
                            <li class="rating__star">
                                <a class="rating__link" data-raiting="1" title="1/5" style="width:20%;z-index:6" rel="nofollow">1</a>
                            </li>
                            <li class="rating__star">
                                <a class="rating__link" data-raiting="2" title="2/5" style="width:40%;z-index:5" rel="nofollow">2</a>
                            </li>
                            <li class="rating__star">
                                <a class="rating__link" data-raiting="3" title="3/5" style="width:60%;z-index:4" rel="nofollow">3</a>
                            </li>
                            <li class="rating__star">
                                <a class="rating__link" data-raiting="4" title="4/5" style="width:80%;z-index:3" rel="nofollow">4</a>
                            </li>
                            <li class="rating__star">
                                <a class="rating__link" data-raiting="5" title="5/5" style="width:100%;z-index:2" rel="nofollow">5</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="footer__make-in">Сделано в <a href="#" target="_blank" class="link">ИнтерПро</a></p>
            </div>
        </div>
    </footer>
@endsection