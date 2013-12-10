<?php

require_once('site/plugins/lessc/lessc.php');

// Compile and cache LESS CSS file
function autoCompileLess($input, $output) {
    $inputFile = $_SERVER['DOCUMENT_ROOT'].$input;
    $outputFile = $_SERVER['DOCUMENT_ROOT'].$output;
    $cacheFile = $inputFile.".cache";

    if (file_exists($cacheFile)) {
        $cache = unserialize(file_get_contents($cacheFile));
    } else {
        $cache = $inputFile;
    }

    $less = new lessc;
    $newCache = $less->cachedCompile($cache);

    if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
        file_put_contents($cacheFile, serialize($newCache));
        file_put_contents($outputFile, $newCache['compiled']);
    }
}

autoCompileLess('/assets/styles/less/styles.less', '/assets/styles/styles.css');

?>