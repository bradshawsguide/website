<?

kirbytext::$tags['station'] = array(
  'html' => function($tag) {
    if($station = page('stations/'.$tag->attr('station'))) {
      $link = html::a($station->url(), $station->title());

      $title = brick('dt')->html($link);
      $title->attr('class', 'station-title');

      if($desc = $station->desc()->isNotEmpty()) {
        $desc = brick('dd')->html($station->desc());
        $desc->attr('class', 'station-desc');
      }

      $html = brick('dl')->html($title.$desc);
      $html->attr('class', 'station');

      return $html;
    }
  }
);
