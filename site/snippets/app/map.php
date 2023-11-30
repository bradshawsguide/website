<html>
    <head>
        <?= vite()->css("assets/styles/app.css") ?>
        <?= vite()->js("assets/scripts/map.js", ["type" => "module"]) ?>
    </head>
    <body>
        <b-map zoom="<?= get("zoom") ?>" src="<?= url(get("geojson")) ?>">
            <span slot="attribution">&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a></span>
        </b-map>
    </body>
</html>
