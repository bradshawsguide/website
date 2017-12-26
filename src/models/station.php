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

    // Return corresponding `PlacePage` if exists, else return `StationPage`
    public function placePage()
    {
        if (!$this->place()->empty()) {
            $placePage = page('places/'.$this->country().DS.$this->region().DS.$this->place());
            ;
        } else {
            $placePage = $this;
        }

        return $placePage;
    }

    public function routesCount()
    {
        $number = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $routes = count($this->placePage()->routes());

        if ($routes > 1) {
            return $number->format($routes).' routes';
        } else {
            return $number->format($routes).' route';
        }
    }
}
