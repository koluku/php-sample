var gulp        = require('gulp');
var notify      = require('gulp-notify');
var plumber     = require('gulp-plumber');
var rename      = require("gulp-rename");

paths = {
  root  : ['./'],
  public: ['./public/'],
  test  : ['./test/']
};

gulp.task('php', function() {
  gulp.src(paths.root + '*.php')
    .pipe(plumber({
      errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(gulp.dest('./public/'))
    .pipe(rename({
      suffix: 'Test'
    }))
    .pipe(gulp.dest('./test/'))
});

gulp.task('default', ['php'], function() {
  gulp.watch([paths.root + '*.php'], ['php']);
});
