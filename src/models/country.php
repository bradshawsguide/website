<?

class CountryPage extends Page {
  // Convert UIDs listed under `featured:` to array of pages
  public function featured() {
    $featured = $this->feature()->yaml();

    array_walk($featured, function(&$value, $key) {
      $value = page('stations/'.$value);
    });

    return $featured;
  }
};
