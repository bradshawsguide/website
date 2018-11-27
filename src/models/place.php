<?php

class PlacePage extends Kirby\Cms\Page
{
    // Get location information from corresponding station
    public function location()
    {
        // If multiple stations serve place, `station:` key gives us preferred
        $uid = ($this->station()->isNotEmpty()) ? $this->station() : $this->uid();

        if ($station = page('stations/'.$uid)) {
            $location = [
                $station->geolat()->float(),
                $station->geolng()->float()
            ];

            return implode(',', $location);
        }
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

    // Get nearby places (with images)
    // TODO: Add location information to place data
    // IDEA: A named station UID in the content?
    public function nearby()
    {
        $point = geo::point($this->location());

        // Find all PlacePages with images
        $places = page('places')->grandChildren()->children()->filter(function ($page) {
            return $page->hasImages();
        });

        // Exclude this page from query
        $places = $places->filterBy('title', '!=', $this->title());

        // Return nearby places
        $nearby = $places->filterBy('location', 'radius', [
            'lat' => $point->lat(),
            'lng' => $point->lng(),
            'radius' => 50
        ])->limit(3);

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
