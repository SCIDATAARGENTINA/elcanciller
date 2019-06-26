/**
 * Frontend entry point.
 *
 * src/front/front-index.js
 */
require("babel-core/register");
require("babel-polyfill");
import renderTemplate from './components/render-posts';

import { getData, getCategory } from './service/wordpressapi';


getData('').then(res => {
    renderTemplate(res);
});

getCategory(515);