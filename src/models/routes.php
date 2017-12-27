<?php

class RoutesPage extends Page
{
    public function text()
    {
        if ($sectionParam = param('section')) {
            $sectionIndex = $sectionParam - 1;

            if ($sectionIndex <= 3) {
                $text = sections()[$sectionIndex]['text'];
            }
        };

        return $text;
    }
}
