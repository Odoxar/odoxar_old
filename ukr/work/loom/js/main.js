
$(function(){
    $('.header-menu').slicknav({
        appendTo: '.header .container',
        label: '',
        duration:	150,
        init: function() {
            $('<i class="fa fa-bars" aria-hidden="true"></i>').appendTo(".slicknav_icon");
        }
    });
});
$(document).ready(function(){
    $('.slider-wrap').slick({
        dots: false,
        adaptiveHeight: true
    });
});