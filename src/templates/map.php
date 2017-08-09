<? snippet('head') ?>

<article class="c-page">
  <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
  <link rel="stylesheet" href="//unpkg.com/leaflet@1.0.2/dist/leaflet.css" />

  <div id="map" style="height: 440px"></div>

  <script>
    const $ = document.querySelector.bind(document);
    const mapContainer = $('.c-main');

    const map = L.map(mapContainer, {
      center: [51.5, -1.25],
      minZoom: 2,
      zoom: 8
    });

    const url = '<?= url('/stations.geojson') ?>';

    function pointToLayer(feature, latlng) {
      return L.circleMarker(latlng, {
        radius: 3,
        fillColor: "#30241d",
        fillOpacity: 1,
        weight: 0,
        opacity: 1
      });
    }

    function onEachFeature(feature, layer) {
      if (feature.properties && feature.properties.title) {
        const popupContent = `<a href="${feature.properties.url}">${feature.properties.title}</a>`;
        layer.bindPopup(popupContent);
      }
    }

    fetch(url)
      .then((response) => response.json())
      .then(function(data) {
        L.geoJSON(data, {
          pointToLayer: pointToLayer,
          onEachFeature: onEachFeature
        }).addTo(map);
      })

    L.tileLayer('https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}@2x.png?apikey=d3e9601592c94e29ba6a599abb5b0e93', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      subdomains: ['a', 'b', 'c']
    }).addTo(map)
  </script>
</article>

<? snippet('foot') ?>
