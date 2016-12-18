<? snippet('head') ?>

<article class="c-page">
  <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
  <link rel="stylesheet" href="//unpkg.com/leaflet@1.0.2/dist/leaflet.css" />

  <div id="map" style="height: 440px"></div>

  <script src="/markers.json"></script>
  <script>
    var $ = document.querySelector.bind(document);
    var mapContainer = $('.c-main');

    var map = L.map(mapContainer, {
      center: [51.5, -1.25],
      minZoom: 2,
      zoom: 8
    })

    L.tileLayer('https://{s}.tile.thunderforest.com/transport/{z}/{x}/{y}@2x.png?apikey=d3e9601592c94e29ba6a599abb5b0e93', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      subdomains: ['a', 'b', 'c']
    }).addTo(map)

    var myIcon = L.icon({
      iconUrl: '/assets/images/pin24.png',
      iconRetinaUrl: '/assets/images/pin48.png',
      iconSize: [29, 24],
      iconAnchor: [9, 21],
      popupAnchor: [0, -14]
    });

    for (var i=0; i < markers.length; ++i) {
      L.marker([markers[i].lat, markers[i].lng], {icon: myIcon})
      .bindPopup( '<a href="' + markers[i].url + '">' + markers[i].name + '</a>' )
      .addTo(map);
    }
  </script>
</article>

<? snippet('foot') ?>
