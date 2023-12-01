<?php

snippet("head");

snippet("header", [
    "title" => $page->title(),
    "modifiers" => ["index"],
]);

$companies = $page
    ->children()
    ->listed()
    ->sortBy("title", "asc")
    ->group(function ($page) {
        return substr($page->title(), 0, 1);
    });

foreach ($companies as $letter => $items) {
    snippet("index", [
        "items" => $items,
        "letter" => $letter,
    ]);
}

snippet("foot");
