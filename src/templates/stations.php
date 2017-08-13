<? snippet('head') ?>

<section class="c-page">
<?
  pattern('common/page/header', [
    'parent' => page('explore'),
    'title' => $page->title()
  ]);

  pattern('common/tablist', [
    'items' => [
      ['/stations/section:1','Section 1'],
      ['/stations/section:2','Section 2'],
      ['/stations/section:3','Section 3'],
      ['/stations/section:4','Section 4']
    ]
  ]);

  pattern('common/switch');

  foreach(alphabetise($stations) as $letter => $items):
    pattern('common/index', [
      'items' => $items,
      'letter' => $letter
    ]);
  endforeach;
?>
</section>

<? snippet('foot') ?>
