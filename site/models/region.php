<?php

class RegionPage extends Kirby\Cms\Page
{
    public function featured()
    {
        if ($this->feature()->isNotEmpty()) {
            $featured = $this->feature()->toPages();
        } else {
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
}
