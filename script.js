$(document).ready(function () {
    'use strict';
    
    var top = 100;
    
    $(window).on('scroll', function () {
    if ($(window).scrollTop() >= top) {
        $('header').css({background: 'lightgray'});
        $('#nav li a').css({color: 'black'});
        $('header').addClass('header-bg');
        $('#mobile-nav').css({color: 'black'});
    }
    else {
        $('header').css({background: 'transparent'});
        $('header').addClass('header-bg');
        $('#nav li a').css({color: 'white'});
        $('#mobile-nav').css({color: 'white'});
    }
    });
    
});