<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page
  ]);

  $companies = page('companies')->children()->visible()->sortBy('title');
  foreach($companies as $company) {
    $title = html::a($company->url(), $company->title());

    pattern('section/routes', [
      'title' => $title,
      'items' => page('routes')->children()->visible()->filterBy('company', $company->uid())
    ]);
  }
?>
</section>

<? snippet('foot') ?>
