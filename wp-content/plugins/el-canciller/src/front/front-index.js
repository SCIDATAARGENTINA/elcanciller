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

        $('.action-links .fa-twitter').click(function() {
            var tweetText = '"' + $(this).attr('data-text') + '"' + ' ' + 'desde @elcancillercom ';
            var tweetUrl = $(this).attr('data-link');
            console.log(tweetText);
            console.log(tweetUrl);
            var text = encodeURIComponent(tweetText);
            var shareUrl = 'https://twitter.com/intent/tweet?url=' + tweetUrl + '&text=' + text;
            var win = window.open(shareUrl, 'ShareOnTwitter', getWindowOptions());
            win.opener = null;
        });

        // facebook

    });
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