markers = [
<? foreach($pages->find('stations')->children()->visible() as $page): ?>
  {
    "name": "<?= $page->title() ?>",
    "url": "<?= $page->url() ?>",
    "lat": <?= $page->location()->coordinates()->lat() ?>,
    "lng": <?= $page->location()->coordinates()->lng() ?>
   },
<? endforeach ?>
];
