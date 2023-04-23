<?php

return [
    // Environment
    'cache' => false,
    'debug' => true,
    'url' => 'https://bradshaws.test',
    'whoops' => true,
    'panel' =>[
        'install' => true
    ]
];

// Ensure text files are automatically formatted using preferred style
Data::$adapters['kd']['encode'] = function ($data) {
    $result = array();
    foreach ($data as $key => $value) {
        $key = Str::lower(Str::slug($key));

        if (empty($key) || is_null($value)) {
            continue;
        }

        // Avoid problems with arrays
        if (is_array($value)) {
            $value = '';
        }

        // Escape accidental dividers within a field
        $value = preg_replace('!\n----(.*?\R*)!', "\n ----$1", $value);

        // Multi-line content
        if (preg_match('!\R!', $value, $matches)) {
            $result[$key] = $key . ": \n\n" . trim($value);
            // Single-line content
        } else {
            $result[$key] = $key . ': ' . trim($value);
        }
    }

    return implode("\n----\n", $result);
};
