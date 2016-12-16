'use strict';

// Global configuration
const config = require('./package.json').config;

// Dependancies
const autoprefixer = require('autoprefixer');
const browserSync = require('browser-sync').create();
const del = require('del');
const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const postcss = require('gulp-postcss');
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');
const sourcemaps = require('gulp-sourcemaps');
const webpack = require('webpack');
const webpackStream = require('webpack-stream');

// Tasks
function clean() {
  return del([config.dest.assets]);
}

function fonts() {
  return gulp.src(config.src.assets + 'fonts/**/*')
    .pipe(gulp.dest(config.dest.assets + 'fonts'));
}

function images() {
  return gulp.src(config.src.assets + 'images/**/*')
    .pipe(gulp.dest(config.dest.assets + 'images'));
}

function icons() {
  return gulp.src(config.src.assets + 'icons/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(config.dest.assets + 'icons'));
}

function scripts() {
  return gulp.src(config.src.assets + 'scripts/*.js')
    .pipe(webpackStream({
      entry: {
        app: config.src.assets + 'scripts/app.js'
      },
      output: {
        filename: '[name].js',
        path: __dirname + '/build'
      },
      module: {
        loaders: [{
          test: /\.js$/,
          loader: "babel-loader",
          query: {
            presets: [
              ["es2015", {
                "modules": false }
              ]
            ]
          }
        }]
      },
      devtool: 'source-map',
      plugins: [
        new webpack.optimize.UglifyJsPlugin({
          sourceMap: true,
          mangle: false
        })
      ]
    }, webpack))
    .pipe(gulp.dest(config.dest.assets));
}

function styles() {
  const processors = [
    autoprefixer({
      browsers: ['> 5%']
    })
  ];

  return gulp.src(config.src.assets + 'styles/app.scss')
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(config.dest.assets))
    .pipe(browserSync.stream({
      match: '**/*.css'
    }));
}

function sync() {
  browserSync.init({
    files: ['src/**/*.php', 'src/**/*.md'],
    proxy: 'https://bradshawsguide.dev',
    open: false
  });
}

function watch() {
  gulp.watch(config.src.assets + 'fonts', fonts);
  gulp.watch(config.src.assets + 'icons', icons);
  gulp.watch(config.src.assets + 'icons', images);
  gulp.watch(config.src.path + '**/*.js', scripts);
  gulp.watch(config.src.path + '**/*.scss', styles);
}

// Task sets
var compile = gulp.series(clean, gulp.parallel(fonts, icons, images, scripts, styles));

gulp.task('default', compile);
gulp.task('dev', gulp.series(compile, gulp.parallel(watch, sync)));
