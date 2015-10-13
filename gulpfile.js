var elixir = require('laravel-elixir');

require('laravel-elixir-bower');
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
    'jquery' :  './bower_components/jquery/',
    'bower': './bower_components/'
}

elixir(function(mix) {
         mix.bower('styles.css', 'public/css', 'scripts.js', 'public/js');
         mix.sass('app.scss')
        .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
        .copy(paths.bower + 'font-awesome/fonts/**', 'public/fonts')
        .scripts([
            paths.jquery + "dist/jquery.js",
            paths.bootstrap + "javascripts/bootstrap.js"
        ], './public/js/', 'app.js');

        
});


var gulp = require('gulp'),
 notify  = require('gulp-notify'),
 phpunit = require('gulp-phpunit'),
 _       = require('lodash');
 
  gulp.task('phpunit', function() {
    gulp.src('phpunit.xml')
      .pipe(phpunit('', {notify: true}))
      .on('error', notify.onError(testNotification('fail', 'phpunit')))
      .pipe(notify(testNotification('pass', 'phpunit')));
  });
 
function testNotification(status, pluginName, override) {
    var options = {
        title:   ( status == 'pass' ) ? 'Tests Passed' : 'Tests Failed',
        message: ( status == 'pass' ) ? '\n\nAll tests have passed!\n\n' : '\n\nOne or more tests failed...\n\n',
        icon:    __dirname + '/node_modules/gulp-' + pluginName +'/assets/test-' + status + '.png'
    };
    options = _.merge(options, override);
  return options;
}


var bower = require('gulp-bower');
 
gulp.task('bower1', function() {
  return bower('./bower_components')
    .pipe(gulp.dest('public/'))
});



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