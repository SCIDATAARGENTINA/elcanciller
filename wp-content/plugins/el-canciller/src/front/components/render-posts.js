/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

let setTemplate = (post) => {
    return ``;
};

let renderTemplate = (postArr) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {
        console.log(node);
    }
};


module.exports = {
    renderTemplate
};