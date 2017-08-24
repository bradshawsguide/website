<ol class="c-routemap c-routemap--branch">
<?
  foreach($stops as $key=>$stop) {
    if (!$key == 0) {
      pattern('common/routemap/station', [
        'station' => page('stations/'.$stop)
      ]);
    }
  }
?>
</ol>
