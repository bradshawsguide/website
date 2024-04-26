<?php

class PlacePage extends Kirby\Cms\Page
{
    // Return geo coordinates from corresponding station
    public function geo()
    {
        // Get station that has the same name as this place
        // If multiple stations serve place, `Station` key gives the nearest
        $id = $this->station()->isNotEmpty()
            ? $this->station()
            : "stations/" . $this->uid();

        if ($station = page($id)) {
            return $station->geo();
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
    public function nearby()
    {
        if ($geo = $this->geo()) {
            $point = geo::point($geo);

            // Find all PlacePages with images
            $places = page("places")
                ->grandChildren()
                ->children()
                ->filter(function ($page) {
                    return $page->hasImages();
                });

            // Exclude this page from query
            $places = $places->filterBy("title", "!=", $this->title());

            // Return nearby places
            $nearby = $places
                ->filterBy("geo", "radius", [
                    "lat" => $point->lat(),
                    "lng" => $point->lng(),
                    "radius" => 50,
                ])
                ->limit(3);

            return $nearby;
        } else {
            return [];
        }
    }

    // Convert UIDs listed under `route:` to array of pages
    public function routes()
    {
        $routes = $this->route()->yaml();

        array_walk($routes, function (&$value, $key) {
            $value = page("routes/" . $value);
        });

        return $routes;
    }

    // Convert UIDs listed under `company:` to array of pages
    public function companies()
    {
        $companies = $this->company()->yaml();

        array_walk($companies, function (&$value, $key) {
            $value = page("companies/" . $value);
        });

        return $companies;
    }
}
