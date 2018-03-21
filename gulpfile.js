'use strict';

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	rename = require('gulp-rename'),
	sass = require('gulp-sass'),
	maps = require('gulp-sourcemaps'),
	cleanCss = require('gulp-clean-css'),
	del = require('del'),
	stripCssComments = require('gulp-strip-css-comments');

/**
 *
 * JS Compilation
 *
 */

gulp.task('concatScripts', function(){
	return gulp.src([
		'_js/jquery.min.js',
		'_js/bootstrap.bundle.min.js',
		'_js/wow.min.js',
		'_js/slick.min.js',
		'_js/featherlight.js',
		'_js/featherlight.gallery.js',
		'_js/script.js'
		])
	.pipe(maps.init())
	.pipe(concat('main.js'))
	.pipe(gulp.dest('js'));

});

gulp.task('minifyScripts', ['concatScripts'], function(){
	return gulp.src('js/main.js')
		.pipe(uglify())
		.pipe(rename('main.min.js'))
		.pipe(gulp.dest('js'));

});


/**
 *
 * SCSS Compilation
 *
 */

gulp.task('compileSass', function(){
	return gulp.src('_scss/main.scss')
		.pipe(maps.init())
		.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
		.pipe(maps.write('./'))
		.pipe(gulp.dest('css'));
});

/**
 *
 * CSS Unification & Minification
 *
 */
gulp.task('clean', function(){
	del('css/main.min.css');
});

gulp.task('minifyCss', ['compileSass', 'clean'], function(){
	return gulp.src(['css/main.css','css/*.css'])
		.pipe(cleanCss())
		.pipe(concat('main.min.css'))
		.pipe(gulp.dest('css'));
});

/**
 *
 * Gulp Watch
 *
 */

gulp.task('watchAll', function () {
  gulp.watch('_scss/**/*.scss', ['minifyCss']);
  gulp.watch('_js/**/*.js', ['concatScripts', 'minifyScripts']);
});

/**
 *
 * Gulp Default
 *
 */

 gulp.task('build', ['minifyCss', 'minifyScripts', 'watchAll']);

 gulp.task('default', ['build']);
