<?

kirbytext::$tags['distances'] = array(
  'attr' => [
    'title'
  ],
  'html' => function($tag) {
    return pattern('common/distances', [
      'title' => $tag->attr('title', 'Distances of Places from the Station'),
      'distances' => $tag->page()->distances()->yaml()
    ], true);
  }
);
