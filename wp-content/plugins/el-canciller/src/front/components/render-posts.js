/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

var moment = require('moment');

var utils = require('../../utils/utils-index');

require('moment/locale/es'); // without this line it didn't work
moment.locale('es');



let setTemplate = (post) => {

    let template = '';


};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        let template = '';

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');

        if (random == 1) {
            randomArr = utils.shuffle(postArr);

            for (let post of randomArr) {

                template += setTemplate(post);

            }

        } else {

            for (let post of postArr) {

                template += setTemplate(post);

            }

        }

    }

    console.log(postArr);
    let now = moment(postArr[0].date).fromNow();


};


module.exports = {
    renderTemplate
};