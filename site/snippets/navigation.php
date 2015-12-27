<nav role="navigation" id="nav">
    <h1 class="hidden">Explore <?= smartypants($site->shorttitle()) ?> Handbook</h1>
    <ul>
    <? foreach($pages->visible() as $page): ?>
        <li>
            <a href="<?= $page->url() ?>"<? e($page->isOpen(), ' class="active"') ?>>
                <?= $page->title() ?>
            </a>
        </li>
    <? endforeach ?>
    </ul>
    <a href="#top" class="return">&#9652; Return to top</a>
</nav><!--/@navigation-->
