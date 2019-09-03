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
                'min': 1,
                'max': 5
            }

        });

        var slide = $(this);

        $(this)[0].noUiSlider.on('update', function(values, handle) {


            let handleUi = slide.find('.noUi-handle').css('background-image', 'http://142.93.24.13/wp-content/themes/elcanciller/js/emoticon-slider/emoticon-' + parseInt(values) + '.svg');

            handleUi.css('background-image', 'url(http://142.93.24.13/wp-content/uploads/2019/09/emoticon-' + parseInt(values) + '.svg)');

            console.log(parseInt(values), handle);
        });

    });
});