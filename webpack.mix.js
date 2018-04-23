const mix = require('laravel-mix');

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

const plugins = [];

const watchFiles = [
    'app/**/*',
    'resources/**/*',
    'routes/**/*'
];

if (!mix.inProduction()) {
    const FilewatcherPlugin = require("filewatcher-webpack-plugin");

    plugins.push(
        new FilewatcherPlugin({
            watchFileRegex: watchFiles,
            usePolling: false,
        })
    );

    mix.browserSync({
        proxy: 'web',
        files: watchFiles,
        open: false
    });
} else {
    mix.sourceMaps()
        .version();
}

mix.webpackConfig({
    watchOptions: {
        aggregateTimeout: 300,
        poll: 1000
    },
    plugins: plugins
});

mix.autoload({
    'jquery': ['jQuery', '$'],
});