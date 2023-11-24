<?php

// Create BEM class name list with modifiers
function classList($block, $modifiers, $seperator = '--')
{
    if ($modifiers) {
        $prefix = $block.$seperator;
        $classList = preg_filter('/^/', $prefix, $modifiers);
        array_unshift($classList, $block);

        return implode(' ', $classList);
    } else {
        return $block;
    };
};
