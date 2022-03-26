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
    .js('packages/abacuswonder/formary/resources/js/formary.js','vendor/abacuswonder/formary/js').vue()
    .sass('packages/abacuswonder/formary/resources/scss/formary.scss','vendor/abacuswonder/formary/css')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
