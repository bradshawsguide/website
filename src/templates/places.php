<?
  if (param('view') == null) {
    go($page->uri().'/section:1/view:list');
  }
  snippet('head')
?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'title' => $page->title()
  ]);

  pattern('common/tablist');

  if (param('view') == 'map') {
    pattern('common/map', [
      'url' => '/stations.geojson/'.$kirby->request()->params(),
      'class' => 'l-bleed'
    ]);
  } else {
    pattern('common/section/featured', [
      'title' => 'Towns with pictorial illustrations',
      'items' => $places
    ]);
  };

  foreach($countries as $country) {
    pattern('common/section/list', [
      'title' => html::a($country->url(), smartypants($country->title())),
      'items' => $country->children()
    ]);
  }
?>
</section>

<? snippet('foot') ?>
