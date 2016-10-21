'use strict';

const path = require('path');
const borders = require(path.join(process.cwd(), 'src/tokens/borders.json'));
const breakpoints = require(path.join(process.cwd(), 'src/tokens/breakpoints.json'));
const fonts = require(path.join(process.cwd(), 'src/tokens/fonts.json'));
const layers = require(path.join(process.cwd(), 'src/tokens/layers.json'));

module.exports = {
  context: {
    borders: borders,
    breakpoints: breakpoints,
    fonts: fonts,
    layers: layers
  }
};
