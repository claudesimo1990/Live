const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/admin/scripts.js', 'public/js/app.js')
    .vue()
    .sass('resources/sass/App/app.scss', 'public/css/app.css')
    .sass('resources/sass/admin/styles.scss','public/css/styles.css')
    .version();
