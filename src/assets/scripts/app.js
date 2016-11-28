// Load dependancies
import checkJS from './modules/has-js';
import loadWebfonts from './modules/webfont-loader';
import enhanceLinks from './modules/links';
import geo from './modules/geo'

// Run
checkJS();
loadWebfonts();
//enhanceLinks();
geo();
