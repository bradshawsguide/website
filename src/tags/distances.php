<?

kirbytext::$tags['distances'] = array(
  'attr' => [
    'title',
    'yaml'
  ],
  'html' => function($tag) {
    return pattern('common/distances', [
      'title' => $tag->attr('title', 'Distances of Places from the Station'),
      'distances' => $tag->attr('yaml', $tag->page()->distances())->yaml()
    ], true);
  }
);
