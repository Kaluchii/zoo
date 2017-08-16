@section('header')
    <header class="header">
        <nav class="header__main-nav main-nav">
            <div class="main-nav__logo-wrap">
                <a href="/" class="main-nav__home-link">
                    <img src="/img/logo.png" alt="ЗооМир Бесплатные объявления о животных и услугах" class="main-nav__logo-img" width="138" height="21">
                </a>
                <p class="main-nav__text-below-logo">Бесплатные объявления о животных и услугах</p>
            </div>
            <div class="main-nav__central-navigation central-navigation">
                <div class="central-navigation__top-list-wrap">
                    <ul class="central-navigation__top-nav-list">
                        <li class="central-navigation__top-nav-item"><a href="#" class="central-navigation__top-nav-link grey-link">Личный кабинет</a></li>
                        <li class="central-navigation__top-nav-item"><a href="#" class="central-navigation__top-nav-link grey-link">Регистрация</a></li>
                        <li class="central-navigation__top-nav-item"><a href="#" class="central-navigation__top-nav-link grey-link">Избранные</a></li>
                    </ul>
                </div>
                <div class="central-navigation__bottom-list-wrap">
                    <ul class="central-navigation__nav-list">
                        <li class="central-navigation__nav-item is-active"><a href="#" class="central-navigation__nav-link link">Объявления</a></li>
                        <li class="central-navigation__nav-item"><a href="#" class="central-navigation__nav-link link">Почитать</a></li>
                        <li class="central-navigation__nav-item"><a href="#" class="central-navigation__nav-link link">Форум</a></li>
                    </ul>
                </div>
            </div>
            <div class="main-nav__add-advert-wrap">
                <div class="main-nav__add-link-wrap">
                    <a href="#" class="main-nav__add-link link">Подать объявление</a>
                </div>
                <p class="main-nav__advert-count">15&nbsp;объявлений<br>уже&nbsp;на сайте</p>
            </div>
        </nav>
        <div class="header__search-panel search-panel">
            <div class="search-panel__filters-wrap">
                <div class="search-panel__input-wrap">
                    <input type="text" class="input" placeholder="Поиск объявлений">
                </div>
                <div class="search-panel__select-wrap">
                    <select name="" id="" class="select cl-h">
                        <option value="1">Во всех категориях</option>
                    </select>
                </div>
                <div class="search-panel__select-wrap">
                    <select name="" id="" class="select cl-h">
                        <option value="1">Весь Казахстан</option>
                    </select>
                </div>
                <div class="search-panel__btn-wrap">
                    <button class="button">Найти</button>
                </div>
            </div>
        </div>
    </header>
@endsection