<?php

return function () {
    return $this->desc()->isNotEmpty()
        ? $this->desc()
        : Str::excerpt($this->text(), $length = 40, $mode = "words");
};
