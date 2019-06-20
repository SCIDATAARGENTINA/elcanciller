/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */


function renderTemplate(data) {

    const elements = document.querySelectorAll(".render-posts");

    elements.forEach((el) => {
        cat = el.getAttribute('data-category');
        quantity = el.getAttribute('data-quantity');

        data.forEach((val, key) => {
            if (val.categories === cat) {
                console.log(es la cat);
            }
            const template =
                `<p>${val.title.rendered}</p>
             <p>${val.date}</p><br><br>`;

            while (key <= quantity) {
                el.appendChild(template);
            }

            console.log(val.title.rendered + ' - ' + key);
        });
    });

}

export default renderTemplate;