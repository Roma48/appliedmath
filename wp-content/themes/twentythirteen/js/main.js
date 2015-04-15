$(document).ready(function() {
    //$("li.menu-item-has-children .sub-menu li.menu-item-has-children .sub-menu").hide();
    $(".nav-menu > li.menu-item-has-children").click(function() { return false});
    $(".nav-menu > li.menu-item-has-children ul li.menu-item-has-children").click(function() { return false});
    $(".main-menu > li.menu-item-has-children ul li.menu-item-has-children").click(function() { return false});


    $("ul.main-menu > li.menu-item-has-children > a").click(function() { return false });


    //$("li.menu-item-has-children .sub-menu li.menu-item-has-children a").click(function() { $(this).children("ul.sub-menu").slideToggle("slow"); });

    $('.nav-menu > li ul').click(function(event){event.stopPropagation();}).filter(':not(:first)').hide();
    $('.nav-menu > li').click(function(){
        var selfClick = $(this).find('ul:first').is(':visible'); // (1)
        if(!selfClick) {  //(2)
            $(this).parent().find('> li ul:visible').slideToggle();}
        $(this).find('ul:first').stop(true, true).slideToggle();  // (3)
    });

    $('.nav-menu > li ul li ul').click(function(event){event.stopPropagation();}).filter(':not(:first)').hide();
    $('.nav-menu > li ul li').click(function(){
        var selfClick = $(this).find('ul:first').is(':visible'); // (1)
        if(!selfClick) {  //(2)
            $(this).parent().find('> li ul:visible').slideToggle();}
        $(this).find('ul:first').stop(true, true).slideToggle();  // (3)
    });

    $('.main-menu > li ul li ul').click(function(event){event.stopPropagation();}).filter(':not(:first)').hide();
    $('.main-menu > li ul li').click(function(){
        var selfClick = $(this).find('ul:first').is(':visible'); // (1)
        if(!selfClick) {  //(2)
            $(this).parent().find('> li ul:visible').slideToggle();}
        $(this).find('ul:first').stop(true, true).slideToggle();  // (3)
    });




});