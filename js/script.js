
 "use strict";
 $(".contact").fancybox();
 $(document).ready(function() {
     $(".work-gallery-link").fancybox({
         arrows: true,
         mouseWheel: false
     });

 });

 $(function() {

     // Get the form.
     var form = $('#ajax-contact');

     // Get the messages div.
     var formMessages = $('#form-messages');

     // Set up an event listener for the contact form.
     $(form).submit(function(e) {
         // Stop the browser from submitting the form.
         e.preventDefault();

         // Serialize the form data.
         var formData = $(form).serialize();

         // Submit the form using AJAX.
         $.ajax({
             type: 'POST',
             url: $(form).attr('action'),
             data: formData
         })
             .done(function(response) {
                 // Make sure that the formMessages div has the 'success' class.
                 $(formMessages).removeClass('error');
                 $(formMessages).addClass('success');

                 // Set the message text.
                 $(formMessages).text(response);

                 // Clear the form.
                 $('#name').val('');
                 $('#email').val('');
                 $('#message').val('');
             })
             .fail(function(data) {
                 // Make sure that the formMessages div has the 'error' class.
                 $(formMessages).removeClass('success');
                 $(formMessages).addClass('error');

                 // Set the message text.
                 if (data.responseText !== '') {
                     $(formMessages).text(data.responseText);
                 } else {
                     $(formMessages).text('Oops! An error occured and your message could not be sent.');
                 }
             });

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
