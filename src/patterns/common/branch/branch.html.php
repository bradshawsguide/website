<ol class="c-routemap__stops">
<?
  foreach($stops as $stop) {
    $station = page('stations/'.$stop);
?>
  <li class="c-routemap__stop c-routemap__stop--station">
    <?= html::a($station->url(), $station->title()->smartypants()); ?>
  </li>
<? } ?>
</ol>
