<?php

return [
    'html' => function ($tag) {
        return Html::tag('a', $tag->parent()->title().' station on the Trainline', [
            'href' => 'https://www.thetrainline.com/stations/'.$tag->value()
        ]);
    }
];
