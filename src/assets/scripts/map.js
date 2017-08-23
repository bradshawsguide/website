import Leaflet from 'leaflet';

export default function (el, url) {
  const $ = document.querySelector.bind(document);
  const container = $(el);

  const map = Leaflet.map(container, {
    center: [51.5, -1.25],
    minZoom: 2,
    zoom: 8
  });

  const featurePoint = function (feature, latlng) {
    return Leaflet.circleMarker(latlng, {
      radius: 3,
      fillColor: '#30241d',
      fillOpacity: 1,
      weight: 0,
      opacity: 1
    });
  };

  const featurePopup = function (feature, layer) {
    if (feature.properties && feature.properties.title) {
      const popupContent = `<a target="_parent" href="${feature.properties.url}">${feature.properties.title}</a>`;
      layer.bindPopup(popupContent);
    }
  };

  Leaflet.tileLayer('https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}@2x.png?apikey=d3e9601592c94e29ba6a599abb5b0e93', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
    subdomains: ['a', 'b', 'c']
  }).addTo(map);

  fetch(url)
    .then(response => response.json())
    .then(data => {
      const geojsonLayer = Leaflet.geoJSON(data, {
        pointToLayer: featurePoint,
        onEachFeature: featurePopup
      }).addTo(map);

      map.fitBounds(geojsonLayer.getBounds());
    });
}
