<?

kirbytext::$tags['nationalrail'] = array(
  'html' => function($tag) {
    return '<a href="http://www.nationalrail.co.uk/stations_destinations/'.$tag->attr('nationalrail').'.aspx' . '">'.$tag->page()->title().' ('.$tag->attr('nationalrail').') on National Rail Enquiries</a>';
  }
);
