'use strict';

const path = require('path');
const data = require(path.join(process.cwd(), 'src/tokens/fonts.json'));

module.exports = {
  context: {
    fonts: data
  }
};
