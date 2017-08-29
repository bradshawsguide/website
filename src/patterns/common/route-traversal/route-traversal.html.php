<?
  // Flatten array so that branch stops appear on main route
  $stops = flatten_array($route->stops()->yaml());
  $stopKey = array_search($page->uid(), $stops);

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
