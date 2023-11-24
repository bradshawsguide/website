export default function () {
  const buttons = document.querySelectorAll('[data-geo]');

  for (const button of buttons) {
    geo(button);
  }

  function geo(initiator) {
    // If geolocation not supported, remove button
    if (!('geolocation' in navigator)) {
      initiator.remove();
    }

    initiator.addEventListener('click', () => {
      const geoOptions = {
        maximumAge: 30_000,
        timeout: 27_000
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
    });
  }
}
