'use strict';

const pkg = require('./package.json');
const fractal = require('./fractal.js');
const autoprefixer = require('autoprefixer');
const concat = require('gulp-concat');
const del = require('del');
const fs = require('fs');
const gulp = require('gulp');
const ghPages = require('gulp-gh-pages');
const imagemin = require('gulp-imagemin');
const postcss = require('gulp-postcss');
const postcssAssets = require('postcss-assets');
const sass = require('gulp-sass');
const sassGlob = require('gulp-sass-glob');
const sassJson = require('node-sass-json-importer');
const stylelint = require('gulp-stylelint');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const logger = fractal.cli.console;

const paths = {
  build: __dirname + '/www',
  dest: __dirname + '/tmp',
  src: __dirname + '/src'
};

// Build static site (Fractal)
function build() {
  const builder = fractal.web.builder();

  builder.on('progress', (completed, total) => logger.update(`Exported ${completed} of ${total} items`, 'info'));
  builder.on('error', err => logger.error(err.message));

  return builder.build().then(() => {
    logger.success('Fractal build completed!');
  });
};

// Serve dynamic site (Fractal)
function serve() {
  const server = fractal.web.server({
    sync: true
  });

  server.on('error', err => logger.error(err.message));

  return server.start().then(() => {
    logger.success(`Fractal server is now running at ${server.url}`);
  });
};

// Clean
function clean() {
  return del(paths.dest + '/assets/');
};

// Deploy to GitHub pages
function deploy() {
  // Generate CNAME file from `homepage` value in package.json
  let cname = pkg.homepage.replace(/.*?:\/\//g, '');
  fs.writeFileSync(paths.build + '/CNAME', cname);

  // Push contents of build folder to `gh-pages` branch
  return gulp.src(paths.build + '/**/*')
    .pipe(ghPages({
      force: true
    }));
  done();
};

// Icons
function icons() {
  return gulp.src(paths.src + '/assets/icons/**/*')
    .pipe(imagemin())
    .pipe(gulp.dest(paths.dest + '/assets/icons'));
};

// Images
function images() {
  return gulp.src(paths.src + '/assets/images/**/*')
    .pipe(imagemin({
      progressive: true,
    }))
    .pipe(gulp.dest(paths.dest + '/assets/images'));
};

// Vectors
function vectors() {
  return gulp.src(paths.src + '/assets/vectors/**/*')
    .pipe(gulp.dest(paths.dest + '/assets/vectors'));
};

// Linting
function lintstyles() {
  return gulp.src(paths.src + '/**/*.scss')
    .pipe(stylelint({
      reporters: [{
        formatter: 'string',
        console: true
      }]
    }));
};

// Styles
function styles() {
  return gulp.src(paths.src + '/assets/styles/*.scss')
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(sass({
      outputStyle: 'expanded',
      includePaths: [paths.src + '/tokens/'],
      importer: sassJson
    }).on('error', sass.logError))
    .pipe(postcss([
      postcssAssets({
        loadPaths: [paths.src + '/assets/vectors']
      }),
      autoprefixer({
        browsers: ['> 2%']
      })
    ]))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.dest + '/assets/styles'));
};

// Scripts
function scripts() {
  return gulp.src([
      paths.src + '/assets/scripts/vendor/cferdinandi/**/*.js',
      paths.src + '/components/**/*.js'
    ])
    .pipe(sourcemaps.init())
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(paths.dest + '/assets/scripts'));
};

// Watch
function watch(done) {
  serve();
  gulp.watch(paths.src + '/assets/icons', icons);
  gulp.watch(paths.src + '/assets/images', images);
  gulp.watch(paths.src + '/assets/vectors', images);
  gulp.watch(paths.src + '/**/*.js', scripts);
  gulp.watch(paths.src + '/**/*.scss', styles);
};

// Task sets
const compile = gulp.series(clean, gulp.parallel(icons, images, vectors, scripts, styles));

gulp.task('start', gulp.series(compile, serve));
gulp.task('lint', gulp.series(lintstyles));
gulp.task('build', gulp.series(compile, build));
gulp.task('dev', gulp.series(compile, watch));
gulp.task('publish', gulp.series(build, deploy));
