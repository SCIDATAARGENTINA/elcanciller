/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

import { shuffle } from '../../utils/utils-index';

let setTemplate = (post) => {
    return ``;
};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        let random = node.getAttribute('data-random');
        console.log(shuffle);
        if (random == 1) {
            shuffle(postArr);
            console.log(postArr);
        }

    }

};


module.exports = {
    renderTemplate
};