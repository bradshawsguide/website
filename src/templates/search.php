<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);
?>
<div class="c-page__content">
<?
  $point = geo::point($geo);
  $items = page('stations')->children()->filterBy('location', 'radius', [
    'lat'    => $point->lat(),
    'lng'    => $point->lng(),
    'radius' => 10
  ]);

  foreach($items as $item) {
    html::a($item->url(), smartypants($item->title()));
  }

  if($results && $results->count()) {
    pattern('common/results');

    pattern('common/pagination', [
      'pagination' => $results->pagination()
    ]);
  } else {
    echo "<p>No results for <strong>".esc($query)."</strong></p>";
  }
?>
</div>
</section>

<? snippet('foot') ?>
