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
let comments;

let fetchCategories = async() => {
    categories = await getCategories();
};

let fetchTags = async() => {
    tags = await getTags();
};

let fetchComments = async() => {
    comments = getComments();
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

    console.log(comments);

};

let createPostArray = async(quantity) => {

    let postArray = [];

    let latestPosts = await getLatestPosts(quantity);

    for (let post of latestPosts) {
        console.log(post);

        let postCategories = findPostCategories(post.categories, categories);

        let postComments = findPostComments(post.id, comments);

        let postObject = {
            id: post.id,
            title: post.title.rendered,
            link: post.link,
            date: new Date(post.date),
            category: postCategories[0],
            comments: postComments
        };

    }

};

fetchCategories();

fetchComments();
//fetchTags();

createPostArray(50);