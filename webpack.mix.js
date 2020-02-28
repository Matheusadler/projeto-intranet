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
    'resource/css/app.css'
], 'public/css/app.css');

mix.scripts(['./node_modules/jquery/dist/jquery.min.js',
    './node_modules/popper.js/dist/umd/popper.min.js',
    './node_modules/bootstrap/dist/js/bootstrap.min.js',
    './node_modules/admin-lte/dist/js/plugins/bootstrap/js/bootstrap.bundle.min.js',
    './node_modules/admin-lte/dist/js/adminlte.min.js',
], 'public/js/app.js');