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
    'bootstrap': './node_modules/bootstrap-sass/assets/',
    'jquery' :  './bower_components/jquery/'
}

elixir(function(mix) {
         mix.sass('app.scss')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .scripts([
            paths.jquery + "dist/jquery.js",
            paths.bootstrap + "javascripts/bootstrap.js"
        ], './public/js/', 'app.js');
});


var gulp = require('gulp');
/*

var config = {
    sassPath: './resources/assets/sass',
    bowerDir: './bower_components'
}

var gulp = require('gulp'),    
    sass = require('gulp-ruby-sass'),
   // notify = require("gulp-notify"),
    bower = require('gulp-bower');


gulp.task('bower', function() {
    return bower()
       .pipe(gulp.dest(config.bowerDir))
});


gulp.task('css', function() {
    return gulp.src(config.sassPath + '/app.scss')
        .pipe(sass({
            style: 'compressed',
            loadPath: [
                config.sassPath,
                config.bowerDir + '/bootstrap-sass-official/assets/stylesheets',
                config.bowerDir + '/fontawesome/scss',
            ]
        })
            .on("error", notify.onError(function (error) {
                return "Error: " + error.message;
            })))
        .pipe(gulp.dest('./public/css'));
});

*/