<?php

kirbytext::$tags['figure'] = array(
    'html' => function ($tag) {
        return pattern('common/figure/image', [
            'image' => $tag->attr('figure', $tag->page()->image())
        ], true);
    }
);
