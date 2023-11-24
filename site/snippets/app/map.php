<html>
    <head>
        <?= vite()->css('assets/styles/map.css') ?>
        <?= vite()->js('assets/scripts/map.js', ['type' => 'module']) ?>
    </head>
    <body>
        <div id="map" data-zoom="<?= get('zoom') ?>" data-geojson="<?= url(get('geojson')) ?>"></div>
    </body>
</html>
