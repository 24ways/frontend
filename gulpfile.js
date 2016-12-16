// --------------------------------------------------------
// Dependencies
// --------------------------------------------------------
const pkg = require('./package.json');

// Fractal
const fractal = require('./fractal.js');
const logger = fractal.cli.console;

// Utils
const del = require('del');
const fs = require('fs');
const gulp = require('gulp');

// JavaScript
const babel = require('gulp-babel');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');

// CSS
const postcss = require('gulp-postcss');
const apply = require('postcss-apply');
const assets = require('postcss-assets');
const autoprefixer = require('autoprefixer');
const calc = require('postcss-calc');
const colorFunction = require('postcss-color-function');
const customMedia = require('postcss-custom-media');
const importer = require('postcss-easy-import');
const mapper = require('postcss-map');
const mediaMinMax = require('postcss-media-minmax');
const nano = require('cssnano');
const nested = require('postcss-nested');
const responsiveType = require('postcss-responsive-type');
const simpleVars = require('postcss-simple-vars');

// Misc
const ghPages = require('gulp-gh-pages');
const imagemin = require('gulp-imagemin');
const sourcemaps = require('gulp-sourcemaps');


// --------------------------------------------------------
// Configuration
// --------------------------------------------------------

// Paths
const paths = {
  build: `${__dirname}/www`,
  dest: `${__dirname}/tmp`,
  src: `${__dirname}/src`,
  modules: `${__dirname}/node_modules`,
};

// PostCSS plugins
const processors = [
  importer({
    glob: true,
  }),
  mapper({
    maps: [
      `${paths.src}/tokens/borders.json`,
      `${paths.src}/tokens/breakpoints.json`,
      `${paths.src}/tokens/colors.json`,
      `${paths.src}/tokens/fonts.json`,
      `${paths.src}/tokens/layers.json`,
      `${paths.src}/tokens/sizes.json`,
      `${paths.src}/tokens/spaces.json`,
    ],
  }),
  assets({
    loadPaths: [`${paths.src}/assets/vectors`],
  }),
  simpleVars,
  apply,
  calc,
  customMedia,
  colorFunction,
  mediaMinMax,
  nested,
  responsiveType,
  autoprefixer,
  nano,
];

// JavaScript files
const modules = [
  `${paths.modules}/fontfaceobserver/fontfaceobserver.js`,
  `${paths.modules}/prismjs/prism.js`,
  `${paths.src}/assets/scripts/utils/selection.js`,
  `${paths.src}/assets/scripts/utils/focusing.js`,
  `${paths.src}/assets/scripts/app.js`,
  `${paths.src}/components/**/*.js`,
];


// --------------------------------------------------------
// Tasks
// --------------------------------------------------------

// Build static site
function build() {
  const builder = fractal.web.builder();

  builder.on('progress', (completed, total) => logger.update(`Exported ${completed} of ${total} items`, 'info'));
  builder.on('error', err => logger.error(err.message));

  return builder.build().then(() => {
    logger.success('Fractal build completed!');
  });
}

// Serve dynamic site
function serve() {
  const server = fractal.web.server({
    sync: true,
  });

  server.on('error', err => logger.error(err.message));

  return server.start().then(() => {
    logger.success(`Fractal server is now running at ${server.url}`);
  });
}

// Clean
function clean() {
  return del(`${paths.dest}/assets/`);
}

// Deploy to GitHub pages
function deploy() {
  // Generate CNAME file from `homepage` value in package.json
  const cname = pkg.homepage.replace(/.*?:\/\//g, '');
  fs.writeFileSync(`${paths.build}/CNAME`, cname);

  // Push contents of build folder to `gh-pages` branch
  return gulp.src(`${paths.build}/**/*`)
    .pipe(ghPages({
      force: true,
    }));
}

// Meta
function meta() {
  return gulp.src(`${paths.src}/*.{txt,json}`)
    .pipe(gulp.dest(paths.dest));
}

// Icons
function icons() {
  return gulp.src(`${paths.src}/assets/icons/**/*`)
    .pipe(imagemin())
    .pipe(gulp.dest(`${paths.dest}/assets/icons`));
}

// Images
function images() {
  return gulp.src(`${paths.src}/assets/images/**/*`)
    .pipe(imagemin({
      progressive: true,
    }))
    .pipe(gulp.dest(`${paths.dest}/assets/images`));
}

// Vectors
function vectors() {
  return gulp.src(`${paths.src}/assets/vectors/**/*`)
    .pipe(gulp.dest(`${paths.dest}/assets/vectors`));
}

// Scripts
function scripts() {
  return gulp.src(modules)
    .pipe(sourcemaps.init())
    .pipe(babel({
      presets: [['es2015', { modules: false }]],
    }))
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(`${paths.dest}/assets/scripts`));
}

// Styles
function styles() {
  return gulp.src(`${paths.src}/assets/styles/*.css`)
    .pipe(sourcemaps.init())
    .pipe(postcss(processors))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest(`${paths.dest}/assets/styles`));
}

// Watch
function watch() {
  serve();
  gulp.watch(`${paths.src}/assets/icons`, icons);
  gulp.watch(`${paths.src}/assets/images`, images);
  gulp.watch(`${paths.src}/assets/vectors`, images);
  gulp.watch(`${paths.src}/**/*.js`, scripts);
  gulp.watch(`${paths.src}/**/*.css`, styles);
}

// Task sets
const compile = gulp.series(clean, gulp.parallel(meta, icons, images, vectors, scripts, styles));

gulp.task('start', gulp.series(compile, serve));
gulp.task('build', gulp.series(compile, build));
gulp.task('dev', gulp.series(compile, watch));
gulp.task('publish', gulp.series(build, deploy));
