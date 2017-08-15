@section('header')
    <header class="header">
        <nav class="header__main-nav main-nav">
            <div class="main-nav__logo-wrap">
                <img src="" alt="ЗооМир Бесплатные объявления о животных и услугах" class="main-nav__logo-img">
                <p class="main-nav__text-below-logo">Бесплатные объявления о животных и услугах</p>
            </div>
            <div class="main-nav__central-navigation"></div>
            <div class="main-nav__add-advert-wrap">
                <div class="main-nav__add-link-wrap">
                    <a href="#" class="main-nav__add-link">Подать объявление</a>
                </div>
                <p class="main-nav__advert-count">15&nbsp;объявлений уже&nbsp;на сайте</p>
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