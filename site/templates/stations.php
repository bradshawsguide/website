<? snippet('_header') ?>

<section class="c-page">
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        $stations = $page->children();
        snippet('alphabetise', array(
            'search' => $stations
        ));
    ?>
</section>

<? snippet('_footer') ?>
