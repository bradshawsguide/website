<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('explore'),
    'title' => $page->title()
  ]);

  pattern('common/search');

  pattern('common/tablist', [
    'items' => [
      ['/routes/section:1','Section 1'],
      ['/routes/section:2','Section 2'],
      ['/routes/section:3','Section 3'],
      ['/routes/section:4','Section 4']
    ]
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
