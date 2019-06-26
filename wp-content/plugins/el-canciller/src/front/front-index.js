/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import renderTemplate from './components/render-posts';

import { getData, getCategories, getLatestPosts, getComments, getTags } from './service/wordpressapi';


let createPostArray = async(quantity) => {

    let postArray = [];

    let latestPosts = await getLatestPosts(quantity);

    latestPosts.forEach((post) => {

        console.log(post.categories);

    });

};

createPostArray(50);