<?php

define('DS', DIRECTORY_SEPARATOR);

// Load kirby
require(__DIR__ . DS . 'kirby' . DS . 'bootstrap.php');

// Configure folder locations
$kirby = kirby();
$kirby->roots->site    = '../src';
$kirby->roots->content = '../src/content';

// Render
echo $kirby->launch();
