<? snippet('head') ?>

<article class="c-page">
<?
  $company = $page->company()->uid();
  $companyUrl = page('companies/'.$company)->url();
  $companyTitle = page('companies/'.$company)->title();

  pattern('page/header', [
    'p' => $page,
    'subtitle' => html::a($companyUrl, smartypants($companyTitle))
  ]);

  pattern('page/content', ['p' => $page]);

  pattern('section/routemap', [
    'stops' => $page->stops()->yaml()
  ]);

  if (!$page->related()->empty()) {
    pattern('section/related', ['p' => $page]);
  }

  pattern('page/footer', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
