<?php

return function () {
    return page("stations")
        ->children()
        ->listed()
        ->sortBy("title", "asc")
        ->group(function ($page) {
            return substr($page->title(), 0, 1);
        });
};
