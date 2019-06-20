/**
 * render posts frontend component.
 *
 * src/front/components/render-posts.js
 */


function renderTemplate(data) {

    const elements = document.querySelectorAll(".render-posts");

    [].forEach.call(elements, function(index, value) {
        console.log(index, value); // passes index + value back!
    });

    elements.forEach((el) => {
        var cat = el.getAttribute('data-category');
        var quantity = el.getAttribute('data-quantity');

        data.forEach((val, key) => {
            if (val.categories === cat) {
                console.log("es la cat");
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