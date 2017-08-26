// Load dependancies
import turbolinks from 'turbolinks';
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
import search from './modules/search';
// REVIEW: import typography from './modules/typography';

// Run
turbolinks.start();
loadWebfonts();
geo();
search();
// REVIEW: typography();
