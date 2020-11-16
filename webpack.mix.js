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
const  mix  = require('laravel-mix');

mix.scripts([
    'assets/js/jquery.min.js',
    'assets/js/jquery.matchHeight.js',
    'assets/js/isotope.pkgd.min.js',
    'assets/js/owl.carousel.min.js',
    'assets/js/site.js'
],'js/app.js').minify('js/app.js');

mix.sass('assets/scss/app.scss', 'style.css').minify('style.css');

