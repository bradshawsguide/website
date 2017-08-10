export default function () {
  const $ = document.querySelector.bind(document);

  // Feature detect
  if (!('querySelector' in document) || !('geolocation' in navigator)) {
    return;
  }

  const container = $('.c-search');

  const geo = function (el) {
    const template = $('.c-geo');
    const clone = document.importNode(template.content, true);

    el.appendChild(clone);
    const button = $('.c-geo__button');

    button.onclick = function () {
      // Geo location options
      const geoOptions = {
        maximumAge: 30000,
        timeout: 27000
      };

      // Geo location provided and successful
      const geoSuccess = function (position) {
        const lat = position.coords.latitude.toFixed(4);
        const lng = position.coords.longitude.toFixed(4);

        window.location.href = '/search?g=' + lat + ',' + lng;
      };

      // Geo location not provided or unsuccessful
      const geoFail = function () {
        button.classList.add('has-failed');
      };

      // Request current position
      navigator.geolocation.getCurrentPosition(geoSuccess, geoFail, geoOptions);
    };
  };

  if (container) {
    geo(container);
  }
}
