// Dependancies
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const del = require('del');
const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

// Sass
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');

// Rollup + plugins
const rollup = require('rollup');
const babel = require('rollup-plugin-babel');
const commonjs = require('rollup-plugin-commonjs');
const resolve = require('rollup-plugin-node-resolve');
const uglify = require('rollup-plugin-uglify');

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

function images() {
  return gulp.src(paths.src.assets + 'images/**/*')
    .pipe(gulp.dest(paths.dest.assets + 'images'));
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

async function scripts() {
  const bundle = await rollup.rollup({
    entry: paths.src.assets + `scripts/app.js`,
    plugins: [
      babel({
        exclude: 'node_modules/**'
      }),
      commonjs(),
      resolve({
        browser: true,
        jsnext: true,
        main: true
      }),
      uglify()
    ]
  });

  await bundle.write({
    format: 'iife',
    dest: paths.dest.assets + 'app.js',
    sourceMap: true
  });
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
  gulp.watch(paths.src.assets + 'images', images);
  gulp.watch(paths.src.assets + 'vectors', vectors);
  gulp.watch(paths.src.root + '**/*.js', scripts);
  gulp.watch(paths.src.root + '**/*.scss', styles);
}

// Task sets
const compile = gulp.series(clean, gulp.parallel(fonts, icons, images, vectors, scripts, styles));

gulp.task('default', compile);
gulp.task('dev', gulp.series(compile, gulp.parallel(watch, sync)));
