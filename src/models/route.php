<?

class RoutePage extends Page {
  // Convert UIDs listed under `featured:` to array of pages
  public function railway() {
    $company = page('companies/'.$this->company()->uid());
    $companyLink = html::a($company->url(), $company->title());

    if (!$this->line()->empty()) {
      $railway = $companyLink."&#160;—&#160;".$this->line();
    } else {
      $railway = $companyLink;
    };

    return $railway;
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

  // Return `title_later` if exists, else normal title
  public function currentTitle() {
    if (!$this->line()->empty()) {
      $currentTitle = $this->line();
    } else {
      $currentTitle = $this->title();
    };

    return $currentTitle;
  }
};
