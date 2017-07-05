<? snippet('head') ?>

<article class="c-page">
<?
  $company = $page->company()->uid();
  $companyUrl = page('companies/'.$company)->url();
  $companyTitle = page('companies/'.$company)->title();

  pattern('page/header', [
    'p' => $page,
    'parent' => html::a($companyUrl, $companyTitle),
    'subtitle' => $page->description()
  ]);

  pattern('page/content', [
    'p' => $page,
    'stops' => $page->stops()->yaml()
  ]);

  pattern('common/traverse', [
    'p' => $page
  ]);
?>
</article>

<? snippet('foot') ?>
