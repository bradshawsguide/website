<html>
  <head>
    <link rel="stylesheet" href="//unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
        width: 100%;
      }
    </style>
    <script src="/assets/map.js"></script>
  </head>
  <body>
    <div id="map"></div>
    <script>
      map('#map','<?= url(kirby()->request()->query()->geojson().'.geojson') ?>');
    </script>
  </body>
</html>
