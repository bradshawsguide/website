<? snippet('head') ?>

<article class="c-page">
<?
  $company = $page->company()->uid();
  $companyUrl = page('companies/'.$company)->url();
  $companyTitle = page('companies/'.$company)->title();

  pattern('page/header', [
    'p' => $page,
    'parent' => html::a($companyUrl, $companyTitle)
  ]);
?>
  <div class="l-grid l-grid--route">
<?
  pattern('page/content', [
    'p' => $page
  ]);

  pattern('section/routemap', [
    'stops' => $page->stops()->yaml()
  ]);
?>
  </div>
<?
  pattern('section/related', [
    'p' => $page,
    'type' => 'line'
  ]);

  pattern('page/footer', ['p' => $page]);
?>
</article>

<? snippet('foot') ?>
