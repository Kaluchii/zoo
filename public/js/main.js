$(document).ready(function () {


    $( "#test2" ).selectmenu({
        width: 170,
        classes: {
            "ui-selectmenu-button": "select-button select-button--filter-gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list select-list--filter" );

    $( "#testt1" ).selectmenu({
        width: 200,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );

    $( "#messages" ).selectmenu({
        width: 200,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );

    $( "#active" ).selectmenu({
        width: 155,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );

    $( "#testt2" ).selectmenu({
        width: 200,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );


// Начинаем тестировать фронт и как он ваще работает
    $( "#test3" ).selectmenu({
        width: 135,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
// Фильтры пошли

    $( "#test4" ).selectmenu({
        width: 135,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
    $( "#test9" ).selectmenu({
        width: 135,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );

    $( "#test5" ).selectmenu({
        width: 55,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
    $( "#test6" ).selectmenu({
        width: 55,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
    $( "#test7" ).selectmenu({
        width: 55,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
    $( "#test8" ).selectmenu({
        width: 55,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );

    $( "#vid" ).selectmenu({
        width: 320,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );

    $( "#select" ).selectmenu({
        width: 320,
        classes: {
            "ui-selectmenu-button": "select-button select-button--gradient-h"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
    var $window = $(window);

    function decListRebuild(view) {
        if ((favs_decl = $('.js_favs_decl')).length){
            var display_how = $('.js_how_to_display');

            if ( view === 'tile' ) {
                favs_decl.find('.declarations-list').addClass('declarations-list--tile');
                favs_decl.find('.declaration').addClass('declaration--tile');
                $(display_how).children('.radio-switchers__input[value="tile"]').prop('checked', true);
            } else {
                favs_decl.find('.declarations-list').removeClass('declarations-list--tile');
                favs_decl.find('.declaration').removeClass('declaration--tile');
                $(display_how).children('.radio-switchers__input[value="list"]').prop('checked', true);
            }
        }
    }
    if ( $window.width() <= 900 ) {
        decListRebuild('tile');
    }

    $('.js_scroll_bottom').scrollTop($('.js_scroll_bottom').height());
    $window.on('resize', function () {
        if ( $window.width() <= 900 ) {
            decListRebuild('tile');
        }
    });

    $window.on('load', function () {
        /* Открытие дополнительных пунктов фильтра */
        if ($('.js_toggle_extra').length) {
            $('.js_toggle_extra').on('click', function () {
                $('.js_extra_options').slideToggle();
                $(this).toggleClass('filter__extra-options-btn--open');
            });
        }

        /* Функция для синхронной подсветки ссылки и изображения */
        function setBehavior(parentName, childName) {
            $(childName).hover(function () {
                $(this).closest(parentName).addClass('link-hover');
            }, function () {
                $(this).closest(parentName).removeClass('link-hover');
            });
        }

        setBehavior('.like-declaration', '.like-declaration__link');
        setBehavior('.like-declaration', '.like-declaration__img');
        setBehavior('.hot-declaration', '.hot-declaration__link');
        setBehavior('.hot-declaration', '.hot-declaration__img');
        setBehavior('.declaration__wrapper', '.declaration__name');
        setBehavior('.declaration__wrapper', '.declaration__img');
        setBehavior('.news__item', '.news__link');
        setBehavior('.news__item', '.news__img');
        setBehavior('.like-publications__item', '.like-publications__link');
        setBehavior('.like-publications__item', '.like-publications__img');


        /* Переключение режима отображения объявлений (список/плитка) */
        if ((display_how = $('.js_how_to_display')).length) {
            var display_condition = $('.radio-switchers__input:checked').prop('value');
            $(display_how).on('click', function () {
                var display = $(this).children('.radio-switchers__input').prop('value');
                display_condition = $('.radio-switchers__input:checked').prop('value');

                if (display_condition !== display) {

                    display_condition = display;

                    $('.js_declarations').addClass('declarations__list--view-animation');
                    setTimeout(function () {
                        $('.declaration').toggleClass('declaration--tile', display === 'tile');
                        $('.js_declarations').toggleClass('declarations-list--tile', display === 'tile');
                    }, 500);
                    setTimeout(function () {
                        $('.js_declarations').removeClass('declarations__list--view-animation')
                    }, 550);

                }
            });
        }

        if ((tab_switch = $('.js_tab_switch')).length) {
            $(tab_switch).on('click', function () {
                $('.settings__tab').hide();
                $(tab_switch).removeClass('is-active');
                $(this).addClass('is-active');
                $('#' + $(this).data('tab-id')).show();
            });
        }

        if ((date_select = $('.input--date-select')).length) {
            $(date_select).datepicker({minDate: 0});
        }

        if ((open_up = $('.js_open_up')).length) {
            $(open_up).on('click', function (e) {
                e.preventDefault();
                $(this).toggleClass('is-active');
                $(this).closest('.my-dec-item__row-actions').toggleClass('overlay');
                var parrent = $(this).closest('.my-dec-item');
                var offset = '100%';
                if ( $window.width() <= 650 ){
                    offset = '192px';
                } else if ( $window.width() <= 1020 ){
                    offset = $('.my-dec-item__services-col').outerHeight();
                    offset = 'calc(100% - ' + offset + 'px)';
                }
                $(parrent).find('.auto-up').css('top', offset).fadeToggle('is-open');
            });

            $('.js_actions_open').on('click', function () {
                if ( $(this).hasClass('is-open') ){
                    var parent = $(this).closest('.my-dec-item');

                    parent.find('.js_open_up').removeClass('is-active');
                    parent.find('.my-dec-item__row-actions').removeClass('overlay');
                    parent.find('.auto-up').fadeOut();
                }
                $(this).toggleClass('is-open');
                var actions = $(this).parent().find('.my-dec-item__row-actions');
                actions.toggleClass('is-open');
                if( actions.hasClass('is-open') ){
                    actions.css("display", "flex").hide().fadeIn();
                } else {
                    actions.fadeOut();
                }
            });

            $('.js_auto-up_close').on('click', function () {
                var parent = $(this).closest('.my-dec-item');

                parent.find('.js_open_up').removeClass('is-active');
                parent.find('.my-dec-item__row-actions').removeClass('overlay');
                $(this).closest('.auto-up').fadeOut();
            });
        }

        $('.js_open_forum').on('click', function () {
            $(this).fadeOut();
            $('.forum-publication').addClass('is-open').css('height', $('.forum-publication__wrapper').outerHeight() + 'px');
        });

        if ( $('.obyavlenie').length) {
            $('.js_actions_open').on('click', function () {
                $(this).toggleClass('is-open');

                var actions = $(this).parent().find('.m-list');
                actions.toggleClass('is-open');
                actions.fadeToggle();
            });

            $('.m-list').on('click', function () {
                $('.js_actions_open').trigger('click')
            });
        }

        if ($('.file-select').length) {
            $('input[type=file]').on('change', function () {
                $(this).siblings('.js_file_name').text($(this).val());
            });
        }
        if (( carousel = $('.js_carousel_list') ).length) {

            var cWidth = carousel.width();

            $window.on('resize', function () {
                cWidth = carousel.width(); // Ширина видимой части карусели
            });

            var canAnimate = true;

            $('.js_carousel_right').on('click', function () {
                if (canAnimate) {
                    canAnimate = false;
                    var invisibleWidth = (cWidth + 10) % 160; // Сколько прокрутить для полного отображения обрезанного элемента
                    var viewWidth = cWidth - invisibleWidth; // Ширина элементов помещающихся в карусель полностью
                    var listWidth = Math.ceil(carousel.find('.hot-carousel__item').length / 3) * 160 - 10;  // Ширина всего списка
                    var left = Math.abs(parseInt(carousel.css('left'))); // Отступ слева
                    var rightWidth = listWidth - (left + cWidth);
                    if (rightWidth > viewWidth) {
                        carousel.animate({left: "-=" + (viewWidth + 10)}, 800, function () {
                            canAnimate = true
                        })
                    } else {
                        carousel.animate({left: "-=" + rightWidth}, 800, function () {
                            canAnimate = true
                        })
                    }
                }
            });

            $('.js_carousel_left').on('click', function () {
                if (canAnimate) {
                    canAnimate = false;
                    if (Math.abs(parseInt(carousel.css('left'))) <= cWidth) {
                        carousel.animate({left: 0}, 800, function () {
                            canAnimate = true
                        })
                    } else {
                        var scLeft = cWidth - ((cWidth + 10) % 160) + 10;
                        carousel.animate({left: "+=" + scLeft}, 800, function () {
                            canAnimate = true
                        })
                    }
                }
            });
        }

        $('.js_payment').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });


        $('.js_author_send').magnificPopup({
            type: 'inline',
            focus: '#name',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in',
            callbacks: {
                beforeOpen: function() {
                    if($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#name';
                    }
                }
            }
        });

        $('.js_share').magnificPopup({
            type: 'inline',
            focus: '#email',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in',
            callbacks: {
                beforeOpen: function() {
                    if($(window).width() < 700) {
                        this.st.focus = false;
                    } else {
                        this.st.focus = '#email';
                    }
                }
            }
        });

        $('.js_claim').magnificPopup({
            type: 'inline',

            fixedContentPos: false,
            fixedBgPos: true,

            overflowY: 'auto',

            closeBtnInside: true,
            preloader: false,

            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });


    });
});