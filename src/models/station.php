<?

class StationPage extends Page {
  // Make parent() refer to region listed under `region:`
  public function parent() {
    $regionPath = $this->site()->page('regions')->index()->filterBy('uid', $this->region());

    return page($regionPath);
  }

  // Make title_full() include `suffix:` if provided
  public function title_full() {
    $suffix = $this->title_suffix();
    $titleFull = $this->title();

    if (!$suffix->empty()) {
      $titleFull = $this->title().' <small>'.$suffix.'</small>';
    };

    return $titleFull;
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
