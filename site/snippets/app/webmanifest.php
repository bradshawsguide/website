<?php

// Populate manifest with $site data
$manifest = [
    'lang' => 'en-gb',
    'name' => (string) $site->title(),
    'short_name' => (string) $site->title_short(),
    'display' => 'standalone',
    'start_url' => '/',
    'scope' => '/',
    'theme_color' => (string) $site->theme_color(),
    'background_color' => (string) $site->background_color(),
    'icons' => [[
        'src' => url('assets/icons/app.png'),
        'sizes' => '512x512',
        'type' => 'image/png'
    ]]
];

// Encode as JSON
echo json_encode($manifest);
