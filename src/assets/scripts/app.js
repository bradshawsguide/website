// Load dependancies
import turbolinks from 'turbolinks';
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
// REVIEW: import typography from './modules/typography';

// Run
turbolinks.start();
loadWebfonts();
geo();
// REVIEW: typography();
