export default function () {
  const $ = document.querySelector.bind(document);

  const searchButton = $('.c-navigation__item--search a');
  searchButton.setAttribute('role', 'button');

  const searchDismiss = document.createElement('button');
  searchDismiss.classList.add('c-search__dismiss');
  searchDismiss.innerText = 'Close';

  const searchDialog = $('.c-search');
  searchDialog.appendChild(searchDismiss);

  searchButton.onclick = function (event) {
    searchDialog.classList.add('c-search--overlay');
    event.preventDefault();
  };

  searchDismiss.onclick = function () {
    searchDialog.classList.remove('c-search--overlay');
  };
}
