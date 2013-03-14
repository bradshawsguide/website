<nav class="prevnext">
    <h1 class="hidden">Previous and Next <?= $page->parent()->title() ?></h1>
    <? if ($page->hasPrev() == true): ?><a href="<?= $page->prev()->url() ?>" rel="prev"><?= $page->prev()->title() ?></a><? endif ?>
    <? if ($page->hasNext() == true): ?><a href="<?= $page->next()->url() ?>" rel="next"><?= $page->next()->title() ?></a><? endif ?>
</nav><!--/.prevnext-->
