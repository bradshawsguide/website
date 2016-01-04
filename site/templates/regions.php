<? snippet('_header') ?>

<section>
    <? snippet('page/header', array('title' => $page->title())); ?>

    <section>
    <? foreach($pages->findOpen()->children() as $country): ?>
        <h1><a href="<?= $country->url() ?>"><?= smartypants($country->title()) ?></a></h1>
        <?
            $regions = $country->children()->sortBy('title', 'asc');
            snippet('listing', array('items' => $regions));
        ?>
    <? endforeach ?>
    </section>

</section>

<? snippet('_footer') ?>
