/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

var moment = require('moment');

var api = require('../service/wordpressapi');

require('moment/locale/es');
moment.locale('es');

let setTemplate = (post) => {

    let postRendered = document.createElement('div');
    let postDate = moment(post.date).fromNow();
    let postCategory = '';
    let postCategoryColor = '#e7d117';
    let featuredImage = '';
    let postCategoryLink = '';
    let postCategorySlug = 'politica';
    let comments = 'No hay comentarios';
    let noComments = 'sin-comentarios';
    let comentariosTemplate = '';

    if (post.trending == 'si') {
        postRendered.classList.add('post-rendered', 'trending');
    } else {
        postRendered.classList.add('post-rendered');
    }

    if (post.show_author == 'si') {
        postRendered.classList.add('show-author');
    }

    if (post.comments[0]) {
        comments = post.comments;
        for (let comment of comments) {
            let comentarioTexto = comment.content.rendered;
            noComments = '';
            comentariosTemplate += `<div class="comentario">
                                                <span class="comment-author">
                                                    @${comment.author_name}
                                                </span>
                                                <span class="comment-text">
                                                    ${comentarioTexto}
                                                </span>
                                           </div><!-- comentario -->`;
        }
    } else {
        comentariosTemplate = `<div class="comentario">
                                                <span class="comment-text">
                                                    ${comments}
                                                </span>
                                           </div><!-- comentario -->`;
    }

    if (post.category[0]) {
        postCategory = post.category[0].name;
        postCategoryLink = post.category[0].link;
        postRendered.classList.add(post.category[0].slug);
        postCategorySlug = post.category[0].slug;
        if (post.category[0].acf.color) {
            postCategoryColor = post.category[0].acf.color;
        }
    }

    if (post.featuredMedia.full) {
        featuredImage = post.featuredMedia.full.source_url;
    }

    let templateContent = `<div class="rendered-img" style="background-image: url('${featuredImage}')">
                                <div class="hovered">
                                    <div class="action-links">
                                        <i class="fab fa-twitter" data-text="${post.title}" data-link="${post.link}"></i>
                                        <i class="fab fa-facebook-f"></i>
                                        <a href="${post.link}"><i class="fas fa-sign-out-alt"></i></a>
                                        <i class="fas fa-heart"></i>
                                    </div><!-- action-links -->
                                    <div class="post-data">
                                        <div class="post-title">
                                            <a href="${post.link}"><h3>${post.title}</h3></a>
                                            <span class="time-ago">${postDate}</span>
                                        </div>
                                    </div><!-- post-data -->
                                    <div class="post-category">
                                        <a href="${postCategoryLink}"><h4>${postCategory}</h4></a>
                                    </div>
                                </div><!-- hovered -->
                                <div class="render-author" style="background-color: ${postCategoryColor}">
                                    <span>Por: ${post.author.name}</span>
                                </div><!-- render author -->
                            </div><!-- rendered-img -->`;

    templateContent += `<div class="comentarios-noshare">
							<div class="comment-icon">
								<img src="http://142.93.24.13/wp-content/uploads/2019/07/comment-bubble.svg">
							</div>
                            <div class="comment-container">
                                <div class="comentarios ${noComments}">
                                     ${comentariosTemplate}
                                </div><!-- comentarios -->
							</div><!-- comment-container -->
                        </div><!-- comentarios-noshare -->`;
    if (post.category[0]) {
        templateContent += `<style>.${postCategorySlug}::before{background: ${postCategoryColor}}</style>`;
    }

    postRendered.innerHTML += templateContent;

    return postRendered;

};

let createPostArray = async(quantity, offset = 0) => {

    let postArray = [];

    let latestPosts = await api.getLatestPosts(quantity, offset);
    console.log(latestPosts);

    for (let post of latestPosts) {

        let postCategories = [];
        let postComments = [];
        let postFeaturedImg = [];

        if (post._embedded['wp:term']) {
            postCategories = post._embedded['wp:term']['0'];
        }

        if (post._embedded.replies) {
            postComments = post._embedded.replies[0];
        }

        if (post._embedded['wp:featuredmedia']) {
            postFeaturedImg = post._embedded['wp:featuredmedia'][0].media_details.sizes;
        }

        let postObject = {
            id: post.id,
            title: post.title.rendered,
            author: post._embedded.author[0],
            link: post.link,
            date: new Date(post.date),
            featuredMedia: postFeaturedImg,
            category: postCategories,
            comments: postComments,
            trending: post.acf.trending,
            show_author: post.acf.show_author
        };

        console.log(postObject);

        postArray.push(postObject);

    }

    return postArray;

};


module.exports = {
    createPostArray,
    setTemplate
};