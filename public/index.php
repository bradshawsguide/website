<?php

include '../vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'base' => $base = dirname(__DIR__),
        'cache' => $base.'/cache',
        'sessions' => $base.'/sessions',
        'site' => $base.'/site',
        'content' => $base.'/content',
    ]
]);

echo $kirby->render();
