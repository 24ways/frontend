'use strict';

const path = require('path');

module.exports = {
  context: {
    borders: require(path.join(process.cwd(), 'src/tokens/borders.json')),
    breakpoints: require(path.join(process.cwd(), 'src/tokens/breakpoints.json')),
    fonts: require(path.join(process.cwd(), 'src/tokens/fonts.json')),
    layers: require(path.join(process.cwd(), 'src/tokens/layers.json')),
    sizes: require(path.join(process.cwd(), 'src/tokens/sizes.json')),
    spaces: require(path.join(process.cwd(), 'src/tokens/spaces.json'))
  }
};
