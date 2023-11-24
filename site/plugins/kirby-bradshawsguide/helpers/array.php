<?php

// Flatten array
// $array = Array you wish to flatten
// https://gist.github.com/kohnmd/11197713
// Returns a single dimensional array
function array_flatten(array $array)
{
    $flattened_array = [];

    array_walk_recursive($array, function ($a) use (&$flattened_array) {
        $flattened_array[] = $a;
    });

    return $flattened_array;
}

// Extract arrays from multidimensional array
// $array = Array you wish to extract arrays from
// https://forum.getkirby.com/t/9042
// Returns an array of single dimensional arrays
function array_extract_arrays(array $array)
{
    $chunks = [];

    foreach ($array as $key => $value) {
        if (is_array($value)) {
            $chunks[0][$key] = $value[0];
            $chunks = array_merge($chunks, array_extract_arrays($value));
        } else {
            $chunks[0][$key] = $value;
        }
    }

    return $chunks;
}
