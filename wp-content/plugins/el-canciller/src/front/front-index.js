/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import renderTemplate from './components/render-posts';

import { getData, getCategory, getLatestPosts, getComments } from './service/wordpressapi';


let createPostArray = async(quantity) => {

    let postArray = [];

    let latestPosts = await getLatestPosts(quantity);

    latestPosts.forEach((post) => {
        console.log(post);
    });

};

createPostArray(50);