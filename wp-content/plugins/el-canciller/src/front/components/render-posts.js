/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

var utils = require('../../utils/utils-index');

let setTemplate = (post) => {
    return ``;
};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        let random = node.getAttribute('data-random');
        if (random == 1) {
            // randomArr = utils.shuffle(postArr);
        }

    }
    console.log('Normal:', postArr);

    //console.log('Random: ', randomArr);


};


module.exports = {
    renderTemplate
};