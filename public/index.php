<?php

include '../vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        'index' => __DIR__,
        'cache' => __DIR__.'/cache',
        'sessions' => __DIR__.'/sessions',
        'root' => $root = dirname(__DIR__),
        'site' => $root.'/src',
        'content' => $root.'/src/content',
        'snippets' => $root.'/src/patterns/components'
    ]
]);

echo $kirby->render();
