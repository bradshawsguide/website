    </main><!--/@main-->

    <nav role="navigation" id="nav">
        <h1 class="hidden">Explore <?= smartypants($site->shorttitle) ?> Handbook</h1>
        <ul>
<?      foreach($pages->visible() as $page): ?>
            <li><a href="<?= $page->url() ?>" id="nav-<?= str::lower($page->title) ?>"<?= ($page->isOpen()) ? ' class="is-active"' : '' ?>><?= html($page->title()) ?></a></li>
<?      endforeach ?>
        </ul>
        <a href="#top" class="return">&#9652; Return to top</a>
    </nav><!--/@navigation-->

    <form role="search" id="search"<? if(isset($search)): ?> class="shown"<? endif ?> action="/search">
        <fieldset>
            <input type="search" class="input" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey&#8230;"<? if(isset($search)): ?>  value="<?= html($search->query()) ?>"<? endif ?>/><!--
         --><input type="submit" class="button" value="Search"/>
        </fieldset>
        <a href="#top" class="return">&#9652; Return to top</a>
    </form><!--/@search-->

    <footer role="contentinfo">
        <p><small>&#169; <abbr title="2013">MMXIII</abbr> <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a></small></p>
        <p>Made with <a href="http://getkirby.com">Kirby</a>. Hosted by <a href="http://webfaction.com">WebFaction</a>. <a href="/about/stylegide">Styleguide</a></p>
        <ul>
            <li><a rel="me" href="https://foursquare.com/bradshawsguide">Follow George Bradshaw on Foursquare</a></li>
            <li><a rel="me" href="https://twitter.com/bradshawsguide">Follow George Bradshaw on Twitter</a></li>
        </ul>
    </footer><!--/@contentinfo-->

    <?= js('assets/scripts/scripts.js') ?>
</body>
</html>