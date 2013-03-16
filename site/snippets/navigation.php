    <nav id="nav" role="navigation">
        <div class="container">
            <h1 class="hidden">Explore <?= smartypants($site->shorttitle()) ?> Handbook</h1>
            <ul>
<?          foreach($pages->visible() as $page): ?>
                <li><a<?= ($page->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $page->url() ?>"><?= html($page->title()) ?></a></li>
<?          endforeach ?>
            </ul>
        </div>
        <a href="#top" id="return">&#9652; Return to top</a>
    </nav><!--/@navigation-->

