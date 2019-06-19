/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
const front = require('./components/front-test');
import getLatestPosts from './service/wordpressapi';

getLatestPosts.then(res => {
    console.log(res);
});