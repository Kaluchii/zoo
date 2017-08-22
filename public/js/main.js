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





$('.js_toggle_extra').on('click', function () {
    $('.js_extra_options').toggleClass('filter__row--close filter__row--open');
    $(this).toggleClass('filter__extra-options-btn--open');
});