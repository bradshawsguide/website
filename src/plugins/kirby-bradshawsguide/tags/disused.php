<?php

return [
    'html' => function ($tag) {
        $slug = $tag->attr('disused').'/';
        $slug = str_replace('.shtml/', '.shtml', $slug);

        return Html::tag('a', 'Site record on Disused Stations', [
            'href' => 'http://www.disused-stations.org.uk/'.$slug
        ]);
    }
];
