/**
 * API posts front end service
 *
 * src/front/service/posts.js
 */

const postUrl = 'http://142.93.24.13/wp-json/wp/v2/posts?per_page=100';

const posts = fetch(postUrl)
    .then(data => data.json());

posts.then(res => {
    console.log(data);
});

module.exports = posts;