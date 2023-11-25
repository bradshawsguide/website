<?php

snippet('head');

snippet('inquire', [
    'title' => 'Search '.site()->title(),
    'modifiers' => ['home']
]);

snippet('header', [
    'level' => 2,
    'title' => Html::a(page('routes')->url(), 'Routes & Tours'),
    'subtitle' => '(In four sections), adapted to the railway system:',
    'modifiers' => ['index']
]);

snippet('page/content');

snippet('section/places', [
    'modifiers' => ['offset']
]);

snippet('foot');
