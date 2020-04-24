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

mix.js('resources/js/app.js', 'public/js')
    .js('packages/Adizbek/Larabek/resources/js/app.js', 'public/vendor/larabek/app.js')
    .sass('packages/Adizbek/Larabek/resources/scss/app.scss', 'public/vendor/larabek/app.css')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps(!process.env.APP_DEBUG)
    .babelConfig({
        plugins: ['@babel/plugin-proposal-class-properties'],
    })
    .version();
