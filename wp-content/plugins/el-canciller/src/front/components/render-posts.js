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

    if (post.trending == 'si') {
        postRendered.classList.add('post-rendered', 'trending');
    } else {
        postRendered.classList.add('post-rendered');
    }

    postRendered.innerHTML += 'Hola';

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
    let now = moment(postArr[0].date).fromNow();


};


module.exports = {
    renderTemplate
};