<?php

return [
    "attr" => ["text"],
    "html" => function ($tag) {
        $template = $tag->value();

        $parents = [
            "company" => "companies",
        ];

        $parent = $parents[$template] ?? $template . "s";

        $count = site()
            ->index()
            ->filterBy("intendedTemplate", $template)
            ->count();

        $href = site()->find($parent);

        $text = $tag->text() ?? $parent;

        if ($href) {
            return Html::tag("a", $count . " " . $text, [
                "href" => $href,
            ]);
        } else {
            return $count . " " . $text;
        }
    },
];
