'use strict';

const path = require('path');
const data = require(path.join(process.cwd(), 'src/tokens/colors.json'));

module.exports = {
  context: data
};
