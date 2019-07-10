/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import { createPostArray, setTemplate } from './components/render-posts';

import { getData, getCategoriesById, getLatestPosts, getComments, getTagsById, getCategories, getTags } from './service/wordpressapi';

var utils = require('../utils/utils-index');


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

let renderTemplate = async(rendered) => {

    let renderNodes = document.querySelectorAll('.render-posts');

    for (let node of renderNodes) {

        // Randomize Array if has 'data-random' = 1
        let random = node.getAttribute('data-random');
        let quantity = node.getAttribute('data-quantity');
        let offset = 0;
        if (node.getAttribute('data-offset')) {
            offset = node.getAttribute('data-offset');
        }
        console.log(random, quantity, offset);
        let postArray = await createPostArray(quantity, offset);
        console.log(createPostArray(quantity, offset));

        if (random == 1) {
            randomArr = utils.shuffle(postArray);

            for (let post of randomArr) {
                console.log('random', post);
                console.log(setTemplate(post));
                node.appendChild(setTemplate(post));
            }

        } else {

            for (let post of postArray) {
                console.log('normal', post);
                console.log(setTemplate(post));
                node.appendChild(setTemplate(post));

            }

        }

    }

    rendered();

};

document.onreadystatechange = function() {
    if (document.readyState == "complete") {
        renderTemplate(() => {
            var loading = document.getElementsByClassName('loader');

            for (let loader of loading) {

                console.log(loader);
                loader.style.display = 'none';
            }
        });
    }
};