<? snippet('head') ?>

<section class="c-page">
<?
  pattern('page/header', ['p' => $page]);

  foreach($pages->findOpen()->children() as $country) {
    pattern('section/country', array(
      'country' => $country
    ));
  }
?>
</section>

<? snippet('foot') ?>
