$( ".select.gr-h" ).selectmenu({
    width: 320,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h"
    }
}).selectmenu( "menuWidget" ).addClass( "select-list" );
$( ".select.cl-h" ).selectmenu({
    width: 200,
    classes: {
        "ui-selectmenu-button": "select-button select-button--color-h"
    }
}).selectmenu( "menuWidget" ).addClass( "select-list" );


$( "#selecto" ).selectmenu({
    width: 165,
    classes: {
        "ui-selectmenu-button": "select-button select-button--gradient-h select-button--sort-gradient-h"
    }
}).selectmenu( "menuWidget" ).addClass( "select-list select-list--filter" );

$( "#test2" ).selectmenu({
    width: 170,
    classes: {
        "ui-selectmenu-button": "select-button select-button--filter-gradient-h"
    }
}).selectmenu( "menuWidget" ).addClass( "select-list select-list--filter" );

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

$( "#reg" ).selectmenu({
    width: 200,
    classes: {
        "ui-selectmenu-button": "select-button select-button--color-h"
    }
}).selectmenu( "menuWidget" ).addClass( "select-list" );

/*
$( ".select" ).forEach(function(){
    $(this).selectmenu({
        width: 320,
        classes: {
            "ui-selectmenu-button": "select-button"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
});*/




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
    $(childName).hover( function () {
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
if ($('.js_how_to_display').length) {
    var display_condition = 'list';
    $('.js_how_to_display').on('click', function () {
        var display = $(this).children('.radio-switchers__input').attr('value');

        if (display_condition !== display){

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

if ($('.js_tab_switch').length){
    $('.js_tab_switch').on('click', function () {
        $('.settings__tab').hide();
        $('.js_tab_switch').removeClass('is-active');
        $(this).addClass('is-active');
        $('#' + $(this).data('tab-id')).show();
    });
}

if ($('.input--date-select').length){
    $( ".input--date-select" ).datepicker({ minDate: 0 });
}

if ($('.file-select').length){
    $('input[type=file]').on('change', function () {
        $(this).siblings('.js_file_name').text($(this).val());
    });
}

if ($('.js_gallery_fotorama').length){
    // 1. Initialize fotorama manually.
    var $fotorama = $('.js_gallery_fotorama').fotorama();
    // 2. Get the API object.
    var fotorama = $fotorama.data('fotorama');
    fotorama.setOptions({
        arrows: false
    });
}