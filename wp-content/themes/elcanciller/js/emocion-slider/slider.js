jQuery(document).ready(function($) {

    let getSlider = (sliderId) => {

        return $.get(`http://142.93.24.13/wp-json/wp/v2/posts/${sliderId}`);

    };

    let setCookie = (sliderId, interaccionId, val) => {

        let sliderAccionado = Cookies.get('sliderAccionado');
        let arrIds = [];
        let interaccionObj = {
            interaccionId,
            sliderId,
            val
        }
        var createNew = true;

        if (sliderAccionado) {

            arrIds = JSON.parse(sliderAccionado);
            console.log(arrIds);
            console.log(interaccionObj);
            console.log(sliderId);

            let findSlider = arrIds.findIndex(obj => obj.sliderId === sliderId);

            console.log(findSlider);

            if (findSlider > -1 && typeof arrIds[findSlider].id !== "undefined"){

                console.log('entramo');

                arrIds.splice(findSlider, 1);

                interaccionId = arrIds[findSlider].id;

                interaccionObj = {
                    interaccionId,
                    sliderId,
                    val
                }

                arrIds.push(interaccionObj);

                createNew = false;

            }else{
                arrIds.push(interaccionObj)
            }

            sliderAccionado = JSON.stringify(arrIds);
            Cookies.set('sliderAccionado', sliderAccionado, { expires: Infinity });

        } else {

            arrIds = [interaccionObj];
            sliderAccionado = JSON.stringify(arrIds);
            Cookies.set('sliderAccionado', sliderAccionado, { expires: Infinity });

        }

        return setCookieResponse = {
            createNew,
            interaccionId
        };

    };

    let getCookie = (acfData) => {

    }

    let createSlideData = (acfData, sliderId, val) => {

        let interaccionId;
        let interaccionVal = val;

        if (acfData.interacciones == null) {
            interaccionId = 1;
        }else{
            interaccionId = (parseInt(acfData.interacciones[acfData.interacciones.length - 1].id));
        }

        cookieResponse = setCookie(sliderId, interaccionId, interaccionVal);
        console.log(cookieResponse.createNew);

        let data = {
            action: 'slider',
            interaccionId: cookieResponse.interaccionId,
            interaccionVal,
            sliderId,
            createNew: cookieResponse.createNew
        };

        return data;

    };

    let slideUpdater = (sliderId, val) => {
        
        let url = slider_params.ajaxurl;

        getSlider(sliderId).done(function(data){

            let updateData = createSlideData(data.acf, sliderId, val);

            $.ajax({
                url: url,
                type: 'POST',
                data: updateData,
                success: function (result) {
                    console.log(result);
                },
                error: function (errorThrown) {
                    console.log(errorThrown);
                }
            })// end ajax

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

                slideUpdater(sliderId, val);

            }, 5000)

        });

    });
});