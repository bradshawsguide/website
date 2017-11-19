<?php

$page = page('places/england/sussex/brighton');

return [
    'defaults' => [
        'info' => $page->info()->yaml(),
        'notes' => $page->notes()->yaml()
    ]
];
