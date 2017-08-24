<ol class="c-routemap">
<?
  foreach($stops as $stop) {
    if (is_array($stop)) {
      pattern('common/routemap/station', [
        'station' => page('stations/'.$stop[0])
      ]);

      pattern('common/routemap/branch', [
        'stops' => $stop
      ]);
    } else {
      pattern('common/routemap/station', [
        'station' => page('stations/'.$stop)
      ]);
    }
  }
?>
</ol>
