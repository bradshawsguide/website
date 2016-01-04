<section>
    <h1><a href="<?= $country->url() ?>"><?= smartypants($country->title()) ?></a></h1>
    <?
        $regions = $country->children();
        snippet('listing', array('items' => $regions));
    ?>
</section>
