<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <?
        $search = $page->children()->sortby('title');
        snippet('alphabetise', array('search' => $search));
    ?>
</section>

<? snippet('_footer') ?>
