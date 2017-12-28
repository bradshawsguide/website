<?php

class CompanyPage extends Page
{
    // Provide a list of routes served by this company
    public function routes()
    {
        // TODO: Create more exact filter that only finds routes by exact
        // company UID in array of company UIDs. Currently Great Western
        // and Midland Great Western are returned as being one in the same.
        $routes = page('routes')->children()->filterBy('company', '==', $this->uid());

        return $routes;
    }

    // Provide a list of stations served by this company
    public function stations()
    {
        foreach ($this->routes() as $route) {
            $stations[] = array_flatten($route->stops()->yaml());
        };

        $stations = array_flatten($stations);

        array_walk($stations, function (&$value, $key) {
            $value = page('stations/'.$value);
        });

        return $stations;
    }
}
