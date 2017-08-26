export default function () {
  const $ = document.querySelector.bind(document);

  const searchButton = $('.c-navigation__item--search a');
  searchButton.setAttribute('role', 'button');

  const searchDismiss = document.createElement('button');
  searchDismiss.setAttribute('type', 'button');
  searchDismiss.setAttribute('aria-label', 'Dismiss search form');
  searchDismiss.classList.add('c-search__button', 'c-search__button--dismiss');
  searchDismiss.innerText = '✕';

  const searchDialog = $('.c-search');
  const searchInput = $('.c-search__input');
  const searchForm = $('.c-search__form');
  searchForm.appendChild(searchDismiss);

  searchButton.onclick = function (event) {
    searchDialog.classList.add('c-search--overlay');
    searchInput.focus();
    event.preventDefault();
  };

  searchDismiss.onclick = function () {
    searchDialog.classList.remove('c-search--overlay');
  };
}
