<?

class SearchPage extends Page {
  public function title() {
    $geo = get('g');
    $query = get('q');

    if ($query == true) {
      return "Search results for ‘".esc(get('q'))."’";
    };

    if ($geo == true) {
      return "Stations near you";
    };
  }
}
