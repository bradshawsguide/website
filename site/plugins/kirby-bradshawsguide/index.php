<?php

require_once __DIR__ . "/helpers/index.php";

Kirby::plugin("bradshawsguide/kirby", [
    "components" => [
        "template" => require_once __DIR__ . "/components/template.php",
    ],
    "pageMethods" => [
        "excerpt" => require_once __DIR__ . "/page-methods/excerpt.php",
        "shortTitle" => require_once __DIR__ . "/page-methods/short-title.php",
    ],
    "tags" => [
        "branch" => require_once __DIR__ . "/tags/branch.php",
        "distances" => require_once __DIR__ . "/tags/distances.php",
        "figure" => require_once __DIR__ . "/tags/figure.php",
        "navigation" => require_once __DIR__ . "/tags/navigation.php",
        "place" => require_once __DIR__ . "/tags/place.php",
        "route" => require_once __DIR__ . "/tags/route.php",
        "smcp" => require_once __DIR__ . "/tags/smcp.php",
        "wikipedia" => require_once __DIR__ . "/tags/wikipedia.php",
    ],
]);
