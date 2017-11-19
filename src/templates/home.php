<?php snippet('head') ?>

<div class="c-page">
<?php
pattern('common/page/content', [
    'editable' => false
]);

foreach (page('sections')->children() as $section) {
    $featured = page('sections/'.$section->dirname())->feature()->yaml();

    array_walk($featured, function (&$value, $key) {
        $value = page('places/'.$value);
    });

    pattern('common/section/featured', [
        'title' => html::a('/routes/section:'.$section->dirname(), $section->title()),
        'content' => $section->subtitle(),
        'items' => $featured
    ]);
}
?>
</div>

<?php snippet('foot') ?>
