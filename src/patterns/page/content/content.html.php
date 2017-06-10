<div class="c-page__content">
  <div class="u-pull-right">
    <?
      if($p->info()->isNotEmpty() || $p->notes()->isNotEmpty()) {
        pattern('scopes/info', ['p' => $p]);
      }

      pattern('common/navigation', ['p' => $p]);

      if(isset($images) && $images != false) {
        if($p->hasImages()) {
          pattern('page/image', ['p' => $p]);
        };
      }

      if(isset($stops) && $stops != false) {
        pattern('common/routemap', [
          'p' => $p,
          'stops' => $p->stops()->yaml()
        ]);
      }
    ?>
  </div>
<?
  if($p->text()->isNotEmpty()) {
    pattern('scopes/prose', ['p' => $p]);
  }

  if($p->distances()->isNotEmpty()) {
    pattern('scopes/distances', ['p' => $p]);
  }
?>
</div>
