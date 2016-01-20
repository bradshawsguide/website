<? snippet('_header') ?>

<section class="c-page">
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
