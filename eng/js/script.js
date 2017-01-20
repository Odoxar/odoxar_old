
"use strict";

 $(document).ready(function() {
     $(".work-gallery-link").fancybox({
         arrows: true,
         mouseWheel: false
     });

     $(window).scroll(function() {
         if($(this).scrollTop() > 100) {
             $('#message').fadeIn();
         } else {
             $('#message').fadeOut();
         }
     });

     // // smooth scrolling to anchor
     $('#message').click(function() {
         $('body,html').animate({scrollTop:0},800);
         return false;
     });
 });





$(".anchor").click(function() {
    $('body,html').animate({
        scrollTop: $("#portfolio").offset().top
    }, 800);
});

//  var wow = new WOW({
//             offset:       100,          // default
//             mobile:       false       // default
//         })
//     wow.init();
// });
