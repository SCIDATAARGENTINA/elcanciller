jQuery(document).ready(function($) {

    let slider = $('.slider');

    slider.each(function() {
        let sliderId = $(this).attr('id');

        console.log($(this));

        let sliderInstance = new rSlider({
            target: $(this),
            values: ['1', '2', '3', '4', '5'],
            range: false,
            set: ['1'],
            tooltip: false,
            scale: true,
            onChange: function(vals) {
                $('.rs-pointer').append('<img id="emoticon" src="' + vals + '.png" style="width: 30px;height: 30px;margin-top: -5px;margin-left: -1px;">');
                $('.rs-pointer').empty();
                $('.rs-pointer').append('<img id="emoticon" src="' + vals + '.png" style="width: 30px;height: 30px;margin-top: -5px;margin-left: -1px;">');
            }
        });
    });
});