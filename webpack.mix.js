const mix = require('laravel-mix');
require('laravel-mix-artisan-serve');

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

mix.webpackConfig({
        module :{
            rules :[
                {
                    test : /\.scss/,
                    loader : "import-glob-loader"
                }
            ]
        }
    })
    .sass("resources/sass/app.scss","public/css")
    .js("resources/js/app.js","public/js")
    .browserSync({
        proxy:"http://127.0.0.1:8000",
        files :[
            "app/**",
            "resources/**",
            "routes/web.php",
            "public/**",
        ]
    })
    .serve();