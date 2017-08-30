var gulp = require('gulp');
gulp.task('hello', function() {
  console.log('FirstTesting');
});

var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');


gulp.task('task-name', function () {
  return gulp.src('source-files') // Get source files with gulp.src
    .pipe(aGulpPlugin()) // Sends it through a gulp plugin
    .pipe(gulp.dest('destination')) // Outputs the file in the destination folder
});

gulp.task('sass', function(){
  return gulp.src('app/scss/**/*.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('app/css'))
});