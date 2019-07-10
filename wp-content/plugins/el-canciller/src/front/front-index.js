/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import { createPostArray } from './components/render-posts';

import { getData, getCategoriesById, getLatestPosts, getComments, getTagsById, getCategories, getTags } from './service/wordpressapi';

let categories;
let tags;
let comments;

let fetchCategories = async() => {
    categories = await getCategories();
};

let fetchTags = async() => {
    tags = await getTags();
};

let fetchComments = async() => {
    comments = await getComments();
};

let findPostCategories = (id, categories) => {

    let catArray = [];

    for (let catid of id) {

        for (let category of categories) {

            if (category.id == catid) {
                catArray.push(category);

            }

        }

    }

    return catArray;
};

let findPostComments = (id, comments) => {

    let comArray = [];

    for (let comment of comments) {

        if (comment.post == id && comment.status == "approved") {

            let commentObj = {
                author: comment.author_name,
                content: comment.content.rendered
            };

            comArray.push(commentObj);

        }

    }

    return comArray;

};

let renderTemplate = (rendered) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');
        let quantity = node.getAttribute('data-quantity');
        let offset = node.getAttribute('data-offset');
        console.log(random, quantity, offset);
        console.log(createPostArray(quantity, offset));

        if (random == 1) {
            randomArr = utils.shuffle(createPostArray(quantity, offset));

            for (let post of randomArr) {
                node.appendChild(setTemplate(post));
            }

        } else {

            for (let post of createPostArray(quantity, offset)) {

                node.appendChild(setTemplate(post));

            }

        }

    }

    rendered();

};

renderTemplate(() => {
    var loading = document.getElementsByClassName('loader');

    for (let loader of loading) {

        console.log(loader);
        loader.style.display = 'none';
    }
});