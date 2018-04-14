const FilewatcherPlugin = require("filewatcher-webpack-plugin");

let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

mix.sourceMaps()
    .version()
    .browserSync({
        proxy: 'web',
        files: [
            'app/**/*',
            'public/**/*',
            'resources/views/**/*',
            'routes/**/*'
        ],
        open: false
    });

mix.webpackConfig({
    watchOptions: {
        aggregateTimeout: 300,
        poll: 1000
    },
    plugins: [
        new FilewatcherPlugin({
            watchFileRegex: [
                'app/**/*',
                'public/**/*',
                'resources/views/**/*',
                'routes/**/*'
            ],
            usePolling: true,
        }),
    ]
});
