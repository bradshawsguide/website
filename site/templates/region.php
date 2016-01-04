<? snippet('_header') ?>

<article>
    <?
        snippet('page/header', array('title' => $page->title()));

        snippet('page/parent', array('parent' => $page->country()));

        snippet('page/navigation');

        echo kirbytext($page->text());

        snippet('pages/section-related');

        $region = $page->title();
        $stations = $pages->find('stations')->children()->filterBy('region', $region);
        snippet('page/section-stations', array('stations' => $stations, 'context' => 'region'));

        snippet('shorturl');

        snippet('prevnext');
    ?>
</article>

<? snippet('_footer') ?>
