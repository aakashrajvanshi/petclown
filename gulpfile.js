var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles([
        "../plugins/bootstrap/css/bootstrap.min.css",
        "ie8.css",
        "blocks.css",
        "plugins.css",
        "app.css",
        "style.css",
        "custom.css",
        "headers/header-v6.css",
        "footers/footer-default.css",
        "../plugins/animate.css",
        "../plugins/line-icons/line-icons.css",
        "../plugins/font-awesome/css/font-awesome.min.css",
        "../plugins/brand-buttons/brand-buttons.css",
        "../plugins/brand-buttons/brand-buttons-inversed.css",
        "pages/profile.css",
        "theme-colors/default.css"
    ], "public/assets/css");

    mix.copy('resources/assets/plugins/font-awesome/fonts', 'public/assets/fonts');
    mix.copy('resources/assets/plugins/bootstrap/fonts', 'public/assets/fonts');

    mix.scripts([
        "../plugins/jquery/jquery.min.js",
        "../plugins/jquery/jquery-migrate.min.js",
        "../plugins/bootstrap/js/bootstrap.min.js",
        "../plugins/back-to-top.js",
        "../plugins/smoothScroll.js",
        "../plugins/jquery.parallax.js",
        "app.js",
        "custom.js"
    ], "public/assets/js");
});
