<aside class="c-aside">
  <?
    pattern('common/map', [
      'url' => $page->uri().'.geojson'
    ]);

    pattern('common/routemap', [
      'stops' => $stops
    ]);
  ?>
</aside>
