<aside class="c-aside" role="complementary">
  <?
    pattern('common/map', [
      'url' => $page->uri()
    ]);

    pattern('common/routemap', [
      'stops' => $stops
    ]);
  ?>
</aside>
