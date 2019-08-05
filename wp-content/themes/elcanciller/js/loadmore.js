jQuery(function($) { // use jQuery code inside this to avoid "$ is not defined" error
    $('.loadmore').click(function() {
        console.log('hola');

        var button = $(this),
            data = {
                'action': 'loadmore',
                'query': loadmore_params.posts, // that's how we get params from wp_localize_script() function
                'page': loadmore_params.current_page
            };

        console.log(data);

        $.ajax({ // you can also use $.post here
            url: loadmore_params.ajaxurl, // AJAX handler
            data: data,
            type: 'POST',
            beforeSend: function(xhr) {
                button.text('Cargando...'); // change the button text, you can also add a preloader image
            },
            success: function(data) {
                if (data) {
                    button.text('Cargar más...').prev().before(data); // insert new posts
                    loadmore_params.current_page++;

                    if (loadmore_params.current_page == loadmore_params.max_page)
                        button.remove(); // if last page, remove the button

                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});