<?php
if ($page->hasPrev() == true) {
    if ($page->prev()->short_title()->isNotEmpty()) {
        $prevTitle = $page->prev()->short_title();
    } else {
        $prevTitle = $page->prev()->title();
    }
}

if ($page->hasNext() == true) {
    if ($page->next()->short_title()->isNotEmpty()) {
        $nextTitle = $page->next()->short_title();
    } else {
        $nextTitle = $page->next()->title();
    }
}
?>
<nav class="prevnext">
    <h1 class="hidden">Previous and Next <?= $page->parent()->title() ?></h1>
    <? if ($page->hasPrev() == true): ?>
        <a href="<?= $page->prev()->url() ?>" rel="prev"><span><?= smartypants($nextTitle) ?></span></a>
    <? endif ?>
    <? if ($page->hasNext() == true): ?>
        <a href="<?= $page->next()->url() ?>" rel="next"><span><?= smartypants($prevTitle) ?></span></a>
    <? endif ?>
</nav><!--/.prevnext-->
