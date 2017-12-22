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

    // API consistency
    public function links()
    {
        $links = array (
            'wikipedia' => (!$this->wikipedia()->empty()) ?
                '- (wikipedia: '.urlencode($this->wikipedia()).')' : '',
            'trainline' => (!$this->code()->empty()) ?
                '- (trainline: '.$this->uid().')' : '',
            'disused' => (!$this->disused()->empty()) ?
                '- (disused: '.$this->disused().')' : '',
        );

        return implode("\n", $links);
    }
}
