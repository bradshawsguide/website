<?php
snippet('head');

snippet('header', [
    'title' => $page->title(),
    'modifiers' => ['index']
]);

$companies = $page->children()->sortBy('title', 'asc');

foreach (alphabetise($companies) as $letter => $items) {
    snippet('index', [
        'items' => $items,
        'letter' => $letter
    ]);
};

snippet('foot');
