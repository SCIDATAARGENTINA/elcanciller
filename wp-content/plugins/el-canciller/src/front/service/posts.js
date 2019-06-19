/**
 * API posts front end service
 *
 * src/front/service/posts.js
 */

const postUrl = 'http://142.93.24.13/wp-json/wp/v2/posts';

const posts = fetch(postUrl)
                .then(res => res.json())
                .then(res => console.log(res))

module.exports = posts;
