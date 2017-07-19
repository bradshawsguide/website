<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', [
    'p' => $page,
    'parent' => page('explore')
  ]);

  foreach($countries as $country) {
    pattern('section/country', [
      'country' => $country
    ]);
  }
?>
</section>

<? snippet('foot') ?>
