/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

var moment = require('moment');

var utils = require('../../utils/utils-index');



let setTemplate = (post) => {

    return `<div>`;
};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');
        if (random == 1) {
            randomArr = utils.shuffle(postArr);
        } else {

        }



    }
    console.log('Normal:', postArr);

    console.log('Random: ', randomArr);
    console.log(moment([2007, 0, 29]).fromNow());


};


module.exports = {
    renderTemplate
};