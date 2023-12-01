<?php

return function () {
    return page("companies")
        ->children()
        ->listed()
        ->sortBy("title", "asc")
        ->group(function ($page) {
            return substr($page->title(), 0, 1);
        });
};
