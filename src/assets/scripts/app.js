// Load dependancies
import checkJS from './modules/has-js';
import loadWebfonts from './modules/webfont-loader';
// TODO: import enhanceLinks from './modules/links';
import geo from './modules/geo';
import typography from './modules/typography';

// Run
checkJS();
loadWebfonts();
// TODO: enhanceLinks();
geo();
typography();
