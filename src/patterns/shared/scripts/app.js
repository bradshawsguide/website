// Load dependancies
import loadWebfonts from './modules/webfont-loader';
import geo from './modules/geo';
import toggler from './modules/toggler';

// Run
loadWebfonts();
geo();

const $ = document.querySelector.bind(document);
toggler({
  toggleWith: $('.c-search__toggle'),
  dismissWith: $('.c-search__dismiss')
});
