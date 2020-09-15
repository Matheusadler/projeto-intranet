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

mix.styles(['./node_modules/bootstrap/dist/css/bootstrap.css',
    './node_modules/admin-lte/dist/css/adminlte.css',
    './node_modules/bootstrap/dist/css/bootstrap.min.css',
    './node_modules/admin-lte/plugins/daterangepicker/daterangepicker.css',
    './node_modules/admin-lte/plugins/select2/css/select2.min.css',
    './node_modules/sweetalert2/dist/sweetalert2.min.css',
    './node_modules/lightbox2/dist/css/lightbox.css',
    'resources/css/app.css'
], 'public/css/app.css');


mix.scripts(['./node_modules/jquery/dist/jquery.min.js',
    './node_modules/popper.js/dist/umd/popper.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.bundle.min.js',
    './node_modules/moment/min/moment.min.js',
    './node_modules/admin-lte/dist/js/adminlte.min.js',
    './node_modules/admin-lte/plugins/select2/js/select2.full.min.js',
    './node_modules/admin-lte/plugins/inputmask/inputmask.js',
    './node_modules/admin-lte/plugins/inputmask/jquery.inputmask.js',
    './node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js',
    './node_modules/sweetalert2/dist/sweetalert2.min.js',
    './node_modules/lightbox2/dist/js/lightbox.js',
    'resources/js/tempus-dominus.js',
    'resources/js/jquery.stringtoslug.min.js',
    'resources/js/app.js',
], 'public/js/app.js');