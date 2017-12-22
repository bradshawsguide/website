<?php
// Test if $route == ?route query
$currentRoute = kirby()->request()->query()->route();

// Flatten array so that branch stops appear on main route
$stops = array_flatten($route->stops()->yaml());

// Get key by finding the name of this (nearest) station in stops
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

<nav class="c-route-traversal<?php if ($currentRoute == $route->uid()): ?> c-route-traversal--current<?php endif ?>">
    <?= brick('h'.(isset($level) ? $level : 3))->html($title)->attr('class', 'c-route-traversal__title') ?>

    <?php if (isset($prev)): ?>
        <a class="c-route-traversal__prev" rel="prev" href="<?= $prev->url() ?>?route=<?= $route->uid() ?>" aria-label="Previous station: <?= $prev->title()?>">
            <?= smartypants($prev->title()) ?>
        </a>
    <?php else: ?>
        <em class="c-route-traversal__prev">Terminus</em>
    <?php endif ?>
    <?php if (isset($next)): ?>
        <a class="c-route-traversal__next" rel="next" href="<?= $next->url() ?>?route=<?= $route->uid() ?>" aria-label="Next station: <?= $next->title()?>">
            <?= smartypants($next->title()) ?>
        </a>
    <?php else: ?>
        <em class="c-route-traversal__next">Terminus</em>
    <?php endif ?>
</nav>
