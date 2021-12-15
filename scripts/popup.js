$(document).ready(function() {
    $('a.reg').click( function(event){
      event.preventDefault();
      $('#overlay').fadeIn(297,	function(){
        $('#pop-up') 
        .css('display', 'block')
        .animate({opacity: 1}, 198);
      });
    });
  
    $('#close, #overlay').click( function(){
      $('#pop-up').animate({opacity: 0}, 198, function(){
        $(this).css('display', 'none');
        $('#overlay').fadeOut(297);
      });
    });
  });

  $(document).ready(function() {
    $('button.send').click( function(event){
      event.preventDefault();
      $('#overlay').fadeIn(297,	function(){
        $('#pop-up-send') 
        .css('display', 'block')
        .animate({opacity: 1}, 198);
      });
    });
  
    $('#close, #overlay').click( function(){
      $('#pop-up-send').animate({opacity: 0}, 198, function(){
        $(this).css('display', 'none');
        $('#overlay').fadeOut(297);
      });
    });
  });

 

  // $(document).ready(function() {
  //   $('a.delete').click( function(event){
  //     event.preventDefault();
  //     $('#overlay').fadeIn(297,	function(){
  //       $('#pop-up-delete') 
  //       .css('display', 'block')
  //       .animate({opacity: 1}, 198);
  //     });
  //   });
  
  //   $('#close, #overlay').click( function(){
  //     $('#pop-up-delete').animate({opacity: 0}, 198, function(){
  //       $(this).css('display', 'none');
  //       $('#overlay').fadeOut(297);
  //     });
  //   });
  // });
  $(document).ready(function() {
    $('button.service-btn').click( function(event){
      event.preventDefault();
      $('#overlay').fadeIn(297,	function(){
        $('#pop-up-service') 
        .css('display', 'block')
        .animate({opacity: 1}, 198);
      });
    });
  
    $('#close, #overlay').click( function(){
      $('#pop-up-service').animate({opacity: 0}, 198, function(){
        $(this).css('display', 'none');
        $('#overlay').fadeOut(297);
      });
    });
  });