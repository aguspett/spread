var elixir = require('laravel-elixir');

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
    mix.sass('app.scss');
    mix.styles([
        'bootstrap.min.css',
        'bootstrap.css.map',
        'AdminLTE.min.css',
        '_all-skins.css',
        'fontawsome.css',
        'ionicons.min.css'
   ]);
    mix.styles([
        'bootstrap.min.css',
        'bootstrap.css.map',
        'login.css',
        ],'public/css/login.css');

    mix.scripts(['jquery-2.1.4.js',
        'bootstrap.min.js',
        'app.min.js']);
    mix.version('public/css/app.css');
});
