<?php

return [
    "cache" => [
        "pages" => [
            "active" => true,
            "ignore" => fn($page) => $page->cacheable()->value() === false,
        ],
    ],
    "debug" => false,
    "url" => "https://bradshaws.guide",
    "whoops" => false,
];
