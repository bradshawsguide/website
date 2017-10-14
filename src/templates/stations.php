<?php
if (param('view') == null) {
    go($page->uri().'/section:1/view:list');
}
snippet('head', [
    'alternate' => $page->url().'.geojson'.'/section:'.param('section')
]);
?>

<section class="c-page">
<?php
pattern('common/page/header', [
    'title' => $page->title()
]);

pattern('common/tablist');

if (param('view') == 'map') {
    pattern('common/figure/map', [
        'url' => $page->uri().'.geojson/'.$kirby->request()->params(),
        'class' => 'cover'
    ]);
} else {
    foreach (alphabetise($stations) as $letter => $items):
        pattern('common/index', [
            'items' => $items,
            'letter' => $letter,
            'listAs' => 'columns'
        ]);
    endforeach;
};
?>
</section>

<?php snippet('foot') ?>
