<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('explore'),
    'title' => $page->title()
  ]);

  pattern('common/tablist', [
    'items' => $sectionTabs
  ]);

  pattern('common/switch');

  if (kirby()->request()->query()->view() == 'map') {
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
