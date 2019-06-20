/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
const front = require('./components/front-test');

import apiData from './service/wordpressapi';


apiData.getLatestPosts.then(res => {
    console.log(res);
});