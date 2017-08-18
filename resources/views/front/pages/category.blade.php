@extends('front.layout')
@section('content')
    <section class="breadcrumbs">
        <div class="breadcrumbs__wrapper">
            <span class="breadcrumbs__level"><a href="#" class="grey-link">Главная</a></span>
            <span class="breadcrumbs__delimiter">/</span>
            <span class="breadcrumbs__level"><a href="#" class="grey-link">Собаки</a></span>
        </div>
    </section>
    <section class="filter">
        <div class="filter__wrapper">
            <h1 class="filter__title">Собаки в Казахстане</h1>
            <div class="filter__row">
                <div class="filter__criterion-row criterion">
                    <div class="criterion__name">Город</div>
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
                    <div class="criterion__name">Порода</div>
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

            <div class="filter__row"></div>
        </div>
    </section>
    <div class="main-content">
        <div class="declarations-top">
            <h2 class="declarations-top__title">Собаки в Алматы</h2>
            <div class="declarations-top__subscriptions-wrap">
                <a href="" class="declarations-top__subscriptions link">Подписаться на эти объявления</a>
            </div>
        </div>
        <main class="declarations">
            <hr class="declarations__dashed-line dashed-line">
        </main>
    </div>
@endsection