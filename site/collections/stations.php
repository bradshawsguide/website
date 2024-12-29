<?php

return function () {
    return page("stations")->children()->listed()->sortBy("title", "asc");
};
