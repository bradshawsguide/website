<?
    // find the open/active page on the first level
    $open    = $pages->findOpen();
    $items = ($open) ? $open->children()->visible() : false;
?>
<? if($items && $items->count()): ?>
<nav role="navigation">
    <ul>
<?      foreach($items AS $item): ?>
        <li><a<?= ($item->isOpen()) ? ' class="active"' : '' ?> href="<?= $item->url() ?>"><?= html($item->title()) ?></a></li>
<?      endforeach ?>
    </ul>
</nav>
<? endif ?>
