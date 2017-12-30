export default function () {
  const $ = document.querySelector.bind(document);
  const button = $('.c-search__geo');

  // If geolocation not supported, remove button
  if (!('geolocation' in navigator)) {
    button.parentNode.removeChild(button);
  }

  button.onclick = function () {
    const geoOptions = {
      maximumAge: 30000,
      timeout: 27000
    };

    const geoSuccess = function (position) {
      const lat = position.coords.latitude.toFixed(4);
      const lng = position.coords.longitude.toFixed(4);

      window.location.href = '/search?g=' + lat + ',' + lng;
    };

    const geoFail = function () {
      button.classList.add('has-failed');
    };

    navigator.geolocation.getCurrentPosition(geoSuccess, geoFail, geoOptions);
  };
}
