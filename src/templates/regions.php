<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => html::a('/explore/', 'Explore'),
  ]);

  foreach(page('regions')->children() as $country) {
    pattern('section/country', [
      'country' => $country
    ]);
  }
?>
</section>

<? snippet('foot') ?>
