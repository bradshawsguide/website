// Load dependancies
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
import toggler from './modules/toggler';

// Run
loadWebfonts();
geo();

const $ = document.querySelector.bind(document);
toggler({
  toggleWith: $('[aria-controls="search"]'),
  dismissWith: $('.c-search__dismiss')
});

toggler({
  toggleWith: $('[aria-controls="navigation"]'),
  dismissWith: $('.c-navigation__dismiss'),
  modal: true
});
