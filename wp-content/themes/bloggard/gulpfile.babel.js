import filepath from 'path';
import gulp, { parallel } from 'gulp';
import yargs from 'yargs';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
import sourcemaps from 'gulp-sourcemaps';
import imagemin from 'gulp-imagemin';
import del from 'del';
import webpackStream from 'webpack-stream';
import webpack from 'webpack';
import uglify from 'gulp-uglify';
import named from 'vinyl-named';
import browserSync from 'browser-sync';
import zip from 'gulp-zip';
import replace from 'gulp-replace';
import info from './package.json';

const sass = require('gulp-sass')(require('sass'));
const browserSyncServer = browserSync.create();
const PRODUCTION = yargs.argv.prod;

const path = {
  styles: {
    src: ['src/assets/scss/main.scss'],
    dest: 'dist/assets/css/',
  },
  images: {
    src: 'src/assets/images/**/*.{jpg,png,gif,svg,jpeg}',
    dest: 'dist/assets/images/',
  },
  scripts: {
    src: ['src/assets/js/main.js'],
    dest: 'dist/assets/js',
  },
  package: {
    src: [
      '**/*',
      '!.vscode',
      '!node_modules{,/**}',
      '!packaged{,/**}',
      '!src{,/**}',
      '!.babelrc',
      '!gulpfile.babel.js',
      '!.gitignore',
      '!package.json',
      '!package-lock.json',
    ],
    dest: 'packaged',
  },
  others: {
    src: [
      'src/assets/**/*',
      'src/assets/{js,scss,images}',
      'src/assets/{js,scss,images}/**/*',
    ],
    dest: 'dist/assets/',
  },
};

export const browserSyncServe = (done) => {
  browserSyncServer.init({
    proxy: 'http://localhost:6600/',
    host: 'localhost:6600',
  });
  done();
};

export const reload = (done) => {
  browserSyncServer.reload();
  done();
};

const webpackConfig = {
  mode: PRODUCTION ? 'production' : 'development',
  module: {
    rules: [
      {
        test: /\.js$/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
  output: {
    filename: '[name].js',
  },
  externals: {
    jquery: 'jQuery',
  },
  devtool: !PRODUCTION ? 'inline-source-map' : false,
};

export const clean = () => del(['dist']);

export const styles = (cb) => {
  return gulp
    .src(path.styles.src)
    .pipe(gulpif(!PRODUCTION, sourcemaps.init()))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCss({ compatibility: 'ie8' })))
    .pipe(gulpif(!PRODUCTION, sourcemaps.write()))
    .pipe(gulp.dest(path.styles.dest));
  cb();
};

export const images = (cb) => {
  return gulp
    .src(path.images.src)
    .pipe(gulpif(PRODUCTION, imagemin()))
    .pipe(gulp.dest(path.images.dest));
  cb();
};

export const watch = () => {
  gulp.watch('src/assets/scss/**/*.scss', gulp.series(styles, reload));
  gulp.watch('src/assets/js/**/*.js', gulp.series(scripts, reload));
  gulp.watch('**/*.php', reload);
  gulp.watch(path.images.src, gulp.series(images, reload));
  gulp.watch(path.others.src, gulp.series(copy, reload));
};

export const copy = () => {
  return gulp.src(path.others.src).pipe(gulp.dest(path.others.dest));
};

export const scripts = () => {
  return gulp
    .src(path.scripts.src)
    .pipe(named())
    .pipe(webpackStream(webpackConfig, webpack))
    .pipe(gulpif(PRODUCTION, uglify()))
    .pipe(gulp.dest(path.scripts.dest));
};

export const compress = () => {
  return gulp
    .src(path.package.src)
    .pipe(replace('_themename', info.name))
    .pipe(zip(`${info.name}.zip`))
    .pipe(gulp.dest(path.package.dest));
};

export const build = gulp.series(
  clean,
  gulp.parallel(styles, images, copy, scripts)
);
export const build_dev = gulp.series(
  clean,
  gulp.parallel(styles, images, copy, scripts),
  browserSyncServe,
  watch
);
export const bundle = gulp.series(build, compress);

exports.default = build_dev;
