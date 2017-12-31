// Load dependancies
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
import toggler from './modules/toggler';

// Run
loadWebfonts();
geo();

const inertEls = ['.c-banner', '.c-page', '.c-contentinfo'];

toggler({
  openWith: '[aria-controls="search"]',
  dismissWith: '.c-search__dismiss',
  inertEls
});

toggler({
  openWith: '[aria-controls="navigation"]',
  dismissWith: '.c-navigation__dismiss',
  inertEls
});
