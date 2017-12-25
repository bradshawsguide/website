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

    // API consistency
    public function links()
    {
        $links = array(
            'wikipedia' => (!$this->wikipedia()->empty()) ?
                '- (wikipedia: '.urlencode($this->wikipedia()).')' : '',
            'trainline' => (!$this->code()->empty()) ?
                '- (trainline: '.$this->uid().')' : '',
            'disused' => (!$this->disused()->empty()) ?
                '- (disused: '.$this->disused().')' : '',
        );

        return implode("\n", $links);
    }

    // Return corresponding `PlacePage` if exists, else return `StationPage`
    public function placePage()
    {
        if (!$this->place()->empty()) {
            return page('places/'.$this->country().DS.$this->region().DS.$this->place());
            ;
        } else {
            return $this;
        }
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
