<?php function ariacurrent($test, $type = "page")
{
    return Html::attr("aria-current", $test ? $type : false);
}
