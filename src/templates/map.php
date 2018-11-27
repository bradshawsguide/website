<html>
    <head>
        <?= css('/assets/map.css') ?>
        <?= js('/assets/map.js', ['type' => 'module']) ?>
    </head>
    <body>
        <div id="map" data-zoom="<?= get('zoom') ?>" data-geojson="<?= url(get('geojson')) ?>"></div>
    </body>
</html>
