/**
 * API posts front end service
 *
 * src/front/service/wordpressapi.js
 */


let getData = (query) => {

    const url = `http://142.93.24.13/wp-json/wp/v2/${ query }`;

    const headers = {
        // tslint:disable-next-line:max-line-length
        //'Authorization': 'Bearer BQDN8FI-G3-thKplSnuymOZA8ixIHLoEnrEg4-nvcCsN64BGpyNv1LdbM53gz0ODqo9QXYLHKtbKaG7DLl0'
    };

    return fetch(url, { headers }).then(data => data.json());

};

let getCategory = async(id) => {

    let category = await getData(`categories/${id}`);

    return category;

};

let getLatestPosts = async(quantity) => {

    let latestPosts = await getData(`posts?per_page=${quantity}`);

    return latestPosts;

};

let getComments = async(id) => {

    let postComments = await getData(`comments?post=${id}`);

    return postComments;
};



module.exports = {
    getData,
    getCategory,
    getLatestPosts,
    getComments
};