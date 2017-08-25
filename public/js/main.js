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
$('.js_toggle_extra').on('click', function () {
    $('.js_extra_options').toggleClass('filter__row--close filter__row--open');
    $(this).toggleClass('filter__extra-options-btn--open');
});

/* Синхронная подсветка изображения и ссылки */
$('.declaration__img').hover( function () {
    $(this).closest('.declaration__wrapper').addClass('link-hover');
}, function () {
    $(this).closest('.declaration__wrapper').removeClass('link-hover');
});
$('.declaration__name').hover( function () {
    $(this).closest('.declaration__wrapper').addClass('link-hover');
}, function () {
    $(this).closest('.declaration__wrapper').removeClass('link-hover');
});

/* Переключение режима отображения объявлений (список/плитка) */
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



// 1. Initialize fotorama manually.
var $fotorama = $('.js_gallery_fotorama').fotorama({
    // navwidth: '70%'
});
// 2. Get the API object.
var fotorama = $fotorama.data('fotorama');
fotorama.setOptions({
    arrows: false
});