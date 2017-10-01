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

  // Return `title_later` if exists, else normal title
  public function currentTitle() {
    if (!$this->title_later()->empty()) {
      $currentTitle = $this->title_later();
    } else {
      $currentTitle = $this->title();
    };

    return $currentTitle;
  }
};
