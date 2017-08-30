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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
mix.sass('resources/assets/sass/second.sass', 'public/css')
    .sass('resources/assets/sass/second.sass', 'public/css/second');

// mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/second.scss', 'public/css');

// mix.sass('resources/assets/sass/app.scss', 'public/css');
//
// mix.less('resources/assets/less/app.less', 'public/css', {
//     strictMath: true
// });
//
// mix.sass('resources/assets/sass/second.sass', 'public/css', {
//     precision: 5
// });
//
// mix.sass('resources/assets/sass/app.scss', 'public/css')
//     .options({
//         postCss: [
//             require('postcss-css-variables')()
//         ]
//     });