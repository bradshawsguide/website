<?php

class CompanyPage extends Kirby\Cms\Page
{
    // Provide a list of routes served by this company
    public function routes()
    {
        // TODO: Update filter to only finds routes by exact company UID in
        // array of company UIDs. Currently Great Western and Midland Great
        // Western are returned as being one in the same.
        return page("routes")
            ->children()
            ->filterBy("company", "*=", $this->uid());
    }

    // Provide a list of stations served by this company
    public function stations()
    {
        if ($this->routes()->isNotEmpty()) {
            foreach ($this->routes() as $route) {
                $stations[] = array_flatten($route->stops()->yaml());
            }

            $stations = array_flatten($stations);

            array_walk($stations, function (&$value, $key) {
                $value = page("stations/" . $value);
            });

            return $stations;
        } else {
            return [];
        }
    }
}
