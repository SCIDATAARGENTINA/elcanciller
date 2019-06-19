/**
 * API posts front end service
 *
 * src/front/service/posts.js
 */

const postUrl = 'http://142.93.24.13/wp-json/wp/v2/posts?per_page=-1';

const posts = fetch(postUrl)
                .then(res => res.json())
                .then(res => res)

console.log(posts)

exports = posts;
