<?php snippet('head') ?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title()
]);

foreach (page('places')->children() as $country) {
    pattern('common/section/list', [
        'title' => html::a($country->url(), smartypants($country->title())),
        'items' => $country->children()
    ]);
}
?>
</section>

<?php snippet('foot') ?>
