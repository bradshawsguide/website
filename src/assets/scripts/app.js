// Load dependancies
// DISABLED: import turbolinks from 'turbolinks';
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
// REVIEW: import typography from './modules/typography';

// Run
// DISABLED: turbolinks.start();
loadWebfonts();
geo();
// REVIEW: typography();
