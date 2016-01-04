<? snippet('_header') ?>

<section>
    <?
        snippet('page/header', array(
            'title' => $page->title()
        ));

        $items = $page->children();
        snippet('listing', array(
            'items' => $items
        ));
    ?>
</section>

<? snippet('_footer') ?>
