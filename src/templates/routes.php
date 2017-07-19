<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => page('explore'),
  ]);

  pattern('common/search');

  pattern('common/tablist');

  foreach($companies as $company) {
    pattern('section/routes', [
      'title' => html::a($company->url(), $company->title()),
      'items' => $routes->filterBy('company', $company->uid())
    ]);
  }
?>
</section>

<? snippet('foot') ?>
