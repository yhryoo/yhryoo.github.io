'use strict';
const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const cssnano = require('gulp-cssnano');
const uglify = require('gulp-uglify');

gulp.task("stylesheets", function(){
	return gulp.src("./assets/sass/**/*.scss")
		.pipe(sass().on('error',sass.logError))
		.pipe(autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(cssnano())
		.pipe(gulp.dest("./assets/css/"));
});

gulp.task('scripts', function(){
	return gulp.src("./assets/prevJs/**/*.js")
	.pipe(concat('main.js'))
	.pipe(uglify())
	.pipe(gulp.dest("./assets/js/"))
})

gulp.task('default', function () {
	gulp.watch('./assets/sass/**/*.scss', gulp.series('stylesheets'));
	gulp.watch('./assets/prevJs/**/*.js', gulp.series('scripts'));
});