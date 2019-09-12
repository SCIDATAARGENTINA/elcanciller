jQuery(document).ready(function ($) {

    function lockScroll() {
        if ($('body').hasClass('lock-scroll')) {
            $('body').removeClass('lock-scroll');
        }
        else {
            $('body').addClass('lock-scroll');
        }
    }

});