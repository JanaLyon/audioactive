var gulp = require('gulp'),
	browserSync = require('browser-sync').create(),
	sass = require('gulp-sass'),
	autoPrefixer = require('gulp-autoprefixer'),
	rootAddress = 'wp-content/themes/audio-active/';


// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
	return gulp.src(rootAddress+'sass/*.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoPrefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}))
		.pipe(gulp.dest(rootAddress+'css'))
		.pipe(browserSync.stream());
});

gulp.task('serve', ['sass'], function() {
	browserSync.init({
		proxy: "localhost",
		injectChanges: false
	});

	gulp.watch(rootAddress+'sass/*.scss', ['sass']);
	gulp.watch(rootAddress+'css/*.css').on('change', browserSync.reload);
	gulp.watch(rootAddress+'template-parts/*.php').on('change', browserSync.reload);
	gulp.watch(rootAddress+'style.css').on('change', browserSync.reload);
	gulp.watch(rootAddress+'*.php').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
