/**
 * API posts front end service
 *
 * src/front/service/post.js
 */

const postUrl = 'http://142.93.24.13/wp-json/wp/v2/posts';

const posts = fetch(postUrl)
                .then((resp) => resp.json())
                .then(data => console.log(JSON.stringify(data)))

module.export = posts;
