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
    .copy('node_modules/datatables.net/js/jquery.dataTables.js', 'public/js')
    .copy('node_modules/datatables.net-dt/js/dataTables.dataTables.js', 'public/js')
    .copy('node_modules/datatables.net-dt/css/jquery.dataTables.css', 'public/css')
    .copy('node_modules/datatables.net-dt/images', 'public/images')
    .sass('resources/sass/app.scss', 'public/css');
