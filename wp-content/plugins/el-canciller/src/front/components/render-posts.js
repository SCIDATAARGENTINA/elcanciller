/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */

function setTemplate(val) {
    return `<p>${val.title.rendered}</p>
    <p>${val.date}</p>
    <p>${val.categories[0]}</p><br>`;
}

function insertData(data, element, cat, quantity) {

    data.forEach((val, key) => {

        let template = setTemplate(val);
        console.log(cat);
        console.log(val.categories[0]);
        if (toString(val.categories[0]) == toString(cat)) {
            if (key <= quantity) {
                element.innerHTML += template;
            }
        }
    });
}


function renderTemplate(data) {

    const elements = document.querySelectorAll(".render-posts");

    [].forEach.call(elements, (el) => {
        var cat = el.getAttribute('data-category');
        var quantity = el.getAttribute('data-quantity');
        var element = el;

        insertData(data, element, cat, quantity);

    });
}


export default renderTemplate;