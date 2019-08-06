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

elixir(function (mix) {
    mix
        .copy('vendor/bower_components/bootstrap/dist/js/bootstrap.js','resources/assets/js/bootstrap/bootstrap.js')
        .less(
        'app.less',
        'public/css/app.css'
    )
        .less('frontend.less',
        'public/css/frontend.css'
    )
        .less(
        'admin.less',
        'public/css/admin.css'
    )
        .styles([
            'frontend.css'
        ])
        .scripts([
            'bootstrap/bootstrap.js',
            'frontend/libs/**/*.js',
            'frontend/app.js',
            'frontend/appRoutes.js',
            'frontend/controllers/**/*.js',
            'frontend/services/**/*.js',
            'frontend/directives/**/*.js'
        ], 'public/js/frontend.js')
        .scripts([
            'bootstrap/bootstrap.js',
            'admin/libs/**/*.js',
            'admin/app.js',
            'admin/appRoutes.js',
            'admin/controllers/**/*.js',
            'admin/services/**/*.js',
            'admin/directives/**/*.js'
        ], 'public/js/admin.js')
        .version([
            'css/app.css',
            'css/frontend.css',
            'js/frontend.js',
            'css/admin.css',
            'js/admin.js'
        ])
});
