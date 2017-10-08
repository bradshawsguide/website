<?

kirbytext::$tags['station'] = array(
  'html' => function($tag) {
    if($station = page('stations/' . $tag->attr('station'))) {
        return '<strong class="station"><a href="'.$station->url().'">'.$station->title().'</a></strong>';
    }
  }
);
