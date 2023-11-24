<?php

return [
    'html' => function ($tag) {
        return Html::tag('span', $tag->value(), [
            'class' => 'smcp'
        ]);
    }
];
