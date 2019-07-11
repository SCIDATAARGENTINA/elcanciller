jQuery(document).ready(function($) {

    const Url = 'https://api.darksky.net/forecast/f7a0551eab3dced527a3626f5efd3c92/-34.6036844,-58.3815591?lang=es&units=si';
    $.ajax({
            url: Url,
            headers: { 'Access-Control-Allow-Origin': '*' },
            type: "GET",
            crossDomain: true,
            dataType: 'jsonp',
            success: function(result) {
                var skycons = new Skycons({ "color": "#b29f93" });
                skycons.add("icon1", result.currently.icon);
                skycons.play();



                $('.info-tiempo').append('<span class="temp">' + Math.round(result.currently.temperature) + '°</span>');

            },
            error: function(error) {
                console.log(`Error ${error}`);
            }
        }) // end ajax

    /* SLICK CARROUSEL CANCILELR AM*/
    $(".carrousel").slick({
        dots: true,
        infinite: true,
        arrows: true,
        prevArrow: '<div class="prev-arrow"></div>',
        nextArrow: '<div class="next-arrow"></div>',
        appendArrows: '.carr-nav',
        appendDots: '.prev-arrow'
    });

    $('.prev-arrow').prepend('<img class="am-logo" src="http://142.93.24.13/wp-content/uploads/2019/06/cancilleramlogo.svg">');

    var dotsWidth = 16;

    var dotsWidthTotal = 0;

    $('.carrousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        var maxDots = 4;
        if (nextSlide > currentSlide && nextSlide <= slick.slideCount - (maxDots - 2)) {
            if (nextSlide >= maxDots - 1) {
                dotsWidthTotal = dotsWidthTotal + dotsWidth;
                $('.slick-dots li').css('transform', 'translateX(-' + dotsWidthTotal + 'px)');
            }
        }
        if (nextSlide < currentSlide) {
            if (nextSlide >= maxDots - 1) {
                dotsWidthTotal = dotsWidthTotal - dotsWidth;
                $('.slick-dots li').css('transform', 'translateX(-' + dotsWidthTotal + 'px)');
            } else {
                $('.slick-dots li').css('transform', 'translateX(0px)');
                dotsWidthTotal = 0;
            }
        }
        if (nextSlide == 0) {
            $('.slick-dots li').css('transform', 'translateX(0px)');
            dotsWidthTotal = 0;
        }
        if (nextSlide == 9) {
            dotsWidthTotal = dotsWidth * (slick.slideCount - maxDots);
            $('.slick-dots li').css('transform', 'translateX(-' + dotsWidthTotal + 'px)');
        }
    });

    /* SLICK CARROUSEL CANCILELR AM END*/

    /*MAGINIFIC POPUP VIDEOS*/

    $('.popup-video').each(function() {
        var id = $(this).attr('data-id');
        var popupContent = $('#video-popup-' + id + '').html();
        $(this).magnificPopup({
            items: {
                src: popupContent,
                type: 'inline'
            },
            // Delay in milliseconds before popup is removed
            removalDelay: 300,

            // Class that is added to popup wrapper and background
            // make it unique to apply your CSS animations just to this exact popup
            mainClass: 'mfp-fade',
            closeBtnInside: true,
            showCloseBtn: true
        });
    });

    /*MAGINIFIC POPUP VIDEOS END*/

    /*SLICK SLIDER PLACAS*/

    $('.slider-placa-imagen').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: '.slider-placa-titulo'
    });
    $('.slider-placa-titulo').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.slider-placa-imagen',
        dots: false,
        fade: true
    });

});