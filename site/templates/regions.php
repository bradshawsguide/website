<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>

<? foreach($pages->findOpen()->children() as $country): ?>
    <h2><a href="<?= $country->url() ?>"><?= smartypants($country->title()) ?></a></h2>
    <?
        $items = $country->children()->sortBy('title', 'asc');
        snippet('listing', array('items' => $items));
    ?>
<? endforeach ?>

</section>

<? snippet('_footer') ?>
