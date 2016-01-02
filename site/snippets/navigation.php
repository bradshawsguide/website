<nav class="navigation" role="navigation">
    <h1 class="navigation__title">Explore <?= smartypants($site->title()) ?></h1>
    <ul>
    <? foreach($pages->visible() as $page): ?>
        <li>
            <a href="<?= $page->url() ?>"<? e($page->isOpen(), ' class="is-active"') ?>><?= $page->title() ?></a>
        </li>
    <? endforeach ?>
    </ul>
</nav>
