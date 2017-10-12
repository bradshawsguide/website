<?

kirbytext::$tags['route'] = array(
  'html' => function($tag) {
    if($route = page('routes/'.$tag->attr('route'))) {
      $link = html::a($route->url(), $route->line());

      $title = brick('dt')->html($link);
      $title->attr('class', 'route-title');

      $desc = brick('dd')->html(kirbytextRaw($route->title()));
      $desc->attr('class', 'route-desc');

      $html = brick('dl')->html($title.$desc);
      $html->attr('class', 'route');

      return $html;
    }
  }
);
