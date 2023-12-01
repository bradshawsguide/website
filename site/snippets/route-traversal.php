<?php
// Test if $item == ?route query
$currentRoute = get("route");

// Flatten array so that branch stops appear on main route
$stops = array_flatten($item->stops()->yaml());

// Get key by finding the name of this (nearest) station in stops
$stopKey = array_search($page->id(), $stops);

if (array_key_exists($stopKey - 1, $stops)) {
    $prevID = $stops[$stopKey - 1];
    $prev = page($prevID);
    $prevHref = $prev->url() . "?route=" . $item->uid();
}

if (array_key_exists($stopKey + 1, $stops)) {
    $nextID = $stops[$stopKey + 1];
    $next = page($nextID);
    $nextHref = $next->url() . "?route=" . $item->uid();
}
?>
<nav class="c-route-traversal" aria-labelledby="route-traversal-title"<?php e(
    $currentRoute == $item->uid(),
    " data-current"
); ?>>
    <h3 id="route-traversal-title">
        <a href="<?= $item->url() ?>">
            <?= kti($item->shortTitle()) ?>
        </a>
    </h3>
    <dl>
        <dt><b-visually-hidden>Previous station</b-visually-hidden></dt>
        <dd>
            <?php if (isset($prev)): ?>
                <a href="<?= $prevHref ?>" rel="prev">
                    <b-icon name="prev"/></b-icon><?= kti($prev->title()) ?>
                </a>
            <?php else: ?>
                <i>Terminus</i>
            <?php endif; ?>
        </dd>
        <dt><b-visually-hidden>Next station</b-visually-hidden></dt>
        <dd>
            <?php if (isset($next)): ?>
                <a href="<?= $nextHref ?>" rel="next">
                    <?= kti($next->title()) ?><b-icon name="next"/></b-icon>
                </a>
            <?php else: ?>
                <i>Terminus</i>
            <?php endif; ?>
        </dd>
    </dl>
</nav>
