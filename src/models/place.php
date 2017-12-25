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

    // Return region information
    public function region()
    {
        return $this->parent()->title();
    }

    // Return region information
    public function country()
    {
        return $this->parent()->parent()->title();
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

    // Get nearby places (with images)
    public function nearby()
    {
        $point = geo::point($this->location());
        $places = page('places')->grandChildren()->children()->filter(function ($page) {
            return $page->hasImages();
        });

        $nearby = $places->filterBy('location', 'radius', [
            'lat' => $point->lat(),
            'lng' => $point->lng(),
            'radius' => 50
        ])->limit(4);

        return $nearby;
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
