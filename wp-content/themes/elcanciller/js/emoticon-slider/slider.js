jQuery(document).ready(function($) {

    let slider = $('.slider');

    slider.each(function() {
        let sliderId = $(this).attr('id');

        noUiSlider.create($(this)[0], {
            start: [0],
            step: 10,
            behaviour: 'tap-drag',
            connect: true,
            range: {
                'min': 0,
                'max': 5
            }
        });

    });
});