<nav role="navigation">
    <a rel="up" href="<?= $pages->index()->findBy('title', "$parent")->url(); ?>"><?= smartypants($parent) ?></a>
</nav>
