jQuery(document).ready(function($) {

    let slider = $('.slider');

    slider.each(function() {
        let sliderId = $(this).attr('id');

        noUiSlider.create($(this)[0], {
            start: [0],
            step: 1,
            behaviour: 'tap-drag',
            connect: true,
            //cssPrefix: 'reaction-', // defaults to 'noUi-',
            range: {
                'min': 0,
                'max': 5
            },
            pips: {
                mode: 'steps',
                density: 3
            }


        });

        var slide = $(this);

        $(this)[0].noUiSlider.on('update', function(values, handle) {


            slide.find('.noUi-handle').css('background-image', 'http://142.93.24.13/wp-content/themes/elcanciller/js/emoticon-slider/emoticon-' + parseInt(values) + '.svg');

            console.log(parseInt(values), handle);
        });

    });
});