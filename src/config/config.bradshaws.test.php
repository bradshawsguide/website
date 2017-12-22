<?php

// Debugging
c::set('debug', true);
c::set('whoops', false);

// URLs
c::set('url', 'https://bradshaws.test');

// Tiny URL Setup
c::set('tinyurl.url', 'https://bradshaws.test');

// Disable caching
c::set('cache', false);

// Route required to import stations CSV
// c::set('routes', array(
//     array(
//         'pattern' => 'import',
//         'action' => function () {
//             $filepath = kirby()->roots()->content().DS.'stations.csv';
//             $csv = csv($filepath, $parse_header = 'false', $delimiter = ',', $length = 8000);
//             $csv->createPages('stations', 'uid', $template = 'station');
//         }
//     )
// ));

// Ensure text files are automatically formatted using preferred style
data::$adapters['kd']['encode'] = function($data) {
  $result = array();
  foreach($data AS $key => $value) {
    $key = str::lower(str::slug($key));

    if(empty($key) || is_null($value)) continue;

    // Avoid problems with arrays
    if(is_array($value)) {
      $value = '';
    }

    // Escape accidental dividers within a field
    $value = preg_replace('!\n----(.*?\R*)!', "\n ----$1", $value);

    // Multi-line content
    if(preg_match('!\R!', $value, $matches)) {
      $result[$key] = $key . ": \n\n" . trim($value);
    // Single-line content
    } else {
      $result[$key] = $key . ': ' . trim($value);
    }
  }

  return implode("\n----\n", $result);
};
