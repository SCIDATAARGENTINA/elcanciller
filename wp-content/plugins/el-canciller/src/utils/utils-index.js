/**
 * Shared utilities.
 */

/**
 * Suffle Array ( Para randomizar los posts);
 */

export function shuffle(arrParam) {
    let arr = arrParam.slice(),
        length = arr.length,
        temp,
        i;

    while (length) {
        i = Math.floor(Math.random() * length--);

        temp = arr[length];
        arr[length] = arr[i];
        arr[i] = temp;
    }

    return arr;
}