var gulp = require('gulp'),
	jsmin = require('gulp-jsmin'),
	rename = require('gulp-rename'),
	uncss = require('gulp-uncss'),
	sass = require('gulp-sass'),
	concatCss = require('gulp-concat-css'),
	minifyCSS = require('gulp-minify-css'),
    htmlmin = require('gulp-htmlmin'),
    concat = require('gulp-concat');

gulp.task('default', function() {
  	 gulp.src('proj/js/main.js')
        .pipe(jsmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dest/js'));


     gulp.src('proj/css/*.css')
        .pipe(concatCss("style.css"))
        .pipe(gulp.dest('dest/css'));

     gulp.src('dest/css/style.css')
        .pipe(minifyCSS({keepBreaks:false}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dest/css'));

    gulp.src('dest/css/ie.css')
        .pipe(minifyCSS({keepBreaks:true}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dest/css'));
    
     
});

gulp.task('minify', function() {


    gulp.src('proj/404.html')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dest'));

    gulp.src('proj/php/*.php')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dest/php'));

    gulp.src(['proj/index.php', 'proj/about.php', 'proj/my-works.php'])
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dest'));
});