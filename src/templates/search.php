<?php
snippet('head');

pattern('common/page/header', [
    'title' => $title
]);

if (count($results)) {
    pattern('common/section/list', [
        'title' => $results->pagination()->items().' pages found',
        'items' => $results,
        'component' => 'common/result'
    ]);

    if ($results->pagination()->hasPages()) {
        pattern('common/pagination', [
            'pagination' => $results->pagination()
        ]);
    }
} else {
    pattern('common/section/text', [
        'title' => 'No matches found',
        'text' => 'Make sure that all words are spelled correctly, or try using different keywords.'
    ]);
    pattern('common/inquire', [
        'title' => 'Search again'
    ]);
}

snippet('foot');
