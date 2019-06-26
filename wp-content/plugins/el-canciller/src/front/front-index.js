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

    latestPosts.forEach(async(post) => {

        console.log(post);

        let categories = await getCategories(post.categories);

        let tags = await getTags(post.tags);

        console.log(tags, categories);



    });

};

createPostArray(50);