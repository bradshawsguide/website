<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <?
    $items = $page->children()->sortBy('title', 'asc');
    if($items && $items->count()):
    ?>
        <? snippet('listing') ?>
    <? endif ?>
</section>

<? snippet('_footer') ?>
