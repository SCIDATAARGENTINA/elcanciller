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
                density: 1
            }
        });

    });
});