<? snippet('_header') ?>

<section>
    <?
        snippet('page/header', array('title' => $page->title()));

        $items = $page->children()->sortBy('title', 'asc');
        snippet('listing', array('items' => $items));
    ?>
</section>

<? snippet('_footer') ?>
