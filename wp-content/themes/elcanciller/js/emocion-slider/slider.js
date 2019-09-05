jQuery(document).ready(function($) {

    let getSlider = (sliderId) => {

        return $.get(`http://142.93.24.13/wp-json/wp/v2/posts/${sliderId}`);

    };

    let createSlideData = () => {

        

        let data = {
            action: 'slider',
        };

        return data;

    };

    let slideUpdater = (sliderId) => {
        
        let url = encuestas_params.ajaxurl;

        getSlider(sliderId).done(function(data){

            console.log(data);

            let updateData = createSlideData();

           /* $.ajax({
                url: url,
                type: 'POST',
                data: updateData,
                success: function (result) {
                    votoRealizado(idEncuesta);
                },
                error: function (errorThrown) {

                }
            })// end ajax*/

        })// end done

    };// end sliderUpdater

    let slider = $('.slider');

    slider.each(function() {

        noUiSlider.create($(this)[0], {
            start: [0],
            step: 1,
            behaviour: 'tap-drag',
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

            if (val == 2) {
                connectUi.css('box-shadow', 'rgba(208, 35, 26, 0.61) 11px 0px 5px 5px inset');
            } else if (val == 5) {
                connectUi.css('box-shadow', 'inset 5px 0px 6px 4px rgba(3, 199, 0, 0.9)');
            } else {
                connectUi.css('box-shadow', 'inset 5px 0px 3px 4px rgba(231, 209, 23, 0.6)');
            }

            console.log(sliderId);

            console.log(val, handle);
        });

        $(this)[0].noUiSlider.on('change', function (val) {

            var timeout;

            val = parseInt(val);

            let sliderId = slide.attr('id');

            sliderId = sliderId.slice(7);

            if (timeout) {
                clearTimeout(timeout);
            }

            var timeout = setTimeout(function () { // Updates values after 5 sec

                slideUpdater(sliderId);

            }, 5000)

        });

    });
});