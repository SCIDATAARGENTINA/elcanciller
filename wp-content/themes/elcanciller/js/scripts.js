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


    $(".cancilleram").slick({
        dots: true,
        infinite: false,
        arrows: true
    });


});