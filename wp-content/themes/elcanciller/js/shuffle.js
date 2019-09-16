jQuery(function ($) { // use jQuery code inside this to avoid "$ is not defined" error
    $('.trending-post .shuffle').click(function () {
        var trendingPost = $('.trending-post');
        var button = $(this),
            data = {
                'action': 'shuffle',
            };


        $.ajax({ // you can also use $.post here
            url: shuffle_params.ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {

            },
            success: function (data) {
                console.log(data);
            },
            error: function (error) {
                console.log(`Error ${error}`);
            }
        });
    });
});