<?php

return function ($site) {
    return $site->find("sections")->children();
};
