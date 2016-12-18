markers = [
<? foreach($pages->find('stations')->children() as $page): ?>
  <? if($page->location()->isNotEmpty()): ?>
  {
    "name": "<?= $page->title() ?>",
    "url": "<?= $page->url() ?>",
    "lat": <?= $page->location()->coordinates()->lat() ?>,
    "lng": <?= $page->location()->coordinates()->lng() ?>
   },
  <? endif ?>
<? endforeach ?>
];
