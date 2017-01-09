/**
 * Created by Денис on 27.10.2016.
 */

"use strict";


jQuery(window).on('load', function(){
    jQuery('.header-menu, .header-main-content, .slicknav_nav').onePageNav({
        currentClass: 'current',
        changeHash: true,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: ':not(.external)',
        easing: 'swing'
    });

});

jQuery(document).ready(function(){
    jQuery(function(){
        jQuery('.header-menu').slicknav({
            label: '',
            appendTo: ".header-wrap .row",
            duration: 700,
            easingClose: "swing",
            closeOnClick:true
        });

        jQuery('<i class="fa fa-bars" aria-hidden="true"></i>').prependTo(jQuery('.slicknav_btn'));
    });



    jQuery('.header-callback-btn').magnificPopup({
        items: {
            src: '.callback-popup-form-wrap',
            type: 'inline'
        },
        type: 'image' // this is default type
    });

    jQuery('.why_we-slider').slick({
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'
    });

    jQuery(".fancybox").fancybox({
            margin : 0,
            padding : 0,
            openEffect	: 'none',
            closeEffect	: 'none'
        });

    new WOW().init({
        offset: 200,
        mobile: false
    });
});


