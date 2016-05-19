var elixir = require('laravel-elixir');
elixir.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss', 'public/assets/css/noah.css');
    mix.scripts([
        'jquery.js',
        'pace.min.js',
        'prism.js',
        'bootstrap.js',
        'noah.js'
    ], 'public/assets/js/noah.js');
    
    // mix.version(['assets/css/noah.css', 'assets/js/noah.js']);
});