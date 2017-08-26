// Load dependancies
// DISABLED: import turbolinks from 'turbolinks';
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
import search from './modules/search';
// REVIEW: import typography from './modules/typography';

// Run
// DISABLED: turbolinks.start();
loadWebfonts();
geo();
search();
// REVIEW: typography();
