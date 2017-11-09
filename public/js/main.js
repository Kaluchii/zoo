$(".select.gr-h").selectmenu({
    width: 320,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h"
    }
}).selectmenu("menuWidget").addClass("select-list");
$(".select.cl-h").selectmenu({
    width: 200,
    classes: {
        "ui-selectmenu-button": "select-button select-button--color-h"
    }
}).selectmenu("menuWidget").addClass("select-list");


$("#selecto").selectmenu({
    width: 165,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--sort-gradient-h"
    }
}).selectmenu("menuWidget").addClass("select-list select-list--filter");

$("#test2").selectmenu({
    width: 170,
    classes: {
        "ui-selectmenu-button": "select-button select-button--filter-gradient-h"
    }
}).selectmenu("menuWidget").addClass("select-list select-list--filter");

$("#test3").selectmenu({
    width: 135,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");
$("#test4").selectmenu({
    width: 135,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");
$("#test9").selectmenu({
    width: 135,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");

$("#test5").selectmenu({
    width: 55,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");
$("#test6").selectmenu({
    width: 55,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");
$("#test7").selectmenu({
    width: 55,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");
$("#test8").selectmenu({
    width: 55,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--small"
    }
}).selectmenu("menuWidget").addClass("select-list");

$("#vid").selectmenu({
    width: 320,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h"
    }
}).selectmenu("menuWidget").addClass("select-list");

$("#select").selectmenu({
    width: 320,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h"
    }
}).selectmenu("menuWidget").addClass("select-list");

$("#reg").selectmenu({
    width: 200,
    classes: {
        "ui-selectmenu-button": "select-button select-button--color-h"
    }
}).selectmenu("menuWidget").addClass("select-list");

/*
$( ".select" ).forEach(function(){
    $(this).selectmenu({
        width: 320,
        classes: {
            "ui-selectmenu-button": "select-button"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
});*/


$(document).ready(function () {

    $(window).on('load', function () {
        /* Открытие дополнительных пунктов фильтра */
        if ($('.js_toggle_extra').length) {
            $('.js_toggle_extra').on('click', function () {
                $('.js_extra_options').slideToggle();
                // $('.js_extra_options').toggleClass('filter__row--close filter__row--open');
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
            var display_condition = 'list';
            $(display_how).on('click', function () {
                var display = $(this).children('.radio-switchers__input').attr('value');

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
                $(parrent).find('.auto-up').fadeToggle('is-open');
            })
        }

        if ($('.file-select').length) {
            $('input[type=file]').on('change', function () {
                $(this).siblings('.js_file_name').text($(this).val());
            });
        }

        if ((ftrama = $('.js_gallery_fotorama')).length) {
            // 1. Initialize fotorama manually.
            var $fotorama = $(ftrama).fotorama();
            // 2. Get the API object.
            var fotorama = $fotorama.data('fotorama');
            fotorama.setOptions({
                arrows: false
            });
        }
        if (( carousel = $('.js_carousel_list') ).length) {

            var cWidth = carousel.width();

            $(window).on('resize', function () {
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

        $('.js_pay_open').on('click', function () {
            $('.payment-popup').addClass('is-open').animate({opacity: 1}, 300)
        });
        $('.js_pay_close').on('click', function () {
            $('.payment-popup').animate({opacity: 0}, 300, function () {
                $(this).removeClass('is-open')
            })
        });


        $('.popup-with-form').magnificPopup({
            type: 'inline',
            preloader: false,
            focus: '#name',

            // When elemened is focused, some mobile browsers in some cases zoom in
            // It looks not nice, so we disable it:
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


    });
});