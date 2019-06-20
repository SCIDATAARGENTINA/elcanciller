/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */


function renderTemplate(data) {

    const elements = document.querySelectorAll(".render-posts");

    [].forEach.call(elements, (el) => {
        var cat = el.getAttribute('data-category');
        var quantity = el.getAttribute('data-quantity');
        var element = el;

        data.forEach((val, key) => {
            if (val.categories[0] === cat) {
                console.log("es la cat");
            }
            let template =
                `<p>${val.title.rendered}</p>
             <p>${val.date}</p><br><br>`;

            if (key <= quantity) {
                console.log(element);
                element.innerHTML += template;
            } else {
                return;
            }

            console.log(template);
        });
    });

}

export default renderTemplate;