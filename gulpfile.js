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
  src: {
    assets: 'src/assets/',
    root: 'src/'
  },
  dest: {
    assets: 'www/assets/',
    root: 'www/'
  }
};

// Tasks
function clean() {
  return del([paths.dest.assets]);
}

function fonts() {
  return gulp.src(paths.src.assets + 'fonts/**/*')
    .pipe(gulp.dest(paths.dest.assets + 'fonts'));
}

function vectors() {
  return gulp.src(paths.src.assets + 'vectors/**/*')
    .pipe(gulp.dest(paths.dest.assets + 'vectors'));
}

function icons() {
  return gulp.src(paths.src.assets + 'icons/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(paths.dest.assets + 'icons'));
}

function scripts(callback) {
  const modules = [{
    entry: paths.src.assets + 'scripts/app.js',
    dest: paths.dest.assets + 'app.js',
    name: 'app'
  }, {
    entry: paths.src.assets + 'scripts/map.js',
    dest: paths.dest.assets + 'map.js',
    name: 'map'
  }];

  rollup(modules, util, callback);
}

function styles() {
  const processors = [
    autoprefixer({
      browsers: ['> 5%']
    })
  ];

  return gulp.src(paths.src.assets + 'styles/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.dest.assets))
    .pipe(browserSync.stream({
      match: '**/*.css'
    }));
}

function sync() {
  browserSync.init({
    files: ['src/**/*.php', 'src/**/*.md'],
    proxy: 'https://bradshaws.dev',
    open: false
  });
}

function watch() {
  gulp.watch(paths.src.assets + 'fonts', fonts);
  gulp.watch(paths.src.assets + 'icons', icons);
  gulp.watch(paths.src.assets + 'vectors', vectors);
  gulp.watch(paths.src.root + '**/*.js', scripts);
  gulp.watch(paths.src.root + '**/*.scss', styles);
}

// Task sets
const compile = gulp.series(clean, gulp.parallel(fonts, icons, vectors, scripts, styles));

gulp.task('build', compile);
gulp.task('start', gulp.series(compile, gulp.parallel(watch, sync)));
