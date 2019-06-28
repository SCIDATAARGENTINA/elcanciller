// Require path.
const path = require('path');
const MomentLocalesPlugin = require('moment-locales-webpack-plugin');
// Configuration object.
const config = {
    // Create the entry points.
    // One for frontend and one for the admin area.
    entry: {
        // frontend and admin will replace the [name] portion of the output config below.
        frontend: ['babel-polyfill', './src/front/front-index.js'],
        admin: './src/admin/admin-index.js'
    },
    plugins: [
        // To strip all locales except “en”
        new MomentLocalesPlugin(),

        // Or: To strip all locales except “en”, “es-us” and “ru”
        // (“en” is built into Moment and can’t be removed)
        new MomentLocalesPlugin({
            localesToKeep: ['es-us'],
        }),
    ],
    // Create the output files.
    // One for each of our entry points.
    output: {
        // [name] allows for the entry object keys to be used as file names.
        filename: 'js/[name].js',
        // Specify the path to the JS files.
        path: path.resolve(__dirname, 'assets')
    },

    // Setup a loader to transpile down the latest and great JavaScript so older browsers
    // can understand it.
    module: {
        rules: [{
            // Look for any .js files.
            test: /\.js$/,
            // Exclude the node_modules folder.
            exclude: /node_modules/,
            // Use babel loader to transpile the JS files.
            loader: 'babel-loader'
        }]
    }
};

// Export the config object.
module.exports = config;