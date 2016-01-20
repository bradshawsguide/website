<? snippet('_header') ?>

<section class="c-page">
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        foreach($pages->findOpen()->children() as $country) {
            snippet('section-country', array(
                'country' => $country
            ));
        }
    ?>

</section>

<? snippet('_footer') ?>
