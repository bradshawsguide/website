<?php
snippet('head');

pattern('common/inquire', [
    'modifiers' => ['home']
]);

pattern('common/header', [
    'level' => 2,
    'title' => html::a(page('routes')->url(), 'Routes & Tours'),
    'subtitle' => '(In four sections), adapted to the railway system:',
    'modifiers' => ['index']
]);

pattern('common/page/content');

pattern('common/section/places', [
    'modifiers' => ['offset']
]);

snippet('foot');
