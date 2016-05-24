<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  $companies = page('companies')->children()->sortBy('title');
  foreach($companies as $company) {
    // Only link to companies with visible pages
    if ($company->isVisible()) {
      $title = html::a($company->url(), $company->title());
    } else {
      $title = $company->title();
    };

    pattern('section/routes', [
      'title' => $title,
      'items' => page('routes')->children()->visible()->filterBy('company', $company->uid())
    ]);
  }
?>
</section>

<? snippet('foot') ?>
