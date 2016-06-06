<?

class SearchPage extends Page {
  public function title() {
    return "Search results for ‘".esc(get('q'))."’";
  }
}
