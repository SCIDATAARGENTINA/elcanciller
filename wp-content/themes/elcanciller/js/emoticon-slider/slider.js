jQuery(document).ready(function($) {

    let slider = $('.slider');

    slider.each(function() {
        let sliderId = $(this).attr('id');

        console.log($(this));

        let sliderInstance = new rSlider({
            target: $(this)[0],
            values: ['1', '2', '3', '4', '5'],
            range: false,
            set: ['1'],
            tooltip: false,
            scale: true,
            onChange: function(vals) {
                console.log(vals);
                $('#slider-' + sliderId).find('.rs-pointer').css('opacity', '0');
                $(this).find('.rs-pointer').empty();
                $(this).find('.rs-pointer').append('<img id="emoticon" src="http://142.93.24.13/wp-content/themes/elcanciller/js/emoticon-slider/' + vals + '.png" style="width: 30px;height: 30px;margin-top: -5px;margin-left: -1px;">');
                $(this).find('.rs-pointer').css('opacity', '1');
            }
        });
    });
});