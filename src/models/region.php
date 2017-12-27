<?php

class RegionPage extends Page
{
    public function featured()
    {
        if ($this->parent() == 'places') { // Country
            $featured = $this->feature()->yaml();

            array_walk($featured, function (&$value, $key) {
                $value = page('places/'.$value);
            });
        } else { // County
            $featured = $this->children()->filter(function ($page) {
                return $page->hasImages();
            });
        }

        return $featured;
    }

    public function listTitle()
    {
        if ($this->parent() == 'places') { // Country
            $listTitle = 'Counties in '.$this->shortTitle();
        } else { // County
            $listTitle = 'Places in '.$this->title();
        }

        return $listTitle;
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
}
