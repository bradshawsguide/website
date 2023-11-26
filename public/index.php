<?php

include '../vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base = dirname(__DIR__),
        'cache' => $base.'/site/cache',
        'site' => $base.'/site',
        'content' => $base.'/content',
    ]
]);

echo $kirby->render();
