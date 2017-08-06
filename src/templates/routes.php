<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('explore'),
    'title' => $page->title()
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
