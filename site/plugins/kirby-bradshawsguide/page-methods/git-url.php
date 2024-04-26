<?php

return function () {
    if ($this->text()->isEmpty()) {
        return false;
    }

    $src = kirby()->roots()->content() . "/";
    $href = [
        "git" => "https://github.com/bradshawsguide/content/edit/main",
        "path" => str_replace($src, "", $this->root()),
        "file" => $this->template() . ".txt",
    ];
    return implode("/", $href);
};
