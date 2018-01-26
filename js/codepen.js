$( document ).ready(function() {
    //set background image to data-bg from the .content-item
    $('.content-item').css('background', function () { 
      return "url(" + $(this).attr('data-bg') + ")"
    });
});