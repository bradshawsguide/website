<? snippet('head') ?>

<div class="c-page">
<?
  pattern('common/section/featured', [
    'title' => html::a('/stations/section:1', 'Section <abbr aria-label="1">I</abbr>: London and its Environs'),
    'items' => page('stations')->children()->filterBy('section', '1')->filter(function($page) {
      return $page->hasImages();
    })->limit(3)
  ]);

  pattern('common/section/featured', [
    'title' => html::a('/stations/section:2', 'Section <abbr aria-label="2">II</abbr>: North & South Wales, Ireland and the Lakes of Killarney'),
    'items' => page('stations')->children()->filterBy('section', '2')->filter(function($page) {
      return $page->hasImages();
    })->limit(3)
  ]);

  pattern('common/section/featured', [
    'title' => 'Section <abbr aria-label="3">III</abbr>: The English and Scotch Lake Districts and Ayr',
    'items' => page('stations')->children()->filterBy('section', '3')->filter(function($page) {
      return $page->hasImages();
    })->limit(3)
  ]);

  pattern('common/section/featured', [
    'title' => 'Section <abbr aria-label="4">IV</abbr>: The great manufacturing districts of Lancashire & Yorkshire',
    'items' => page('stations')->children()->filterBy('section', '4')->filter(function($page) {
      return $page->hasImages();
    })->limit(3)
  ]);
?>
</div>

<? snippet('foot') ?>
