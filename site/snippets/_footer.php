    </main><!--/@main-->

    <nav role="navigation" id="nav">
        <h1 class="hidden">Explore <?= smartypants($site->shorttitle()) ?> Handbook</h1>
        <ul>
<?      foreach($pages->visible() as $page): ?>
            <li><a<?= ($page->isOpen()) ? ' class="is-active"' : '' ?> href="<?= $page->url() ?>"><?= html($page->title()) ?></a></li>
<?      endforeach ?>
        </ul>
        <a href="#top" id="return">&#9652; Return to top</a>
    </nav><!--/@navigation-->

<? snippet('search'); ?>

    <footer role="contentinfo">
        <p><small>&#169; <abbr title="2013">MMXIII</abbr> <a href="http://paulrobertlloyd.com/">Paul Robert Lloyd</a></small></p>
        <!--p><small xmlns:dct="http://purl.org/dc/terms/">This work (<cite property="dct:title"><?= smartypants($site->title()) ?></cite>, by <a href="http://bradshaws.co/" rel="dct:creator"><span property="dct:title"><?= smartypants($site->author()) ?></span></a>), identified by <a href="<?= $site->publisherurl() ?>" rel="dct:publisher"><span property="dct:title"><?= smartypants($site->publisher()) ?></span></a>, is <a rel="license" href="<?= $site->licenseurl() ?>">free of known copyright restrictions</a>.</small></p-->
        <p><a rel="me" href="http://twitter.com/bradshawsguide">Follow George Bradshaw on Twitter</a></p>
    </footer><!--/@contentinfo-->

    <?= js('assets/scripts/scripts.js') ?>
</body>
</html>