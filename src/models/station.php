<?

class StationPage extends Page {
  // Make parent() refer to region listed under `region:`
  public function parent() {
    $regionPath = $this->site()->page('regions')->index()->filterBy('uid', $this->region());

    return page($regionPath);
  }

  // Convert UIDs listed under `route:` to array of pages
  public function routes() {
    $routes = $this->route()->yaml();

    array_walk($routes, function(&$value, $key) {
      $value = page('routes/'.$value);
    });

    return $routes;
  }
};
