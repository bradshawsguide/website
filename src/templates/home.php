<?php
snippet('head');

if ($image = $page->image('cover.jpg')) {
    pattern('common/figure/cover', [
        'image' => $image
    ]);
}

pattern('common/inquire');

pattern('common/header', [
    'level' => 2,
    'title' => 'Routes & Tours',
    'subtitle' => '(In four sections), adapted to the railway system:',
    'modifiers' => ['index']
]);

foreach (sections() as $section) {
    $routesCount = count($section['routes']);
    $continue = brick('p');

    if ($routesCount > 0) {
        $continue->html(html::a($section['url'], $routesCount.' routes'));
    }

    $title = brick('a');
    $title->attr('href', $section['url']);
    $title->attr('aria-label', $section['label']);
    $title->html($section['title']);

    pattern('common/section/text', [
        'level' => 3,
        'title' => $title,
        'text' => $section['desc'].$continue
    ]);
};

pattern('common/section/list', [
    'title' => 'Best Of The Guide',
    'modifiers' => ['offset'],
    'items' => $page->featured(),
    'component' => 'common/feature',
    'display' => 'grid'
]);

snippet('foot');
