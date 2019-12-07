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

mix.styles([
        // 'vendor/syscover/pulsar-core/src/public/vendor/bootstrap/css/bootstrap.min.css',
        //'vendor/syscover/pulsar-core/src/public/css/helpers/margin.css',
        //'vendor/syscover/pulsar-core/src/public/css/helpers/padding.css',
        //'vendor/syscover/pulsar-core/src/public/css/helpers/helpers.css',
        // 'public/css/styles.css',
        // 'public/css/responsive.css',
        // 'public/css/blog.css',
        // 'public/css/academy.css'
    ], 'public/css/app.css')
    .scripts([
        'vendor/syscover/pulsar-core/src/public/vendor/jquery/jquery-3.3.1.min.js',
        'vendor/syscover/pulsar-core/src/public/vendor/polyfill/array.prototype.find.js',
        'vendor/syscover/pulsar-core/src/public/vendor/polyfill/array.prototype.foreach.js',
        'vendor/syscover/pulsar-core/src/public/vendor/bootstrap/js/bootstrap.min.js',
        'vendor/syscover/pulsar-core/src/public/vendor/territories/js/jquery.territories.js',
        'vendor/syscover/pulsar-core/src/public/vendor/jquery-validation/jquery.validate.min.js',
        'vendor/syscover/pulsar-core/src/public/vendor/jquery-validation/additional-methods.min.js',
        'vendor/syscover/pulsar-core/src/public/vendor/fontawesome/svg-with-js/js/fontawesome-all.js',
        'public/js/scripts.js'
    ], 'public/js/app.js')
    .options({
        processCssUrls: true
    })
    .version();
