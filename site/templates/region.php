<? snippet('_header') ?>

<article>
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('page/parent', array(
            'parent' => $page->country()
        ));

        snippet('page/navigation');

        snippet('content');

        snippet('section-related');

        $region = $page->title();
        $stations = $pages->find('stations')->children()->filterBy('region', $region);
        snippet('section-stations', array(
            'stations' => $stations,
            'context' => 'region'
        ));

        snippet('shorturl');

        snippet('prevnext');
    ?>
</article>

<? snippet('_footer') ?>
