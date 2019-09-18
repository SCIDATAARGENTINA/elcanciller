jQuery(function ($) { // use jQuery code inside this to avoid "$ is not defined" error
    $(document).on('click', '.stories', function () {
        var historiasContainer = '<div class="historias-container slide-in-blurred-tl"><div class="historias"></div></div>';

        var data = {
                'action': 'historia',
            };


        $.ajax({ // you can also use $.post here
            url: historias_params.ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                $('body').append(historiasContainer);
            },
            success: function (data) {
                console.log(data);
                $('.historias').append(data);
                $('.historias').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                });
            },
            error: function (error) {
                console.log(`Error ${error}`);
            }
        });
    });
});