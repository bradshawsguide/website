<?php

class SectionPage extends Kirby\Cms\Page
{
    // Return routes that correspond to this section
    public function routes()
    {
        return page("routes")
            ->children()
            ->filterBy("section", "==", $this->uid());
    }
}
