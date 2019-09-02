jQuery(document).ready(function($) {

    let slider = $('.slider');

    slider.each(function() {
        let sliderId = $(this).attr('id');

        noUiSlider.create($(this)[0], {
            start: [0],
            step: 1,
            behaviour: 'tap-drag',
            connect: true,
            range: {
                'min': 0,
                'max': 5
            },
            pips: {
                mode: 'steps',
                density: 3
            }


        });

        $(this)[0].noUiSlider.on('update', function(values, handle) {

            console.log($(this)[0].find('.noUi-handle'));

            $(this).find('.noUi-handle').css('background-image', 'http://142.93.24.13/wp-content/themes/elcanciller/js/emoticon-slider/emoticon-' + parseInt(values) + '.svg');

            console.log(parseInt(values), handle);
        });

    });
});