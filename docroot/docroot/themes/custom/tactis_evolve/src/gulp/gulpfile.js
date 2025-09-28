import gulp from 'gulp';
import * as dartSass from 'sass'
import gulpSass from 'gulp-sass';
import babel from 'gulp-babel';
import concat from 'gulp-concat';
import uglify from 'gulp-uglify';
import rename from 'gulp-rename';
import cleanCSS from 'gulp-clean-css';
import { deleteAsync } from 'del';

const sass = gulpSass(dartSass);

var paths = {
  styles: {
    src: '../scss/**/*.scss',
    dest: '../../css/'
  },
  scripts: {
    src: '../js/**/*.js',
    dest: '../../js/'
  },
  bootstrap: {
    src: '../../../../contrib/bootstrap5/dist/bootstrap/5.3.3/dist/js/bootstrap.bundle.min.js',
    dest: '../../js/',
  },
  popper: {
    src: 'node_modules/@popperjs/core/dist/umd/popper.min.js',
    dest: '../../js/',
  }
};

/*
 * For small tasks you can export arrow functions
 */
export const clean = () => deleteAsync([ '../../css', '../../js' ], {force: true});

/*
 * You can also declare named functions and export them as tasks
 */
export function styles() {
  return gulp.src(paths.styles.src)
      .pipe(sass())
      .pipe(cleanCSS())
      // pass in options to the stream
      .pipe(rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(paths.styles.dest));
}

export function scripts() {
  return gulp.src(paths.scripts.src, { sourcemaps: true })
      .pipe(babel())
      .pipe(uglify())
      .pipe(rename({
        suffix: '.min'
      }))
      .pipe(gulp.dest(paths.scripts.dest));
}

// Move the Bootstrap JavaScript files into our js/bootstrap folder.
function move_bootstrap_js_files() {
  return gulp
      .src([paths.bootstrap.src])
      .pipe(gulp.dest(paths.bootstrap.dest));
}

// Move the Popper JavaScript files into our js/popper folder.
function move_popper_js_files() {
  return gulp
      .src([paths.popper.src])
      .pipe(gulp.dest(paths.popper.dest));
}

const moveFiles = gulp.series(move_bootstrap_js_files, move_popper_js_files);
export { moveFiles }

/*
 * You could even use `export as` to rename exported tasks
 */
function watchFiles() {
  gulp.watch(paths.scripts.src, scripts);
  gulp.watch(paths.styles.src, styles);
}
export { watchFiles as watch };

const build = gulp.series(clean, gulp.parallel(styles, scripts, move_bootstrap_js_files, move_popper_js_files));
/*
 * Export a default task
 */
export default build;
