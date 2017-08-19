<?

class CompanyPage extends Page {
  // Convert UIDs listed under `featured:` to array of pages
  public function featured() {
    $featured = page('stations')->children()->filterBy('company', '*=', $this->uid())->filter(function($page) {
      return $page->hasImages();
    });

    return $featured;
  }

  // Provide a list of stations served by this company
  public function stations() {
    $stations = page('stations')->children()->filterBy('company', '*=', $this->uid());

    return $stations;
  }
};
