/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */


function renderTemplate(data) {

    const elements = document.getQuerySelector('.render-posts');
    console.log(elements);

    data.forEach((val, key) => {
        console.log(val.title.rendered + ' - ' + key);
    });

}