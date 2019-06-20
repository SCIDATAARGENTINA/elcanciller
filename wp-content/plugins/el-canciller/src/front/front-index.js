/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
import renderTemplate from './components/render-posts';

import apiData from './service/wordpressapi';


apiData.getLatestPosts.then(res => {
    console.log(res);
    res.forEach((val, key) => {
        console.log(val.title.rendered + ' - ' + key);
    });
});