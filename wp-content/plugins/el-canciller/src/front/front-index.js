/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import renderTemplate from './components/render-posts';

import { getData, getCategoriesById, getLatestPosts, getComments, getTagsById, getCategories, getTags } from './service/wordpressapi';

let categories;
let tags;

let fetchCategories = async() => {
    categories = await getCategories();
};

let fetchTags = async() => {
    tags = await getTags();
};

let findPostCategories = (id, categories) => {

    let catArray = [];

    let postCategories = categories.find(category => id == category.id);

    console.log(postCategories);
};

let createPostArray = async(quantity) => {

    let postArray = [];

    let latestPosts = await getLatestPosts(quantity);

    for (let post of latestPosts) {
        console.log(post);

        findPostCategories(post.categories, categories);

        console.log(tags);
    }

};

fetchCategories();

//fetchTags();

createPostArray(50);