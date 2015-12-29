<?php
if ($page->hasPrev() == true) {
    if ($page->prev()->shortTitle() != null) {
        $prevTitle = $page->prev()->shortTitle();
    } else {
        $prevTitle = $page->prev()->title();
    }
}

if ($page->hasNext() == true) {
    if ($page->next()->shortTitle() != null) {
        $nextTitle = $page->next()->shortTitle();
    } else {
        $nextTitle = $page->next()->title();
    }
}
?>
<nav class="prevnext">
    <h1 class="hidden">Previous and Next <?= $page->parent()->title() ?></h1>
    <? if ($page->hasPrev() == true): ?>
        <a href="<?= $page->prev()->url() ?>" rel="prev"><span><?= smartypants($page->prev()->title()) ?></span></a>
    <? endif ?>
    <? if ($page->hasNext() == true): ?>
        <a href="<?= $page->next()->url() ?>" rel="next"><span><?= smartypants($page->next()->title()) ?></span></a>
    <? endif ?>
</nav><!--/.prevnext-->
