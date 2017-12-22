<?php

class PlacePage extends Page
{
    // Get location information from corresponding station
    public function geolng()
    {
        if ($station = page('stations/'.$this->uid())) {
            return $station->geolng();
        }
    }

    // Get location information from corresponding station
    public function geolat()
    {
        if ($station = page('stations/'.$this->uid())) {
            return $station->geolat();
        }
    }

    // Make title_full() include `suffix:` if provided
    public function displayTitle()
    {
        $suffix = $this->title_suffix();
        $displayTitle = $this->title();

        if (!$suffix->empty()) {
            $displayTitle = $this->title().' <small>'.$suffix.'</small>';
        };

        return $displayTitle;
    }

    // Return `title_short` if exists, else normal title
    public function shortTitle()
    {
        if (!$this->title_short()->empty()) {
            $shortTitle = $this->title_short();
        } else {
            $shortTitle = $this->title();
        };

        return $shortTitle;
    }

    // Return `title_later` if exists, else normal title
    public function currentTitle()
    {
        if (!$this->title_later()->empty()) {
            $currentTitle = $this->title_later();
        } else {
            $currentTitle = $this->title();
        };

        return $currentTitle;
    }

    // Return `desc` if exists, else excerpt of text
    public function excerpt()
    {
        if (!$this->desc()->empty()) {
            $excerpt = $this->desc();
        } else {
            $excerpt = excerpt($this->text(), $length = 40, $mode = 'words');
        };

        return $excerpt;
    }

    // Convert UIDs listed under `route:` to array of pages
    public function routes()
    {
        $routes = $this->route()->yaml();

        array_walk($routes, function (&$value, $key) {
            $value = page('routes/'.$value);
        });

        return $routes;
    }
}
