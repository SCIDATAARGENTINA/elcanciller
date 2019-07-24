let getPostData = (id) => {

    const url = `http://142.93.24.13/wp-json/wp/v2/posts/${id}`;

    const headers = {
        // tslint:disable-next-line:max-line-length
        //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'
    };

    return fetch(url, { headers }).then(data => data.json());

};

let updateLikeData = (likeCount, id, url) => {

    //action to handle in WP add_action("wp_ajax_my_user_vote", "my_user_vote");
    let action = "ajax_call_count_likes";

    let data = {
        action: action,
        post_id: id,
        like_count: likeCount
    };
    console.log(data);

    let json = JSON.stringify(data);

    let xhr = new XMLHttpRequest();

    xhr.open("POST", url, true);
    xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');

    xhr.onreadystatechange = function() {
        if (this.readyState != 4) return;

        console.log(this.responseText);
    };

    xhr.send(json);
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

    document.addEventListener('click', async function(event) {

        // If the clicked element doesn't have the right selector, bail
        if (!event.target.matches('.like')) return;

        // Don't follow the link
        event.preventDefault();

        let like = event.target;
        let id = like.getAttribute('data-id');
        let data = await getPostData(id);

        let likeCount = data.acf.likes + 1;

        updateLikeData(likeCount, id, content_data.ajax_url);

    }, false);

};


module.exports = {
    likePost
};