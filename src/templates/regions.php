<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page
  ]);

  foreach(page('regions')->children() as $country) {
    pattern('section/country', [
      'country' => $country
    ]);
  }
?>
</section>

<? snippet('foot') ?>
