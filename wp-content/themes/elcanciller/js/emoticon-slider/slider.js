jQuery(document).ready(function($) {

    let slider = $('.slider');

    slider.each(function() {
        let sliderId = $(this).attr('id');

        noUiSlider.create($(this)[0], {
            start: [0],
            step: 1,
            behaviour: 'tap-drag',
            //cssPrefix: 'reaction-', // defaults to 'noUi-',
            connect: 'lower',
            range: {
                'min': 1,
                'max': 5
            }

        });

        var slide = $(this);

        $(this)[0].noUiSlider.on('update', function(val, handle) {

            val = parseInt(val);

            let handleUi = slide.find('.noUi-handle');

            handleUi.css('background-image', 'url(http://142.93.24.13/wp-content/uploads/2019/09/emoticon-' + val + '.svg)');

            let connectUi = slide.find('.noUi-connect');

            if (val == 5) {
                connectUi.css('box-shadow', 'inset 5px 0px 4px 4px rgba(231, 209, 23, 0.9) !important');
            } else {
                connectUi.css('box-shadow', 'inset 5px 0px 3px 4px rgba(231, 209, 23, 0.6) !important');
            }

            console.log(val, handle);
        });

    });
});