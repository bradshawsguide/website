<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <?
        $stations = $page->children()->sortby('title');
        snippet('alphabetise', array('search' => $stations));
    ?>
</section>

<? snippet('_footer') ?>
