/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-polyfill");

import { renderTemplate } from './components/render-posts';

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

let createPostArray = async(quantity) => {

    let postArray = [];

    let latestPosts = await getLatestPosts(quantity);
    console.log(latestPosts);

    for (let post of latestPosts) {

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

        postArray.push(postObject);

    }

    renderTemplate(postArray);
};

fetchCategories();

fetchComments();

createPostArray(50);