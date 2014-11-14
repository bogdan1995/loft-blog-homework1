var gulp = require('gulp'),
	jsmin = require('gulp-jsmin'),
	rename = require('gulp-rename'),
	uncss = require('gulp-uncss'),
	sass = require('gulp-sass'),
	concatCss = require('gulp-concat-css'),
	minifyCSS = require('gulp-minify-css'),
    htmlmin = require('gulp-htmlmin');

gulp.task('default', function() {
  	 gulp.src('proj/js/main.js')
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dest/js'));

     gulp.src('proj/css/*.css')
        .pipe(concatCss("style.css"))
        .pipe(gulp.dest('dest/css'));

     gulp.src('dest/css/style.css')
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dest/css'));
    
     gulp.src('proj/*.php')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dest'));

     gulp.src('proj/php/*.php')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dest/php'));  
});