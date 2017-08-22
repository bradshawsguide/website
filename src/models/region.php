<?

class RegionPage extends Page {
  // Convert UIDs listed under `featured:` to array of pages
  public function featured() {
    $featured = page('stations')->children()->filterBy('region', $this->uid())->filter(function($page) {
      return $page->hasImages();
    });

    return $featured;
  }

  // Return `title_short` if exists, else normal title
  public function shortTitle() {
    if (!$this->title_short()->empty()) {
      $shortTitle = $this->title_short();
    } else {
      $shortTitle = $this->title();
    };

    return $shortTitle;
  }
};
