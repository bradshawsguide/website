<section class="c-section c-section--country">
    <h1 class="c-section__title"><a href="<?= $country->url() ?>"><?= smartypants($country->title()) ?></a></h1>
    <?
        $regions = $country->children();
        snippet('listing', array('items' => $regions));
    ?>
</section>
