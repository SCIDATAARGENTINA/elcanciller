var $ = require("jquery");
var cjs = require("cookies-js");

let getPostData = (id) => {

    const url = `http://142.93.24.13/wp-json/wp/v2/posts/${id}`;

    const headers = {
        // tslint:disable-next-line:max-line-length
        //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'
    };

    return fetch(url, { headers }).then(data => data.json());

};

let setCookie = (cjs, id) => {

    let likedPosts = cjs.get('likedPosts');
    let arrIds = [];

    if (likedPosts) {

        arrIds = JSON.parse(likedPosts);
        arrIds.push(id);
        likedPosts = JSON.stringify(arrIds);
        cjs.set('likedPosts', likedPosts);

    } else {

        arrIds = [id];
        likedPosts = JSON.stringify(arrIds);
        cjs.set('likedPosts', likedPosts);

    }

};

let updateLikeData = (likeCount, id, url, $) => {
    $(document).ready(function() {

        $.ajax({
            url: url,
            type: 'POST',
            data: {
                action: 'ajax_call_count_likes',
                post_id: id,
                like_count: likeCount,
            },
            success: function(result) {
                console.log(result);
                setCookie(cjs, id);
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });

    });

};

export let likePost = ($) => {

    document.addEventListener('click', async function(event) {

        // If the clicked element doesn't have the right selector, bail
        if (!event.target.matches('.like')) return;

        // Don't follow the link
        event.preventDefault();

        let like = event.target;
        let id = like.getAttribute('data-id');
        let data = await getPostData(id);

        updateLikeData(parseInt(data.acf.likes), id, content_data.ajax_url, $);

    }, false);

};