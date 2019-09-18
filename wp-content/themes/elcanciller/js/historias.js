jQuery(function ($) { // use jQuery code inside this to avoid "$ is not defined" error
    $(document).on('click', '.stories', function () {
        var historiasContainer = '<div class="historias-container"><div class="historias"></div></div>';

        var data = {
                'action': 'historia',
            };


        $.ajax({ // you can also use $.post here
            url: shuffle_params.ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                $('body').append(historiasContainer);
            },
            success: function (data) {
                $('.historias').append(data);
            },
            error: function (error) {
                console.log(`Error ${error}`);
            }
        });
    });
});