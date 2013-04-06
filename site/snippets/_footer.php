    </main><!--/@main-->

    <nav role="navigation" id="nav">
        <h1 class="hidden">Explore <?= smartypants($site->shorttitle) ?> Handbook</h1>
        <ul>
<?      foreach($pages->visible() as $page): ?>
            <li><a href="<?= $page->url() ?>" id="nav-<?= str::lower($page->title) ?>"<?= ($page->isOpen()) ? ' class="is-active"' : '' ?>><?= html($page->title()) ?></a></li>
<?      endforeach ?>
        </ul>
        <a href="#top" id="return">&#9652; Return to top</a>
    </nav><!--/@navigation-->

    <form action="/search" role="search" id="search"<? if(isset($search)): ?> class="shown"<? endif ?>>
        <input type="search" class="input" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey&#8230;"<? if(isset($search)): ?>  value="<?= html($search->query()) ?>"<? endif ?>/><!--
     --><input type="submit" class="button" value="Search"/>
    </form><!--/@search-->

    <footer role="contentinfo">
        <p><small>&#169; <abbr title="2013">MMXIII</abbr> <a href="http://paulrobertlloyd.com/">Paul Robert Lloyd</a></small></p>
        <!--p><small xmlns:dct="http://purl.org/dc/terms/">This work (<cite property="dct:title"><?= smartypants($site->title) ?></cite>, by <a href="http://bradshaws.co/" rel="dct:creator"><span property="dct:title"><?= smartypants($site->author) ?></span></a>), identified by <a href="<?= $site->publisherurl ?>" rel="dct:publisher"><span property="dct:title"><?= smartypants($site->publisher) ?></span></a>, is <a rel="license" href="<?= $site->licenseurl ?>">free of known copyright restrictions</a>.</small></p-->
        <p>&#160;</p>
        <p><a rel="me" href="http://twitter.com/bradshawsguide">Follow George Bradshaw on Twitter</a></p>
    </footer><!--/@contentinfo-->

    <?= js('assets/scripts/scripts.js') ?>
</body>
</html>