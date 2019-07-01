/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

var moment = require('moment');

var utils = require('../../utils/utils-index');

require('moment/locale/es');
moment.locale('es');

let setTemplate = (post) => {

    console.log(post);
    let postRendered = document.createElement('div');
    let postDate = moment(post.date).fromNow();
    let postCategory = '';
    let featuredImage = '';
    let comments = ['No hay comentarios'];
    let comentariosRendered = document.createElement('div').classList.add('comentarios');

    if (post.trending == 'si') {
        postRendered.classList.add('post-rendered', 'trending');
    } else {
        postRendered.classList.add('post-rendered');
    }

    if (post.comments) {
        comments = post.comments;
        for (let comment of comments) {
            comentariosRendered.innerHTML += `<div class="comentario">
                                                <span class="comment-author">
                                                    ${comment.author_name}
                                                </span>
                                                <span class="comment-text">
                                                    ${comment.content.rendered}
                                                </span>
                                           </div><!-- comentario -->`;
        }
    } else {
        comentariosRendered.innerHTML += `<div class="comentario">
                                                <span class="comment-text">
                                                    ${comments}
                                                </span>
                                           </div><!-- comentario -->`;
    }

    if (post.category[0]) {
        postCategory = post.category[0].name;
    }

    if (post.featuredMedia.full) {
        featuredImage = post.featuredMedia.medium_large.source_url;
    }

    console.log(comentariosRendered);


    postRendered.innerHTML += `<div class="rendered-img" style="background-image: url('${featuredImage}')">
                                    <div class="hovered">
                                        <div class="action-links">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-facebook-f"></i>
                                            <a href="${post.link}"><i class="fas fa-sign-out-alt"></i></a>
                                            <i class="fas fa-heart"></i>
                                        </div><!-- action-links -->
                                        <div class="post-data">
                                            <div class="post-title">
                                                <h3>${post.title}</h3>
                                                <span class="time-ago">${postDate}</span>
                                            </div>
                                        </div><!-- post-data -->
                                        <div class="post-category">
                                            <h4>${postCategory}</h4>
                                        </div>
                                    </div><!-- hovered -->
                                </div><!-- rendered-img -->`;

    postRendered.innerHTML += `<div class="comentarios-noshare">
							<div class="comment-icon">
								<i class="far fa-comment-dots"></i>
							</div>
							<div class="comment-container">
								${comentariosRendered}
							</div><!-- comment-container -->
                        </div><!-- comentarios-noshare -->`;

    return postRendered;

};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');
        let quantity = node.getAttribute('data-quantity');
        let i = 0;

        if (random == 1) {
            randomArr = utils.shuffle(postArr);

            for (let post of randomArr) {
                if (i < quantity) {
                    node.appendChild(setTemplate(post));
                }
                i++;
                console.log(i);
            }

        } else {

            for (let post of postArr) {
                if (i < quantity) {
                    node.appendChild(setTemplate(post));
                }
                i++;
                console.log(i);
            }

        }

    }

};


module.exports = {
    renderTemplate
};