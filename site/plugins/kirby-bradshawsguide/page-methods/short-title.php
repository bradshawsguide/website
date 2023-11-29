<?php

return function () {
    return $this->title_short()->isNotEmpty()
        ? $this->title_short()
        : $this->title();
};
