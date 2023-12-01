<?php

snippet("head");

snippet("header", [
    "title" => "Stations A-Z",
    "modifiers" => ["index"],
]);

$stations = $page
    ->children()
    ->listed()
    ->sortBy("title", "asc")
    ->group(function ($page) {
        return substr($page->title(), 0, 1);
    });

foreach ($stations as $letter => $items) {
    snippet("index", [
        "items" => $items,
        "letter" => $letter,
        "listDisplay" => "columns",
    ]);
}

snippet("foot");
