/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
const front = require('./components/front-test');
const posts = require('./service/posts').default;

posts.posts.then(res => {
    console.log(data);
});