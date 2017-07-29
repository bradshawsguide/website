<div class="c-page__content">
<?
  if($p->hasImages()) {
    pattern('scopes/image', [
      'p' => $p,
      'layout' => $image
    ]);
  }

  if($p->info()->isNotEmpty() || $p->notes()->isNotEmpty()) {
    pattern('scopes/info', ['p' => $p]);
  }

  pattern('common/navigation', ['p' => $p]);

  if(isset($stops) && $stops != false) {
    pattern('common/routemap', [
      'p' => $p,
      'stops' => $p->stops()->yaml()
    ]);
  }

  if($p->text()->isNotEmpty()) {
    pattern('scopes/prose', ['p' => $p]);
  }

  if($p->distances()->isNotEmpty()) {
    pattern('scopes/distances', ['p' => $p]);
  }
?>
</div>
