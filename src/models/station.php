<?php

class StationPage extends Page
{
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

    // Location
    public function location()
    {
        $location = array(
            $this->geolat()->float(),
            $this->geolng()->float()
        );

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
