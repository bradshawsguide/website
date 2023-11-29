<?php

// Alphabetise a given page array or tag array and return it for further
// processing/display.
// https://github.com/shoesforindustry/kirby-plugins-alphabetise
// Returns an array
function alphabetise($parent, $options = [])
{
    // Default key values
    // As we are using ksort the default 'orderby' is SORT_REGULAR
    // To sort with number first you can use 'orderby' set to SORT_STRING
    // Other ksort sort_flags may be usuable but not tested!
    $defaults = [
        "key" => "title",
        "orderby" => SORT_REGULAR,
    ];

    // Merge defaults and options
    $options = array_merge($defaults, $options);

    // Gets the input into a two dimensional array - uses '~' as separator;
    foreach ($parent as $item) {
        $temp = explode("~", $item->{$options["key"]}());
        $temp = $temp[0];
        $temp = strtolower($temp);
        $array[$temp][] = $item;
    }

    if (!empty($array)) {
        // Make an array of key and data
        foreach ($array as $temp => $item) {
            if (strlen($temp) < 2) {
                $temp = $temp . $temp;
                $array[substr($temp, 0, 2)][] = $item[0];
            } else {
                $array[substr($temp, 0, 1)][] = $item[0];
            }
            unset($array[$temp]);
        }

        // If all okay $array will be returned and sorted
        ksort($array, $options["orderby"]);
    } else {
        $array = [
            "Alphabetise: Problem with array or invalid key! Make sure your array is valid, not empty and that the key is valid for this type of array." =>
                "Error",
        ];
    }

    return $array;
}
