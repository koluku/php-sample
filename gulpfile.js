var gulp = require('gulp');
var notify = require('gulp-notify');
var plumber = require('gulp-plumber');
var rename = require("gulp-rename");

paths = {
  sample: ['./sample/'],
  test: ['./test/']
};

gulp.task('test', function() {
  gulp.src(paths.sample + '*.php')
    .pipe(plumber({
      errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(rename({
      suffix: 'Test'
    }))
    .pipe(gulp.dest('./test/'))
});

gulp.task('default', ['test'], function() {
  gulp.watch([paths.root + '*.php'], ['test']);
});
