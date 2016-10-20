'use strict';

const fractal = require('@frctl/fractal').create();
const markdown = require('markdown-it')({
  html: true,
  xhtmlOut: true,
  typographer: true
});

const paths = {
  build: __dirname + '/www',
  src: __dirname + '/src',
  static: __dirname + '/tmp'
};

const mandelbrot = require('@frctl/mandelbrot')({
  favicon: '/assets/icons/icon.ico',
  lang: 'en-gb',
  styles: ['default', '/assets/styles/theme.css'],
  static: {
    mount: 'fractal'
  }
});

const nunjucks = require('@frctl/nunjucks')({
  filters: {
    date: require('nunjucks-date'),
    markdown: function(str) {
      return markdown.render(str);
    },
    markdownInline: function(str) {
      return markdown.renderInline(str);
    },
    slugify: function(str) {
      return str.toLowerCase().replace(/[^\w]+/g, '');
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
