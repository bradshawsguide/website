<?php

class StationPage extends Page
{
    // Location
    public function location()
    {
        $location = [
            $this->geolat()->float(),
            $this->geolng()->float()
        ];

        return implode(',', $location);
    }

    // Trainline slug
    public function trainline()
    {
        if (!$this->subtitle()->empty()) {
            $trainline = str::slug($this->subtitle());
        } else {
            $trainline = $this->uid();
        }

        return $trainline;
    }

    // API consistency
    public function links()
    {
        $links = array(
            'wikipedia' => (!$this->wikipedia()->empty()) ?
                '- (wikipedia: '.urlencode($this->wikipedia()).')' : '',
            'trainline' => (!$this->nationalrail()->empty()) ?
                '- (trainline: '.$this->trainline().')' : '',
            'disused' => (!$this->disused()->empty()) ?
                '- (disused: '.$this->disused().')' : '',
        );

        return implode("\n", $links);
    }

    // Convert UIDs listed under `route:` to array of pages
    public function routes()
    {
        $routes = page('routes')->children()->filterBy('stops', '*=', $this->uid());

        return $routes;
    }

    public function routesCount()
    {
        $number = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $routes = count($this->routes());

        if ($routes > 1) {
            $routesCount = $number->format($routes).' routes';
        } else {
            $routesCount = $number->format($routes).' route';
        }

        return $routesCount;
    }

    // Return corresponding `PlacePage` if exists, else return `StationPage`
    public function placePage()
    {
        if (!$this->place()->empty()) {
            return page('places/'.$this->country().DS.$this->region().DS.$this->place());
            ;
        }
    }
}
