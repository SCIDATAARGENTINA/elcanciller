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


    $(".carrousel").slick({
        dots: true,
        infinite: false,
        arrows: true,
        prevArrow: '<div class="prev-arrow"></div>',
        nextArrow: '<div class="next-arrow"></div>',
        appendArrows: '.carr-nav',
        appendDots: '.prev-arrow'
    });

    $('.prev-arrow').prepend('<img class="am-logo" src="http://142.93.24.13/wp-content/uploads/2019/06/cancilleramlogo.svg">');

    var dots = $('.slick-dots').children();

    var dotsWidth = $('.slick-dots li').width();

    var dotsCount = dots.length;

    var slideCount;

    console.log(dotsCount);

    $('.carrousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        var maxDots = 4;
        if (nextSlide >= maxDots - 1) {
            $('.slick-dots li').css('transform', 'translateX(' + dotsWidth + 'px)');
        }
        console.log(slick.slideCount);
        console.log(currentSlide);
        console.log(nextSlide);
    });
});