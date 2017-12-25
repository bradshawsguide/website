<?php
snippet('head');

foreach (sections() as $section) {
    $routesCount = count($section['routes']);

    if ($routesCount > 0) {
        $continue = html::a($section['url'], $routesCount.' routes');
    } else {
        $continue = '<em>Coming soon</em>';
    }

    pattern('common/section/section', [
        'uid' => $section['title'],
        'url' => $section['url'],
        'title' => $section['title'],
        'label' => $section['label'],
        'content' => $section['desc'],
        'continue' => $continue
    ]);
};

snippet('foot');
