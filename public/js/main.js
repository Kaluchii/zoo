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

/*
$( ".select" ).forEach(function(){
    $(this).selectmenu({
        width: 320,
        classes: {
            "ui-selectmenu-button": "select-button"
        }
    }).selectmenu( "menuWidget" ).addClass( "select-list" );
});*/
