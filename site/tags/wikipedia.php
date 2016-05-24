<?

kirbytext::$tags['wikipedia'] = [
  'html' => function($tag) {
    $text = $tag->attr('wikipedia');
    $url = 'http://en.wikipedia.org/w/index.php?search='.urlencode($text);

    return html::a($url, $text);
  }
];
