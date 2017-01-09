
 "use strict";

 $(document).ready(function() {
     $(".work-gallery-link").fancybox();
 });
//
// $(document).ready(function(){
//     var $container = $('body');
//     var $sliderDiv = $('.portfolio-project');
//     // portfolio slider on/off when window.width 768
//     function slickify(){
//         $sliderDiv.slick({
//             slidesToShow: 1,
//             prevArrow: $('.prev'),
//             nextArrow: $('.next')
//         });
//     }
//     $(window).on('load resize', function(){
//         var $windowWidth = $(document).width();
//         if ($windowWidth < 768) {
//             if (!$sliderDiv.hasClass('slick-initialized')) {
//                 slickify();
//             }
//         } else{
//             if ($sliderDiv.hasClass('slick-initialized')) {
//                 $sliderDiv.slick("unslick");
//             }
//         }
// // add/remove class "wall", on/off portfolio grid
//         if ($(window).width() <= 767) {
//             $sliderDiv.removeClass('wall');
//         } else if ($(window).width() > 767 || !($sliderDiv.hasClass('wall'))) {
//             $sliderDiv.addClass('wall');
//         }
//     });
//
//
// // responsive header menu
//     $(function(){
//         $('.header-menu').slicknav({
//             prependTo: ".header-wrap .row",
//             label: '',
//             closeOnClick: true,
//             init: function () {
//                 $("span.slicknav_icon-bar").remove();
//             },
//             beforeOpen: function(e) {
//                 // console.log(e);
//                 if(e.hasClass('slicknav_btn')){
//                     $container.addClass('slicknav_open');
//                 }
//             },
//             beforeClose: function(e) {
//                 // console.log(e);
//                 if(e.hasClass('slicknav_btn')){
//                     $container.removeClass('slicknav_open');
//                 }
//                 if($(".slicknav_menu .header-menu-close").click()){
//                     $container.removeClass('slicknav_open');
//                 }
//             }
//         });
//     });
//
//
// // initialization specialist slider
//     $('.about-specialist').slick({
//         slidesToShow: 3,
//         prevArrow: '<button type="button" class="slick-prev"></button>',
//         nextArrow: '<button type="button" class="slick-next"></button>',
//         responsive: [
//             {
//                 breakpoint: 992,
//                 settings: {
//                     slidesToShow: 2
//                 }
//             },
//             {
//                 breakpoint: 768,
//                 settings: {
//                     slidesToShow: 2,
//                     arrows: false
//                 }
//             },
//             {
//                 breakpoint: 550,
//                 settings:  {
//                     slidesToShow: 1,
//                     arrows: false,
//                     centerMode: true,
//                     variableWidth: true
//                 }
//             },
//             {
//                 breakpoint: 480,
//                 settings:  {
//                     slidesToShow: 1,
//                     arrows: false,
//                     centerMode: true,
//                     centerPadding: '25px',
//                     variableWidth: true
//                 }
//             }
//
//         ]
//     });
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
//     var data = [
//         {
//             dataItem: "1",
//
//             projectContentTitle: "Частный коттедж1", // Key "username" means that Magnific Popup will look for an element with class "mfp-username" in markup and will replace its inner HTML with the value.
//
//             projectContentText: 'Киев, Украина, 2016', // Key "userWebsite_href" means that Magnific Popup will look for an element with class "mfp-userWebsite" and will change its "href" attribute. Instead of ending "href" you may put any other attribute.
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.', // Prefix "_img" is special. With it Magnific Popup finds an  element "userAvatarUrl" and replaces it completely with image tag.
//
//             projectImage_img: 'images/placeholder1.jpg'
//         },
//
//         {
//             dataItem: "2",
//
//             projectContentTitle: "Частный коттедж2",
//
//             projectContentText: 'Киев, Украина, 2016',
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.',
//
//             projectImage_img: 'images/placeholder1.jpg'
//         },
//
//         {
//             dataItem: "3",
//
//             projectContentTitle: "Частный коттедж3",
//
//             projectContentText: 'Киев, Украина, 2016',
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.',
//
//             projectImage_img: 'images/pexels.jpeg'
//         },
//
//         {
//             dataItem: "4",
//
//             projectContentTitle: "Частный коттедж4",
//
//             projectContentText: 'Киев, Украина, 2016',
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.',
//
//             projectImage_img: 'images/placeholder1.jpg'
//         },
//
//         {
//             dataItem: "5",
//
//             projectContentTitle: "Частный коттедж5",
//
//             projectContentText: 'Киев, Украина, 2016',
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.',
//
//             projectImage_img: 'images/placeholder1.jpg'
//         },
//
//         {
//             dataItem: "6",
//
//             projectContentTitle: "Частный коттедж6",
//
//             projectContentText: 'Киев, Украина, 2016',
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.',
//
//             projectImage_img: 'images/pexels.jpeg'
//         },
//
//         {
//             dataItem: "7",
//
//             projectContentTitle: "Частный коттедж7",
//
//             projectContentText: 'Киев, Украина, 2016',
//
//             projectContentTypeText: 'Вентиляция, кондиционирование, отопление, водоснабжение и водоотведение.',
//
//             projectImage_img: 'images/pexels.jpeg'
//         }
//     ];
//
// // portfolio-project popup
//         /*an items array that will get passed to the popup*/
//
//     $('.portfolio-project-item-popup-link').each(function(){
//         var $this = $(this),
//             index = $this.data('index');
//
//         $this.magnificPopup({
//         key: 'my-popup',
//         items: data,
//         index: index,
//         type: 'inline',
//         inline: {
//         // Define markup. Class names should match key names.
//             markup: '<div class="portfolio-popup-project-item"><div class="mfp-close"></div>'+
//                         '<div class="portfolio-popup-project-item-content" >'+
//                             '<h3 class="project-item-content-title mfp-projectContentTitle"></h3>'+
//                             '<p class="project-item-content-text mfp-projectContentText"></p>'+
//                             '<p class="mfp-projectContentTypeText"></p>'+
//                         '</div>'+
//                         '<div class="mfp-projectImage"></div>'+
//                     '</div>'
//         },
//         disableOn: function() {
//             if( $(window).width() < 768 ) {
//                 return false;
//             }
//             return true;
//         },
//         gallery: {
//             arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
//             enabled:true,
//             preload: [0,2],
//         },
//             callbacks: {
//                 markupParse: function(template, values, item) {
//                     // optionally apply your own logic - modify "template" element based on data in "values"
//                     // console.log('Parsing:', template, values, item);
//                 },
//                 elementParse: function() {},
//                 buildControls: function() {
//                     // re-appends controls inside the main container
//                     this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
//                 }
//
//             }
//         });
//     });
//
//  var wow = new WOW({
//             offset:       100,          // default
//             mobile:       false       // default
//         })
//     wow.init();
// });
//
//
// // initialization google map
// function initMap() {
//     var myLatLng = {lat: 50.438387, lng: 30.390614};
//
//     var map = new google.maps.Map(document.getElementById('map'), {
//         zoom: 17,
//         center: {lat: 50.438657, lng: 30.390524}
//     });
//
//     var marker = new google.maps.Marker({
//         position: myLatLng,
//         map: map,
//         title: 'ул.Героев Космоса, 6-а'
//     });
// }
//
//
//
