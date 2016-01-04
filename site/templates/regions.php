<? snippet('_header') ?>

<section>
    <?
        snippet('page/header', array('title' => $page->title()));
    ?>

    <? foreach($pages->findOpen()->children() as $country): ?>
    <section>
        <h1><a href="<?= $country->url() ?>"><?= smartypants($country->title()) ?></a></h1>
        <?
            $regions = $country->children()->sortBy('title', 'asc');
            snippet('listing', array('items' => $regions));
        ?>
    </section>
    <? endforeach ?>

</section>

<? snippet('_footer') ?>
