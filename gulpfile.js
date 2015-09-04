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

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap-sass-official/assets/'
}

//elixir(function(mix) {
//
//    mix.sass('_bootstrap.scss', 'public/css/');
//
//});


elixir(function(mix) {
    mix.sass("app.scss", 'public/css');
    mix.less('resources/assets/less/admin-lte/build/less/AdminLTE.less', 'public/css/adminLTE.css')
    mix.scripts(['jquery-2.1.4.js',
        'bootstrap.min.js',
        'app.min.js']);

    mix.version('public/css/app.css');
});
