/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
const front = require('./components/render-posts');

import apiData from './service/wordpressapi';


apiData.getLatestPosts.then(res => {
    res.forEach((key, value) => {
        console.log(key + ' - ' + value); // key - value
    });
});