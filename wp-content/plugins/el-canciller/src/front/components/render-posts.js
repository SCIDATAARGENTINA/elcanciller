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

    let postRendered = document.createElement('div');
    let postDate = moment(post.date).fromNow();

    if (post.trending == 'si') {
        postRendered.classList.add('post-rendered', 'trending');
    } else {
        postRendered.classList.add('post-rendered');
    }


    postRendered.innerHTML += `<div class="rendered-img" style="background-image: url('')">
							<div class="hovered">
								<div class="action-links">
									<i class="fab fa-twitter"></i>
									<i class="fab fa-facebook-f"></i>
									<a href="${post.link}"><i class="fas fa-sign-out-alt"></i></a>
									<i class="fas fa-heart"></i>
								</div><!-- action-links -->
								<div class="post-data">
									<div class="post-category">
										<h4></h4>
									</div>
									<div class="post-title">
										<h3>${post.title}</h3>
										<span class="time-ago">${postDate}</span>
									</div>
								</div><!-- post-data -->
							</div><!-- hovered -->
						</div><!-- rendered-img -->`;

    console.log(postRendered);



};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');

        if (random == 1) {
            randomArr = utils.shuffle(postArr);

            for (let post of randomArr) {

                let template = +setTemplate(post);

            }

        } else {

            for (let post of postArr) {

                let template = +setTemplate(post);

            }

        }

    }

    console.log(postArr);


};


module.exports = {
    renderTemplate
};