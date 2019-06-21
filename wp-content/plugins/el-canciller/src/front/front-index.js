/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
import renderTemplate from './components/render-posts';

import apiData from './service/wordpressapi';


apiData.getLatestPosts.then(res => {
    renderTemplate(res);
});