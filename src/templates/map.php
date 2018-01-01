<html>
    <head>
        <?= css('/assets/map.css') ?>
        <?= js('/assets/map.js', true) ?>
    </head>
    <body>
        <div id="map" data-zoom="<?= get('zoom') ?>"></div>
        <script>
            map('#map','<?= url(kirby()->request()->query()->geojson()) ?>');
        </script>
    </body>
</html>
