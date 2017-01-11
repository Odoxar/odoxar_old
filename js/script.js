
"use strict";
 $(".contact").fancybox();
 $(document).ready(function() {
     $(".work-gallery-link").fancybox({
         arrows: true,
         mouseWheel: false
     });

 });

 function sendContact() {
     var valid;
     valid = validateContact();
     if(valid) {
         jQuery.ajax({
             url: "https://odoxar.github.io/contact_mail.php",
             data:'userName='+$("#userName").val()+'&userEmail='+
             $("#userEmail").val()+'&subject='+
             $("#subject").val()+'&content='+
             $(content).val(),
             type: "POST",
             success:function(data){
                 $("#mail-status").html(data);
             },
             error:function (){}
         });
     }
 }

 function validateContact() {
     var valid = true;
     $(".demoInputBox").css('background-color','');
     $(".info").html('');
     if(!$("#userName").val()) {
         $("#userName-info").html("(required)");
         $("#userName").css('background-color','#FFFFDF');
         valid = false;
     }
     if(!$("#userEmail").val()) {
         $("#userEmail-info").html("(required)");
         $("#userEmail").css('background-color','#FFFFDF');
         valid = false;
     }
     if(!$("#userEmail").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
         $("#userEmail-info").html("(invalid)");
         $("#userEmail").css('background-color','#FFFFDF');
         valid = false;
     }
     if(!$("#subject").val()) {
         $("#subject-info").html("(required)");
         $("#subject").css('background-color','#FFFFDF');
         valid = false;
     }
     if(!$("#content").val()) {
         $("#content-info").html("(required)");
         $("#content").css('background-color','#FFFFDF');
         valid = false;
     }
     return valid;
 }

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
