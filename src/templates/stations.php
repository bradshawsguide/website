<?php
snippet('head');

pattern('common/page/header', [
    'title' => 'Stations A-Z',
    'modifiers' => ['index']
]);

$stations = $page->children()->sortBy('title', 'asc');

foreach (alphabetise($stations) as $letter => $items) {
    pattern('common/index', [
        'items' => $items,
        'letter' => $letter,
        'listAs' => 'columns'
    ]);
};

snippet('foot');
