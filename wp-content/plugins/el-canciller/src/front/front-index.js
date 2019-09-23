/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */

var $ = require("jquery");

var ajax = require('./components/likepost');

var utils = require('../utils/utils-index');


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

        $('.compartir .fa-twitter').click(function() {
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

        $('.compartir .fa-facebook-f').click(function() {
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

document.onreadystatechange = function() {
    if (document.readyState == "complete") {

        shareActions($);

        ajax.setAllLikes();

        ajax.likePost($);
        /*renderTemplate(() => {
            var loading = document.getElementsByClassName('loader');

            for (let loader of loading) {

                loader.style.display = 'none';
            }
        });*/
    }
};