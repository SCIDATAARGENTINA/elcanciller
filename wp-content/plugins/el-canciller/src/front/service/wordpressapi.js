/**
 * API posts front end service
 *
 * src/front/service/wordpressapi.js
 */


function getData(query) {

    const url = `http://142.93.24.13/wp-json/wp/v2/${ query }`;

    const headers = new HttpHeaders({
        // tslint:disable-next-line:max-line-length
        //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'
    });

    return fetch(url, { headers }).then(data => data.json());

}

const apiData = {
    getLatestPosts() {
        return getData('/posts?per_page=100');
    }
}

module.exports = apiData;