/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

var $ = require("jquery");

import { createPostArray, setTemplate } from './components/render-posts';

import { getData, getCategoriesById, getLatestPosts, getComments, getTagsById, getCategories, getTags } from './service/wordpressapi';

var utils = require('../utils/utils-index');

let getPostData = (id) => {

    const url = `http://142.93.24.13/wp-json/wp/v2/posts/${id}`;

    const headers = {
        // tslint:disable-next-line:max-line-length
        //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'
    };

    return fetch(url, { headers }).then(data => data.json());

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
            },
            error: function(errorThrown) {
                console.log(errorThrown);
            }
        });

        //action to handle in WP add_action("wp_ajax_my_user_vote", "my_user_vote");
        /*let action = "ajax_call_count_likes";

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
        xhr.setRequestHeader('Access-Control-Allow-Headers', '*');
        xhr.setRequestHeader('Access-Control-Allow-Origin', '*');

        xhr.onreadystatechange = function () {
            if (this.readyState != 4) return;

            console.log(this.responseText);
        };

        xhr.send(data);*/

    });

};

let likePost = ($) => {

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

let shareActions = ($) => {
    $(document).ready(function() {

        /* SHARE ON REDES */

        var getWindowOptions = function() {
            var width = 500;
            var height = 350;
            var left = (window.innerWidth / 2) - (width / 2);
            var top = (window.innerHeight / 2) - (height / 2);

            return [
                'resizable,scrollbars,status',
                'height=' + height,
                'width=' + width,
                'left=' + left,
                'top=' + top,
            ].join();
        };

        // twitter
        $('.share-container .fa-twitter').click(function() {
            var tweetText = '"' + $(this).attr('data-text') + '"' + ' ' + 'desde @elcancillercom ';
            var tweetUrl = $(this).attr('data-link');
            var text = encodeURIComponent(tweetText);
            var shareUrl = 'https://twitter.com/intent/tweet?url=' + tweetUrl + '&text=' + text;
            var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
            win.opener = null;
        });

        $('.action-links .fa-twitter').click(function() {
            var tweetText = '"' + $(this).attr('data-text') + '"' + ' ' + 'desde @elcancillercom ';
            var tweetUrl = $(this).attr('data-link');
            var text = encodeURIComponent(tweetText);
            var shareUrl = 'https://twitter.com/intent/tweet?url=' + tweetUrl + '&text=' + text;
            var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
            win.opener = null;
        });

        // facebook

        $('.action-links .fa-facebook-f').click(function() {
            var fbTtitle = $(this).attr('data-title');
            var fbUrl = $(this).attr('data-link');
            var fbImg = $(this).attr('data-img');
            var fbText = $.parseHTML($(this).attr('data-text'));
            var title = encodeURIComponent(fbTtitle);
            var text = encodeURIComponent(fbText[0].innerText);
            var shareUrl = 'https://www.facebook.com/dialog/feed?app_id=1389892087910588&redirect_uri=https://elcanciller.com&link=' + fbUrl + '&picture=' + fbImg + '&caption=' + title + '&description=' + text;
            var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
            win.opener = null;
        });

        $('.share-container .fa-facebook-f').click(function() {
            var fbTtitle = $(this).attr('data-title');
            var fbUrl = $(this).attr('data-link');
            var fbImg = $(this).attr('data-img');
            var fbText = $.parseHTML($(this).attr('data-text'));
            var title = encodeURIComponent(fbTtitle);
            var text = encodeURIComponent(fbText[0].innerText);
            var shareUrl = 'https://www.facebook.com/dialog/feed?app_id=1389892087910588&redirect_uri=https://elcanciller.com&link=' + fbUrl + '&picture=' + fbImg + '&caption=' + title + '&description=' + text;
            var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
            win.opener = null;
        });

    });
};

let renderTemplate = async(rendered) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');
        let quantity = node.getAttribute('data-quantity');
        let offset = 0;
        if (node.getAttribute('data-offset')) {
            offset = node.getAttribute('data-offset');
        }
        let postArray = await createPostArray(quantity, offset);

        if (random == 1) {
            randomArr = utils.shuffle(postArray);

            for (let post of randomArr) {

                node.appendChild(setTemplate(post));
            }

        } else {

            for (let post of postArray) {

                node.appendChild(setTemplate(post));

            }

            rendered();

        }

    }

    shareActions($);

    likePost($);

};

document.onreadystatechange = function() {
    if (document.readyState == "complete") {
        renderTemplate(() => {
            var loading = document.getElementsByClassName('loader');

            for (let loader of loading) {

                loader.style.display = 'none';
            }
        });
    }
};