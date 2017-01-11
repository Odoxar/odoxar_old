
 "use strict";

 $(document).ready(function() {
     $(".work-gallery-link").fancybox({
         arrows: true,
         mouseWheel: false
     });

     $(".contact").fancybox({
         'autoScale'     	: false,
         'title'            : null,
         'transitionIn'		: 'none',
         'transitionOut'    : 'none',
         'type'				: 'iframe'
     });
 });


// // // smooth scrolling to anchor
//     //smoothscroll
//
//     $('.header-menu').onePageNav({
//         currentClass: 'active',
//         changeHash: true,
//         scrollSpeed: 750,
//         scrollThreshold: 0.5,
//         filter: ''
//     });
//     $(window).on('load resize', function() {
//         $('.slicknav_nav').onePageNav({
//             currentClass: 'active',
//             changeHash: true,
//             scrollSpeed: 750,
//             scrollThreshold: 0.5,
//             filter: ''
//         });
//     });
//
//  var wow = new WOW({
//             offset:       100,          // default
//             mobile:       false       // default
//         })
//     wow.init();
// });
