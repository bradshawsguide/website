<ol class="c-routemap__line">
<? foreach($stops as $stop):
  if (is_array($stop)) {
    $type = 'branch';
    $station = page('stations/'.$stop['junction']);
  } else {
    $type = 'station';
    $station = page('stations/'.$stop);
  }
?>
  <li>
  <?
    pattern('common/routemap/station', [
      'station' => $station
    ]);

    if ($type == 'branch') {
      pattern('common/routemap/line', [
        'stops' => $stop['stops']
      ]);
    }
  ?>
  </li>
<? endforeach ?>
</ol>
