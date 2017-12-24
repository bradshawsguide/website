<?php snippet('head') ?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'pretitle' => 'A descriptive guide to places in',
    'title' => 'Great Britain & Ireland',
    'modifiers' => ['index']
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
