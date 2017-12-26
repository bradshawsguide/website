<?php

class CompanyPage extends Page
{
    // Provide a list of stations served by this company
    public function stations()
    {
        $stations = page('stations')->children()->filterBy('company', '==', $this->uid());

        return $stations;
    }

    // Provide a list of routes served by this company
    public function routes()
    {
        // TODO: Create more exact filter that only finds routes by exact
        // company UID in array of company UIDs. Currently Great Western
        // and Midland Great Western are returned as being one in the same.
        $routes = page('routes')->children()->filterBy('company', '==', $this->uid());

        return $routes;
    }
}
