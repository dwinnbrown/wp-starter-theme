// Gulp Tasks
var gulp = require('gulp');
var browserSync = require('browser-sync');
var reload = browserSync.reload;
var cleanCSS = require('gulp-clean-css');
var less = require('gulp-less');
var rename = require('gulp-rename');

gulp.task('watch-less', function() {
    gulp.watch('./less/*.less' , ['compile-less']);
});


gulp.task('compile-less', function() {
    gulp.src('./less/main.less')
        .pipe(less())
        .pipe(cleanCSS())
        .pipe(rename('style.css'))
        .pipe(gulp.dest('./'));
});


gulp.task('browsersync', function() {
    browserSync({
        /*server: {
            baseDir: "./"
        }*/
        proxy: "http://starter-theme-test.dev"
    });
    gulp.watch(['*.php', 'less/*.less', 'inc/js/*.js'], {cwd: './'}, reload);
});


gulp.task('default', ['browsersync', 'compile-less', 'watch-less']);