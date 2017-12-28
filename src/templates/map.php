<html>
    <head>
        <link rel="stylesheet" href="/assets/map.css">
        <script src="/assets/map.js"></script>
    </head>
    <body>
        <div id="map" data-zoom="<?= get('zoom') ?>"></div>
        <script>
            map('#map','<?= url(kirby()->request()->query()->geojson()) ?>');
        </script>
    </body>
</html>
