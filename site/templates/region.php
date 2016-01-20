<? snippet('_header') ?>

<article class="c-page">
    <?
        snippet('breadcrumb', array(
            'parent' => $page->country()
        ));

        snippet('page/header', array(
            'title' => $page->title()
        ));

        snippet('page/navigation');

        snippet('content');

        snippet('section-related');

        $region = $page->title();
        $stations = $pages->find('stations')->children()->filterBy('region', $region);
        if($stations->count()) {
            snippet('section-stations', array(
                'stations' => $stations,
                'context' => 'region'
            ));
        }

        snippet('shorturl');

        snippet('prevnext');
    ?>
</article>

<? snippet('_footer') ?>
