<?php

class PlacePage extends Page
{
    // Get location information from corresponding station
    public function location()
    {
        if ($station = page('stations/'.$this->uid())) {
            $location = [
                $station->geolat()->float(),
                $station->geolng()->float()
            ];

            return implode(',', $location);
        }
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

    // Return region information
    public function region()
    {
        return $this->parent()->title();
    }

    // Return region information
    public function country()
    {
        $parent = $this->parent();
        return $parent->parent()->title();
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

    // Convert UIDs listed under `company:` to array of pages
    public function companies()
    {
        $companies = $this->company()->yaml();

        array_walk($companies, function (&$value, $key) {
            $value = page('companies/'.$value);
        });

        return $companies;
    }
}
