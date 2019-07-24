let getPostData = (id) => {

    const url = `http://142.93.24.13/wp-json/wp/v2/posts/${id}`;

    const headers = {
        // tslint:disable-next-line:max-line-length
        //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'
    };

    return fetch(url, { headers }).then(data => data.json());

};

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

let likePost = () => {

    var url = 'http://142.93.24.13/';

    var like = querySelectorAll('.like');

    document.addEventListener('click', function(event) {

        // If the clicked element doesn't have the right selector, bail
        if (!event.target.matches('.like')) return;

        // Don't follow the link
        event.preventDefault();

        // Log the clicked element in the console
        console.log(event.target);

    }, false);

};


module.exports = {
    likePost
};