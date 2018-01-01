export default function () {
  const buttons = document.querySelectorAll('[data-geo]');

  for (let i = 0; i < buttons.length; i++) {
    geo(buttons[i]);
  }

  function geo(initiator) {
    // If geolocation not supported, remove button
    if (!('geolocation' in navigator)) {
      initiator.parentNode.removeChild(initiator);
    }

    initiator.onclick = function () {
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
        initiator.dataset.geo = false;
      };

      navigator.geolocation.getCurrentPosition(geoSuccess, geoFail, geoOptions);
    };
  }
}
