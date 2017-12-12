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
                <p class="publication__info-row"><span class="publication__date">12.05.15, 16:00</span><span
                            class="publication__rubric">Рубрика: <a
                                href="" class="publication__rubric-link light-grey-link">Кошки</a></span></p>
                <div class="publication__text text-block">
                    <img src="/img/publication_pl.png" alt="" class=""><br><br>
                    <p>Преимущества содержания хорька дома:</p>
                    <p><br/>
                    </p>
                    <ol>
                        <li>зверек обладает привлекательной внешностью;</li>
                        <li>не даст скучать и подарит множество приятных минут;</li>
                        <li>его можно обучить командам и различным трюкам;</li>
                        <li>не вызывает аллергии;</li>
                        <li>не нужно выводить на прогулки;</li>
                        <li>в качестве туалета животные используют лотки.</li>
                        <li>Недостатки домашнего содержания:</li>
                        <li>самцы могут метить территорию;</li>
                        <li>издают отталкивающий запах;</li>
                        <li>любят грызть вещи;</li>
                        <li>крутятся под ногами.</li>
                    </ol>
                    <p><br/>
                    </p>
                    <p>Люди, решившие купить хорька, спрашивают, кого выбрать: самца или самочку. Самочки более
                        послушные и понятливые, легче поддаются тренировке. Но они очень подвижные, суются во все щели и
                        требуют к себе постоянного внимания, с удовольствием играют с детьми. Самцы более спокойные,
                        играют только изредка. Но в период гона питомцы становятся неконтролируемыми и метят
                        территорию.</p>
                    <p><br/>
                    </p>
                    <h1>Заголовок H1</h1>
                    <h2>Заголовок H2</h2>
                    <h3>Заголовок H3</h3>
                    <h4>Заголовок H4</h4>
                    <h5>Заголовок H5</h5>
                    <p><br/>
                    </p>

                    <p><i>Текст наклонный</i></p>
                    <p><u>Текст подчеркнутый</u></p>
                    <p><br/>
                    </p>
                    <blockquote>Цитата обычно записываемая</blockquote>
                    <blockquote>в несколько строк с отступом</blockquote>


                    <p><br/>
                    </p>
                    <p>Клетку необходимо разделить на несколько «комнат»:</p>
                    <p><br/>
                    </p>
                    <ul>
                        <li>спальню – здесь должен стоять домик, где хорек сможет спрятаться;</li>
                        <li>игровую – необходимо предоставить зверьку различные игрушки, лестницы, трубы, кольца;</li>
                        <li>столовую – в ней зверек будет принимать пищу;</li>
                        <li>туалет – хорек легко приучается к лотку.</li>
                    </ul>
                    <p><br/>
                    </p>
                    <p>Идеальным вариантом станет многоуровневая клетка для хорька, состоящая из нескольких этажей, что
                        даст возможность зверьку полазить.</p>
                    <p>Питомцу необходимо предоставить игрушки, но они должны быть сделаны из прочного латекса.
                        Резиновые, пластмассовые, меховые предметы он может легко разорвать и проглотить, что грозит
                        проблемами с кишечником.</p>
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
                    <div class="ya-share2"
                         data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,whatsapp,telegram"
                         data-counter=""></div>
                </div>
            </div>
        </main>
    </div>
@endsection