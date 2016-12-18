markers = [
<? foreach($pages->find('stations')->children() as $page): ?>
  <? if($page->location()->isNotEmpty()):
    if ($page->title_later()->isNotEmpty()) {
      $title = $page->title_later();
    } else {
      $title = $page->title();
    };
  ?>
  {
    "name": "<?= $title ?>",
    "url": "<?= $page->url() ?>",
    "lat": <?= $page->location()->coordinates()->lat() ?>,
    "lng": <?= $page->location()->coordinates()->lng() ?>
   },
  <? endif ?>
<? endforeach ?>
];
