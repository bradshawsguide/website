<? snippet('head') ?>

<?
  pattern('common/header', [
    'p' => $page,
    'parent' => page('explore')
  ]);

  foreach(alphabetise($stations) as $letter => $items):
    pattern('common/index', [
      'items' => $items,
      'letter' => $letter
    ]);
  endforeach;
?>

<? snippet('foot') ?>
