<? snippet('head') ?>

<div class="c-page">
<?
  $sections = page('sections')->children();
  $i = 1;

  foreach($sections as $section) {
    pattern('common/section/featured', [
      'title' => html::a("/routes/section:$i", $section->title()),
      'content' => $section->subtitle(),
      'items' => page('stations')->children()->filterBy('section', "$i")->filter(function($page) {
        return $page->hasImages();
      })->limit(3)
    ]);

    $i++;
  }
?>
</div>

<? snippet('foot') ?>
