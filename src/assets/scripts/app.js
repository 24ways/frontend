// Import modules
import loadWebfonts from './modules/webfont-loader';
import menu from './modules/menu';

// Flag JS as being supported
const docEl = document.documentElement;
docEl.classList.replace('no-js', 'has-js');

// Run
loadWebfonts();
menu();
