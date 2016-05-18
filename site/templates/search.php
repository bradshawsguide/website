<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/header', array(
    'title' => "Search results for ‘".esc($query)."’"
  ));

  if($results && $results->count()) {
    pattern('common/results');

    pattern('common/pagination', array(
      'pagination' => $results->pagination()
    ));
  } else {
    echo "<p>No results for <strong>".esc($query)."</strong></p>";
  }
?>
</section>

<? snippet('foot') ?>
