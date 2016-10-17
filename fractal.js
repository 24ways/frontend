'use strict';

const fractal = require('@frctl/fractal').create();

const paths = {
  build: __dirname + '/www',
  src: __dirname + '/src',
  static: __dirname + '/tmp'
};

const mandelbrot = require('@frctl/mandelbrot')({
  lang: 'en-gb',
  skin: 'red',
  static: {
    mount: 'fractal'
  }
});

const nunjucks = require('@frctl/nunjucks')({
  filters: {
    markdown: require('marked'),
    is_string: function(obj) {
      return typeof obj === 'string';
    }
  },
  paths: [paths.static + '/assets/vectors']
});

// Project config
fractal.set('project.title', '24 ways component library');

// Components config
fractal.components.engine(nunjucks);
fractal.components.set('default.preview', '@preview');
fractal.components.set('default.status', 'prototype');
fractal.components.set('ext', '.html');
fractal.components.set('path', paths.src + '/components');

// Docs config
fractal.docs.engine(nunjucks);
fractal.docs.set('ext', '.md');
fractal.docs.set('path', paths.src + '/docs');

// Web UI config
fractal.web.theme(mandelbrot);
fractal.web.set('static.path', paths.static);
fractal.web.set('builder.dest', paths.build);
fractal.web.set('builder.urls.ext', null);

// Export config
module.exports = fractal;
