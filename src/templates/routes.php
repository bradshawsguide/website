<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => html::a('/explore/', 'Explore'),
  ]);

  pattern('common/search');

  pattern('common/tablist');

  $companies = page('companies')->children()->visible()->sortBy('title');
  foreach($companies as $company) {
    $title = html::a($company->url(), $company->title());

    pattern('section/routes', [
      'title' => $title,
      'items' => page('routes')->children()->visible()->filterBy('company', $company->uid())->filterBy('section', param('section'))
    ]);
  }
?>
</section>

<? snippet('foot') ?>
