jQuery(function ($) { // use jQuery code inside this to avoid "$ is not defined" error
    $(document).on('click', '.trending-post .shuffle', function () {
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
                //trendingPost.css('opacity', '0').css('transform','translateX(20px)');
            },
            success: function (data) {
                trendingPost.html(data);
                //trendingPost.css('opacity', '1').css('transform', 'translateX(0px)');
            },
            error: function (error) {
                console.log(`Error ${error}`);
            }
        });
    });
});