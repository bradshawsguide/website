<?php
snippet('head');

pattern('common/page/header', [
    'title' => $page->title(),
    'modifiers' => ['index']
]);

$companies = $page->children()->sortBy('title', 'asc');

foreach (alphabetise($companies) as $letter => $items) {
    pattern('common/index', [
        'items' => $items,
        'letter' => $letter
    ]);
};

snippet('foot');
