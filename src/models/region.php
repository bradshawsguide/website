<?

class RegionPage extends Page {
  // Convert UIDs listed under `featured:` to array of pages
  public function featured() {
    $featured = page('stations')->children()->filterBy('region', $this->uid())->filter(function($page) {
      return $page->hasImages();
    });

    return $featured;
  }
};
