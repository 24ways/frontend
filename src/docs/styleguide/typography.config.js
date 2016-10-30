'use strict';

const path = require('path');

module.exports = {
  context: {
    fonts: require(path.join(process.cwd(), 'src/tokens/fonts.json'))
  }
};
