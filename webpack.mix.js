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
    .copy('node_modules/datatables.net/js/jquery.dataTables.js', 'public/dist/js')
    .copy('node_modules/datatables.net-bs/js/dataTables.bootstrap.js', 'public/dist/js')
    .copy('node_modules/datatables.net-bs/css/dataTables.bootstrap.css', 'public/dist/css')
    .sass('resources/sass/app.scss', 'public/css');
