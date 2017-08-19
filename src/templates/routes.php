<?
  if (param('view') == null) {
    go($page->uri().'/section:1/view:list');
  };
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
      'url' => $page->uri().'.geojson/'.$kirby->request()->params(),
      'class' => 'l-bleed'
    ]);
  } else {
    foreach ($companies as $company) {
      pattern('common/section/routes', [
        'title' => html::a($company->url(), $company->title()),
        'items' => $routes->filterBy('company', $company->uid())
      ]);
    }
  }
?>
</section>

<? snippet('foot') ?>
