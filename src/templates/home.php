<?php
snippet('head');

foreach (sections() as $section) {
    $routesCount = count($section['routes']);
    $continue = brick('p');

    if ($routesCount > 0) {
        $continue->html(html::a($section['url'], $routesCount.' routes'));
    } else {
        $continue->html(kirbytext('*Coming soon*'));
    }

    $title = brick('a');
    $title->attr('href', $section['url']);
    $title->attr('aria-label', $section['label']);
    $title->html($section['title']);

    pattern('common/section/text', [
        'title' => $title,
        'text' => $section['text'].$continue
    ]);
};

snippet('foot');
