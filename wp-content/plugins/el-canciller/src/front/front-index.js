/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import renderTemplate from './components/render-posts';

import { getData, getCategoriesById, getLatestPosts, getComments, getTagsById, categories, tags } from './service/wordpressapi';


let createPostArray = async(quantity) => {

    let postArray = [];

    let latestPosts = await getLatestPosts(quantity);

    for (let post of latestPosts) {
        console.log(post);

        console.log(categories);

        console.log(tags);
    }

};

createPostArray(50);