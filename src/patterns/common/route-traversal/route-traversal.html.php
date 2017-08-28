<?
  $stops = $route->stops()->yaml();

  // If stop is a junction, return first value in the array
  array_walk($stops, function(&$value, $key) {
    if (is_array($value)) {
      $value = $value[0];
    } else {
      $value = $value;
    }
  });

  $stopKey = array_search ($page->uid(), $stops);

  if (array_key_exists(($stopKey - 1), $stops)) {
    $prevUID = $stops[$stopKey - 1];
    $prev = page('stations/'.$prevUID);
  }

  if (array_key_exists(($stopKey + 1), $stops)) {
    $nextUID = $stops[$stopKey + 1];
    $next = page('stations/'.$nextUID);
  }
?>
<nav class="c-route-traversal">
  <?= brick('h'.(isset($level) ? $level : 3))->html($title)->attr('class', 'c-route-traversal__title') ?>

  <? if(isset($prev)): ?>
    <a rel="prev" href="<?= $prev->url() ?>" aria-label="Previous station: <?= $prev->shortTitle()?>">
      <?= smartypants($prev->shortTitle()) ?>
    </a>
  <? endif ?>
  <? if(isset($next)): ?>
    <a rel="next" href="<?= $next->url() ?>" aria-label="Next station: <?= $next->shortTitle()?>">
      <?= smartypants($next->shortTitle()) ?>
    </a>
  <? endif ?>
</nav>
