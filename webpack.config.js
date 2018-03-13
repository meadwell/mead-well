const path = require('path');

module.exports = {
    entry: './static/js/app.js',
    output: {
        path: path.resolve(__dirname, 'static/dist'),
        filename: 'app.bundle.js'
    }
};
