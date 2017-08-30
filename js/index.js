'use strict';

jQuery(document).ready(function () {

    jQuery('.types-plans__btn').on('click',function () {
        var thisSectionColor = jQuery(this).css('border-color');
        headersColorChange(thisSectionColor);
        console.log(thisSectionColor);
    })
    jQuery("#menu-icon").on('click',function () {
        jQuery(".top-menu").toggle();

    });
});

var headersColorChange = function(color) {
    jQuery('.main-subtitles').css('background-color', color);
};







