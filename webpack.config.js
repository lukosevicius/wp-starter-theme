const path = require('path');

module.exports = {
    // mode: 'development',
    entry: './assets/js/src/main.js',
    module: {
    },
    output: {
        path: path.resolve('./assets/js/dist/'),
        filename: 'bundle.js'
    }
};