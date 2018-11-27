<?php
snippet('head');

snippet('header', [
    'title' => $title
]);

if (size($results)) {
    snippet('section/list', [
        'title' => $results->pagination()->total().' pages found',
        'items' => $results,
        'component' => 'result'
    ]);

    if ($results->pagination()->hasPages()) {
        snippet('pagination', [
            'pagination' => $results->pagination()
        ]);
    }
} else {
    snippet('section/text', [
        'title' => 'No matches found',
        'text' => 'Make sure that all words are spelled correctly, or try using different keywords.'
    ]);
    snippet('inquire', [
        'title' => 'Search again'
    ]);
}

snippet('foot');
