$(document).ready(function(){

  $('.hidden').css('display','none');

  $( "#filter button" ).each(function() {

    $(this).on("click", function(){

         var filter = $(this).attr('class');         

      if ( $(this).attr('class') == 'all' ) {
         $('.hidden').contents().appendTo('#posts').hide().show('slow');
         $( "#filter button" ).removeClass('active');
         $(this).addClass('active');
         $("#filter button").attr("disabled", false);
         $(this).attr("disabled", true);
      }
      else {
         $('.post').appendTo('.hidden');
         $('.hidden').contents().appendTo('#posts').hide().show('slow');
         $('.post:not(.' + filter + ')').appendTo('.hidden').hide('slow');
         $( "#filter button" ).removeClass('active');
         $(this).addClass('active');
         $("#filter button").attr("disabled", false);
         $(this).attr("disabled", true);
      };
      
      });

  });

});