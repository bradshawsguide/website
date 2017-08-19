<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('places'),
    'title' => $page->title()
  ]);

  pattern('common/tablist');

  if (param('view') == 'map') {
    pattern('common/map', [
      'url' => $page->uri().'.geojson/'.$kirby->request()->params(),
      'class' => 'l-bleed'
    ]);
  } else {
    foreach(alphabetise($stations) as $letter => $items):
      pattern('common/index', [
        'items' => $items,
        'letter' => $letter
      ]);
    endforeach;
  };
?>
</section>

<? snippet('foot') ?>
