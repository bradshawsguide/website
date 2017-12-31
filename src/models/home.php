<?php

class HomePage extends Page
{
    public function featured()
    {
        $featured = $this->feature()->yaml();

        array_walk($featured, function (&$value, $key) {
            $value = page('places/'.$value);
        });

        return $featured;
    }
}
