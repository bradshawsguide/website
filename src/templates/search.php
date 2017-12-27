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

    pattern('common/pagination', [
        'pagination' => $results->pagination()
    ]);
} else {
    pattern('common/section/results', [
        'title' => 'No matches found'
    ]);
}

snippet('foot');
