    </main><!--/@main-->

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

    <form role="search" id="search"<? if(isset($search)): ?> class="shown"<? endif ?> action="/search">
        <fieldset>
            <input type="search" class="input" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey&#8230;"<? if(isset($search)): ?> value="<?= html($search->query()) ?>"<? endif ?>/><!--
         --><input type="submit" class="button" value="Search"/>
        </fieldset>
        <a href="#top" class="return">&#9652; Return to top</a>
    </form><!--/@search-->

    <footer role="contentinfo">
        <p><small>&#169; <abbr title="2013">MMXIII</abbr> <a href="http://paulrobertlloyd.com">Paul Robert Lloyd</a></small></p>
        <p><a href="/about/colophon">Colophon</a>. <a href="/about/styleguide">Styleguide</a></p>
        <ul>
            <li><a rel="me" href="https://foursquare.com/bradshawsguide">Follow George Bradshaw on Foursquare</a></li>
            <li><a rel="me" href="https://twitter.com/bradshawsguide">Follow George Bradshaw on Twitter</a></li>
        </ul>
    </footer><!--/@contentinfo-->

    <script>
        var _paq = _paq || [];
            _paq.push(['trackPageView']);
            _paq.push(['enableLinkTracking']);

        (function () {
            var host = "https://analytics.paulrobertlloyd.com/";
            var script = document.createElement('script');
            var ref = document.getElementsByTagName('script')[0];

            _paq.push(['setTrackerUrl', host + 'piwik.php']);
            _paq.push(['setSiteId', 2]);

            script.src = host + 'piwik.js';
            script.async = true;
            script.defer = true;
            ref.parentNode.insertBefore(script, ref);
        })();
    </script>
    <noscript><img class="hidden" src="https://analytics.paulrobertlloyd.com/piwik.php?idsite=2" alt=""/></noscript>
</body>
</html>
