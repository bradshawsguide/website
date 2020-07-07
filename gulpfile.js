// Dependancies
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const del = require('del');
const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const util = require('gulp-util');

// Sass
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');

// Rollup
const rollup = require('./etc/gulp/rollup');

// Paths
const paths = {
  src: 'src/patterns/shared/',
  dest: 'www/assets/'
};

// Tasks
function clean() {
  return del([paths.dest]);
}

function fonts() {
  return gulp.src(paths.src + 'fonts/**/*')
    .pipe(gulp.dest(paths.dest + 'fonts'));
}

function icons() {
  return gulp.src(paths.src + 'icons/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(paths.dest + 'icons'));
}

function images() {
  return gulp.src(paths.src + 'images/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(paths.dest + 'images'));
}

function vectors() {
  return gulp.src(paths.src + 'vectors/**/*')
    .pipe(gulp.dest(paths.dest + 'vectors'));
}

function scripts(callback) {
  const modules = [{
    input: paths.src + 'scripts/app.js',
    file: paths.dest + 'app.js',
    name: 'app'
  }, {
    input: paths.src + 'scripts/map.js',
    file: paths.dest + 'map.js',
    name: 'map'
  }];

  rollup(modules, util, callback);
}

function styles() {
  const processors = [
    autoprefixer()
  ];

  return gulp.src(paths.src + 'styles/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.dest))
    .pipe(browserSync.stream({
      match: '**/*.css'
    }));
}

function sync() {
  browserSync.init({
    files: ['src/**/*.php', 'src/**/*.md'],
    proxy: 'https://bradshaws.test',
    open: false
  });
}

function watch() {
  gulp.watch(paths.src + 'fonts', fonts);
  gulp.watch(paths.src + 'icons', icons);
  gulp.watch(paths.src + 'images', images);
  gulp.watch(paths.src + 'vectors', vectors);
  gulp.watch('src/patterns/**/*.js', scripts);
  gulp.watch('src/patterns/**/*.scss', styles);
}

// Task sets
const compile = gulp.series(clean, gulp.parallel(fonts, icons, images, vectors, scripts, styles));

gulp.task('build', compile);
gulp.task('dev', gulp.series(compile, gulp.parallel(watch, sync)));
