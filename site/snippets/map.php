<iframe class="<?= classList(
    "c-map",
    $modifiers ?? null
) ?>" src="/map?geojson=<?= $url ?>" title="<?= $title ?>" loading="lazy"></iframe>
