const gulp = require('gulp'),
      uglify = require('gulp-uglify'),
      concat = require('gulp-concat');

gulp.task('scripts', function () {
  return gulp.src(['./js/!(materialize*)*.js'])
  .pipe(concat('index.js'))
  .pipe(uglify())
  .pipe(gulp.dest('./js/'));
});