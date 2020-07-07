$(document).ready(function() {
    var altura = $('nav').offset().top;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').remove.Class('shrink');
            $('nav').addClass('top');
        }
    })
});