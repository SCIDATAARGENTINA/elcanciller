var $ = require("jquery");

function getPostData(id, url) {
    var connection = url + '/wp-json/wp/v2/posts/' + id;
    return $.get(connection);
}

function addLike(likeCount, id, $) {
    $.ajax({
        url: content_data.ajax_url,
        type: 'POST',
        data: {
            action: 'ajax_call_count_satisfaccion',
            post_id: id,
            like_count: likeCount,
        },
        success: function(result) {
            console.log(result);
            setClapCookie(id);
        },
        error: function(errorThrown) {
            console.log(errorThrown);
        }
    });

}

function setClapCookie(id) {
    Cookies.set('clapped' + id, '1', { expires: 214748 });
}

function checkClapCookie(id) {
    var val = Cookies.get('clapped' + id);
    return val;
}

function validateClapCookie(val) {
    if (val == 1) {
        $('.clap').addClass('clapped');
        $('.clap-count').addClass('added');
        $('.share-bar').css('opacity', '1');
    } else {
        $('.share-bar').css('opacity', '1');
    }
}

function likePost() {

    var url = 'https://socialnews.com.ar';

    var id = $('article').attr('data-post-id');

    var clap = $('.like');

    validateClapCookie(checkClapCookie(id));

    clap.click(function() {
        if (checkClapCookie(id) != 1) {
            getPostData(id, url).done(function(data) {
                var likeCount = data.acf.likes;
                addLike(likeCount, id, url);
                $(this).addClass('liked');
            });
        } else {
            return false;
        }
    });

}


module.exports = {
    likePost
};