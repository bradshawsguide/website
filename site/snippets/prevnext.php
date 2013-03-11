<nav class="prevnext">
    <h1 class="hidden">Previous and Next <?= $page->parent()->title() ?></h1>
    <a href="<?= $page->prev()->url() ?>" rel="prev"><?= $page->prev()->title() ?></a>
    <a href="<?= $page->next()->url() ?>" rel="next"><?= $page->next()->title() ?></a>
</nav><!--/.prevnext-->
