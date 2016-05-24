<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  $companies = page('companies')->children()->sortBy('title');
  foreach($companies as $company) {

    // Routes for Isle of Wight and London fall under regions
    switch ($company->uid()) {
      case 'isle-of-wight':
        $company = page('/regions/england/isle-of-wight');
        break;
      case 'london':
        $company = page('/regions/england/london');
        break;
      default:
        $company = $company;
    }

    pattern('section/routes', [
      'title' => html::a($company->url(), $company->title()),
      'items' => page('routes')->children()->visible()->filterBy('company', $company->uid())
    ]);
  }
?>
</section>

<? snippet('foot') ?>
