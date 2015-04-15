$(document).ready(function(){

  $('.main-menu > li > ul > li:has(ul)').addClass("has-sub");

  $('.main-menu > li > ul > li > a').click(function() {
    var checkElement = $(this).next();
    
    $('.main-menu > li > ul > li').removeClass('active');
    $(this).closest('li').addClass('active');	
    
    
    if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
      $(this).closest('li').removeClass('active');
      checkElement.slideUp('normal');
    }
    
    if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
      $('.main-menu > li > ul > li:visible').slideUp('normal');
      checkElement.slideDown('normal');
    }
    
    if (checkElement.is('ul')) {
      return false;
    } else {
      return true;	
    }		
  });




});