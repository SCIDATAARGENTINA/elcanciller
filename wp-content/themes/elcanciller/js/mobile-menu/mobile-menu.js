jQuery(document).ready(function ($) {

    let handleMobileMenu = (thiz) => {

        if ($('.hamburger').hasClass('is-active')) {
            $('.hamburger').removeClass('is-active');
        }
        else {
            $('.hamburger').addClass('is-active');
        }

        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
        }
        else {
            $('body').addClass('lock-scroll');
        }
    }

    $('.hamburger').click(function(){
        handleMobileMenu();
    });
});