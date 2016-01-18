var gulp = require('gulp'),
    sass = require('gulp-sass');

var paths = {
	src: './src/',
	content: './content/'
};

paths.scss = paths.src + 'scss/epickris.scss';
paths.scssDest = paths.content + 'css';

gulp.task('default', function () {
	return gulp.src(paths.scss)
		.pipe(sass())
		.pipe(gulp.dest(paths.scssDest));
});