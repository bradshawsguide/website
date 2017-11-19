<?php
// Create properties from page information
$properties = [
    'title' => (string) $page->title(),
    'url' => (string) $page->url()
];

// Create `Feature`
$feature = [
    'type' => 'Feature',
    'geometry' => generatePoint($page),
    'properties' => $properties
];

// Encode array as JSON
echo json_encode($feature);
