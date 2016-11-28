export default function() {

  // Feature detect
  if (!('querySelector' in document) || !('geolocation' in navigator)) return;

  // Constants
  const $ = document.querySelector.bind(document);
  const $$ = document.querySelectorAll.bind(document);
  const searchEl = $('.c-navigation__list');
  const template = $('.c-geo');
  const clone = document.importNode(template.content, true);

  // Activate geo search button
  searchEl.appendChild(clone);

  // Request current position
  navigator.geolocation.getCurrentPosition(geoSuccess, geoFail);

  function geoSuccess(position) {
    const lat = position.coords.latitude.toFixed(4);
    const lng = position.coords.longitude.toFixed(4);
    const geoButton = $('.c-geo__button');

    geoButton.disabled = false;
    geoButton.addEventListener('click', function(e) {
      window.location.href = '/search?g=' + lat + ',' + lng;
    });
  };

  function geoFail() {
    alert('Could not locate you.');
  }
}
