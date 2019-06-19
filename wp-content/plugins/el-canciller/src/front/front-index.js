/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
 const front = require('./components/front-test');
 const { posts } = require('./service/posts');

front.log('Here is a message for the frontend! Hola');
console.log(posts.posts);
